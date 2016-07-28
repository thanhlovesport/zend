<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

class Nested_set{
    
    protected $_connect;
    protected $_db; // Tên cơ sở dữ liệu ta kết nối
    protected $_table;
    
    public $_data;
    
    public $_parent_id;
    
    // Thuộc tính chứa id của node mà ta di chuyển
    public $_id;
    
    public function __construct($params = array(),$adapter = 'mysql'){
        //echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';
        // In ra params xem thử 
        if(count($params) > 0){
            if ($adapter == 'mysql'){
                $link = mysql_connect($params['server'],$params['username'],$params['password']);
                if(!link){  // Kiểm tra kết nối
                    die('Could not connect'. mysql_error());
                }else { // Khi kết nối được lưu lại biến kết nối
                    // Tạo ra 3 thuộc tính cho lớp Nested_set
                    $this->_connect = $link;
                    $this->_db = $params['db'];
                    $this->_table = $params['table'];
                    $this->setdb();
                }
                
            }
        }
        
    }
    
    public function setconnect($connect){
        $this->_connect = $connect;
    }
    public function getconnect(){
        return $this->_connect;
    }
    public function setdb($db = null){ // Chỉ sử dụng khi người dùng không dùng hàm construct
        if($db != null){
            $this->_db = $db;
        }
        
        mysql_select_db($this->_db,$this->_connect);
    }
    public function settable($table){
        $this->_table = $table;
    }
    public function gettable(){
        return $this->_table;     
    }
    
    // Xóa Node
    public function removeNode($id,$option = 'branch'){
        $this->_id = $id;
        
        // Remove nguyên nhánh
        if ($option == 'branch' || $option == null) $this->removeBranch();
        
        // Remove một node
        if($option == 'one') $this->removeOne();
    }
    protected function removeBranch(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';

        /*================================================
         *  1. Lay thong cua node bi xoa
         /*================================================*/
        $infoNodeRemove  = $this->getNodeInfo($this->_id);
        
        
        /*================================================
         *  2. Tinh chieu dai cua nhanh chung muon xoa
        /*================================================*/
        $widthNodeRemove = $this->widthNode($infoNodeRemove['left'], $infoNodeRemove['right']);
        
        /*================================================
         *  3. Xóa nhánh
         /*================================================*/
        
        $sqlDelete = 'DELETE FROM'.$this->_table.'
                      WHERE left BEETWEEN'.$infoNodeRemove['left'].' AND '.$infoNodeRemove['right'];
        mysql_query($sqlDelete,$this->_connect);
        
        /*==================================================
         *  4. Cap nhat lai cai gia tri left - right của cây
         /*================================================= */
        
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left - ' . $widthNodeRemove . ')
		  				   WHERE left > ' . $infoNodeRemove['right'];
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right - ' . $widthNodeRemove . ')
		  				   WHERE right > ' . $infoNodeRemove['right'];
        mysql_query($sqlUpdateRight,$this->_connect);
                                        
    }
    protected function removeOne(){
        // Thông tin node xóa
        $nodeInfo = $this->getNodeInfo($this->_id);
        
        // Lấy id các node con của node xóa
        $sql = 'SELECT id
				FROM ' . $this->_table . '
				WHERE parent = ' . $this->_id . '
				ORDER BY lft DESC';
        $result = mysql_query($sql,$this->_connect);
        
        while($row = mysql_fetch_assoc($result)){
            $childIds[] = $row['id'];
        }
        
        // Gán các node con của node xóa vào node trên node xóa
        if(count($childIds)>0){
            foreach ($childIds as $val){
                $id = $val;
                $parent = $nodeInfo['parent'];
                $options = array('position' => 'after', 'brother_id' => $nodeInfo['id']);
                $this->moveNode($id, $parent,$options);
            }
            $this->removeNode($nodeInfo['id']);
        }
        
    }
    
    // $newParentID khi nếu update mà thay đổi cho node update node cha luôn
    public  function  updateNode($data, $id = null, $newParentID = 0){
        if($id != 0 && $id > 0 && count($data)!=0  ){
            	
            $strUpdate = $this->createUpdateQuery($data);
            $sql = 'UPDATE ' . $this->_table . '
					SET ' . $strUpdate . '
					WHERE id =  ' . $id;
            //echo '<br>' . $sql;
            mysql_query($sql,$this->_connect);
            	
            $infoNode = $this->getNodeInfo($id);
            	
            if($newParentID > 0 && $newParentID != null){
                if($infoNode['parent'] != $newParentID){
                    $this->moveNode($id, $newParentID);
                }
            }
            	
            	
        }
    }
   /*  public  function  updateNodea($data, $id = null, $newParentID = 0){
        if($id != 0 && $id > 0 && count($data)!=0  ){
            $sql = 'UPDATE '.$this->_table.'
                    SET name = "'.$data['name'].'",
                        url = "'.$data['url'].'"
                    WHERE id = '.$id;
        }
    } */
    
    protected function createUpdateQuery($data){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';
        if(count($data) > 0){
            $result = '';
            $i = 1;
            foreach ($data as $key => $value){
                if($i == 1){
                    $result .= "".$key." = ".$value.""; 
                }else{
                    $result .= ",".$key." = ".$value."";
                }
                $i++;
            }
        }
        return $result;
        
    }
    
    // $id : node mà chúng ta move, $parent: node mà chúng ta move đến làm con node đó
    public function moveNode($id, $parent, $options = null){
        $this->_id = $id;
        $this->_parent_id = $parent;
    
        if($options['position'] == 'right' || $options == null ) $this->moveRight();
    
        if($options['position'] == 'left') $this->moveLeft();
    
        if($options['position'] == 'before') $this->moveBefore($options['brother_id']);
    
        if($options['position'] == 'after') $this->moveAfter($options['brother_id']);
    
    }
    public function moveup($id){
        echo '<br>' . __METHOD__;
		$infoMoveNode = $this->getNodeInfo($id);
		echo '<pre>';
		print_r($infoMoveNode);
		echo '</pre>';
		$infoParentNode = $this->getNodeInfo($infoMoveNode['parent']);
		echo '<pre>';
		print_r($infoParentNode);
		echo '</pre>';
		
		$sql = 'SELECT * 
				FROM ' . $this->_table .' 
				WHERE parent = ' . $infoMoveNode['parent'] .' 
				AND left < ' . $infoMoveNode['left'] . ' 
				ORDER BY left DESC 
				LIMIT 1
				';
		$result = mysql_query($sql,$this->_connect);
		$infoBrotherNode = mysql_fetch_assoc($result); // Trả về chỉ 1 dòng
		
		echo '<pre>';
		print_r($infoBrotherNode);
		echo '</pre>';
		
		if(!empty($infoBrotherNode)){
			$options = array('position'=>'before','brother_id'=>$infoBrotherNode['id']);
			$this->moveNode($id, $infoMoveNode['parent'],$options);
		}
		      
    }
    
    public function moveDown($id){
    
        $infoMoveNode = $this->getNodeInfo($id);
    
        $infoParentNode = $this->getNodeInfo($infoMoveNode['parent']);
    
    
        $sql = 'SELECT *
				FROM ' . $this->_table .'
				WHERE parent = ' . $infoMoveNode['parent'] .'
				AND left > ' . $infoMoveNode['left'] . '
				ORDER BY left ASC
				LIMIT 1
				';
        $result = mysql_query($sql,$this->_connect);
        $infoBrotherNode = mysql_fetch_assoc($result);
    
    
        if(!empty($infoBrotherNode)){
            $options = array('position'=>'after','brother_id'=>$infoBrotherNode['id']);
            $this->moveNode($id, $infoMoveNode['parent'],$options);
        }
    
    }
    
    protected  function moveRight(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';
        echo '<br/>'.$this->_id;
        echo '<br/>'.$this->_parent_id;
        
        $infoMoveNode = $this->getNodeinfo($this->_id);
        $leftMoveNode = $infoMoveNode['left'];      // 3
        $rightMoveNode = $infoMoveNode['right'];    // 6
        
        
        /*================================================
         *  1. Tach nhanh khoi cay
         /*================================================*/
        
        $sqlSelect = 'UPDATE ' . $this->_table . '
					  SET left = (left - ' . $leftMoveNode . '),
					  	  right = (rightt - ' . $rightMoveNode . ')
					  WHERE left BETWEEN ' . $leftMoveNode . ' AND ' . $rightMoveNode;
        echo '<br>' . $sqlSelect;
        mysql_query($sqlSelect,$this->_connect);
        
        /*================================================
         *  2. Tinh do dai cua nhanh chung ta cat
         /*================================================*/
        $widthMoveNode = $this->widthNode($leftMoveNode, $rightMoveNode);
        
        /*================================================
         *  3. Cap nhat gia tri cac node nam ben phai cua node tach
         /*================================================*/
        
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left - ' . $widthMoveNode . ')
		  				   WHERE left > ' . $rightMoveNode;
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right - ' . $widthMoveNode . ')
		  				   WHERE right > ' . $rightMoveNode;
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         *  4. Lay ra thong thong tin cua node cha ($infoParentNode)
         /*================================================*/
        
        $infoParentNode = $this->getNodeInfo($this->_parent_id);
        $rightParentNode = $infoParentNode['right'];
        

        /*================================================
         * 5. Cap nhat cac gia tri truoc khi gan nhanh vao
         /*================================================*/
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left + ' . $widthMoveNode . ')
		  				   WHERE left > ' . $rightParentNode;
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right + ' . $widthMoveNode . ')
		  				   WHERE right >= ' . $rightParentNode;
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         * 6. Cap nhat level cho nhanh sap dc gan vao cay
         /*================================================*/
        $levelMoveNode = $infoMoveNode['level'];
        $levelParentNode = $infoParentNode['level'];
        $sqlUpdateLevel = 'UPDATE ' . $this->_table . '
						   SET level = (level - ' . $levelMoveNode . '+' . $levelParentNode . '+ 1)
						   WHERE right <=0';
        echo '<br>' . $sqlUpdateLevel;
        mysql_query($sqlUpdateLevel,$this->_connect);
        
        /*================================================
         * 7. Cap nhat nhanh truoc khi gan vao node moi
         /*================================================*/
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left + ' . $infoParentNode['right'] . ')
		  				   WHERE right <= 0 ';
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right + ' . $infoParentNode['right'] . '+' . $widthMoveNode . '- 1)
		  				   WHERE right <= 0 ';
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         * 8. Gan vao node cha, xác định id node cha của nó
         /*================================================*/
        $sqlUpdateNode = ' UPDATE ' . $this->_table . '
		 				   SET parent = ' .  $infoParentNode['id'] . '
		  				   WHERE id = ' . $infoMoveNode['id'];
        
        echo '<br>' . $sqlUpdateNode;
        mysql_query($sqlUpdateNode,$this->_connect);
        
    }
    public function widthNode($leftMoveNode,$rightMoveNode){
        $widthMoveNode = $rightMoveNode - $leftMoveNode + 1;
        return $widthMoveNode;
    }
    
    protected  function moveLeft(){
        $infoMoveNode = $this->getNodeInfo($this->_id);
        
        $leftMoveNode = $infoMoveNode['left']; // 3
        $rightMoveNode = $infoMoveNode['right']; // 6
        
        /*================================================
         *  1. Tach nhanh khoi cay
        /*================================================*/
        
        $sqlSelect = 'UPDATE ' . $this->_table . '
					  SET left = (left - ' . $leftMoveNode . '),
					  	  right = (right - ' . $rightMoveNode . ')
					  WHERE left BETWEEN ' . $leftMoveNode . ' AND ' . $rightMoveNode;
        echo '<br>' . $sqlSelect;
        mysql_query($sqlSelect,$this->_connect);
        

        /*================================================
         *  2. Tinh do dai cua nhanh chung ta cat
         /*================================================*/
        $widthMoveNode = $this->widthNode($leftMoveNode, $rightMoveNode);
        
        /*================================================
         *  3. Cap nhat gia tri cac node nam ben phai cua node tach
         /*================================================*/
        
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left - ' . $widthMoveNode . ')
		  				   WHERE left > ' . $rightMoveNode;
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right - ' . $widthMoveNode . ')
		  				   WHERE right > ' . $rightMoveNode;
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         *  4. Lay ra thong thong tin cua node cha ($infoParentNode)
         /*================================================*/
        
        $infoParentNode = $this->getNodeInfo($this->_parent_id);
        $leftParentNode = $infoParentNode['left'];
        
        
        /*================================================
         * 5. Cap nhat cac gia tri các node truoc khi gan nhanh vao
         /*================================================*/
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left + ' . $widthMoveNode . ')
		  				   WHERE left > ' . $leftParentNode;
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right + ' . $widthMoveNode . ')
		  				   WHERE right > ' . $leftParentNode;
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         * 6. Cap nhat level cho nhanh sap dc gan vao cay
         /*================================================*/
        $levelMoveNode = $infoMoveNode['level'];
        $levelParentNode = $infoParentNode['level'];
        $sqlUpdateLevel = 'UPDATE ' . $this->_table . '
						   SET level = (level - ' . $levelMoveNode . '+' . $levelParentNode . '+ 1)
						   WHERE right <=0';
        echo '<br>' . $sqlUpdateLevel;
        mysql_query($sqlUpdateLevel,$this->_connect);
        
        /*================================================
         * 7. Cap nhat nhanh truoc khi gan vao node moi
         /*================================================*/
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left + ' . $infoParentNode['left'] . '+' . ' 1)
		  				   WHERE right <= 0 ';
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right + ' . $infoParentNode['left'] . '+' . $widthMoveNode . ')
		  				   WHERE right <= 0 ';
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         * 8. Gan vao node cha
         /*================================================*/
        $sqlUpdateNode = ' UPDATE ' . $this->_table . '
		 				   SET parent = ' .  $infoParentNode['id'] . '
		  				   WHERE id = ' . $infoMoveNode['id'];
        
        echo '<br>' . $sqlUpdateNode;
        mysql_query($sqlUpdateNode,$this->_connect);
        
    }
    protected  function moveBefore($brother_id){

        $infoMoveNode = $this->getNodeInfo($this->_id);
        
        $leftMoveNode  = $infoMoveNode['left']; // 3
        $rightMoveNode = $infoMoveNode['right']; // 6   
        
        /*================================================
         *  1. Tach nhanh khoi cay
        /*================================================*/
        
        $sqlSelect = 'UPDATE ' . $this->_table . '
					  SET left = (left - ' . $leftMoveNode . '),
					  	  right = (right - ' . $rightMoveNode . ')
					  WHERE left BETWEEN ' . $leftMoveNode . ' AND ' . $rightMoveNode;
        echo '<br>' . $sqlSelect;
        mysql_query($sqlSelect,$this->_connect);
        
        
        /*================================================
         *  2. Tinh do dai cua nhanh chung ta cat
        /*================================================*/
        $widthMoveNode = $this->widthNode($leftMoveNode, $rightMoveNode);
        /*================================================
         *  3. Cap nhat gia tri cac node nam ben phai cua node tach
         /*================================================*/
        
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left - ' . $widthMoveNode . ')
		  				   WHERE left > ' . $rightMoveNode;
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right - ' . $widthMoveNode . ')
		  				   WHERE right > ' . $rightMoveNode;
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         *  4. Lay ra thong thong tin cua node cha ($infoParentNode)
        /*================================================*/
        
        $infoParentNode = $this->getNodeInfo($this->_parent_id);
        

        /*================================================
         *  5. Lay gia tri cua node brother ($infoBrotherNode)
         /*================================================*/
        
        $infoBrotherNode = $this->getNodeInfo($brother_id);
        $leftBrotherNode  = $infoBrotherNode['left'];
        
        /*================================================
         * 6. Cap nhat cac gia tri truoc khi gan nhanh vao
         /*================================================*/
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left + ' . $widthMoveNode . ')
		  				   WHERE left >= ' . $leftBrotherNode;
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right + ' . $widthMoveNode . ')
		  				   WHERE right > ' . $leftBrotherNode;
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         * 7. Cap nhat level cho nhanh sap dc gan vao cay
         /*================================================*/
        $levelMoveNode = $infoMoveNode['level'];
        $levelParentNode = $infoParentNode['level'];
        $sqlUpdateLevel = 'UPDATE ' . $this->_table . '
						   SET level = (level - ' . $levelMoveNode . '+' . $levelParentNode . '+ 1)
						   WHERE right <=0';
        echo '<br>' . $sqlUpdateLevel;
        mysql_query($sqlUpdateLevel,$this->_connect);
        
        /*================================================
         * 8. Cap nhat nhanh truoc khi gan vao node moi
         /*================================================*/
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left + ' . $leftBrotherNode . ')
		  				   WHERE right <= 0 ';
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right + ' . $leftBrotherNode . '+' . $widthMoveNode . '- 1)
		  				   WHERE right <= 0 ';
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         * 9. Gan vao node cha
         /*================================================*/
        $sqlUpdateNode = ' UPDATE ' . $this->_table . '
		 				   SET parent = ' .  $infoParentNode['id'] . '
		  				   WHERE id = ' . $infoMoveNode['id'];
        
        echo '<br>' . $sqlUpdateNode;
        mysql_query($sqlUpdateNode,$this->_connect);
        
    }
    protected  function moveAfter($brother_id){

        $infoMoveNode = $this->getNodeInfo($this->_id);
        
        $leftMoveNode = $infoMoveNode['left']; // 3
        $rightMoveNode = $infoMoveNode['right']; // 6
        
        /*================================================
         *  1. Tach nhanh khoi cay
        /*================================================*/
        
        $sqlSelect = 'UPDATE ' . $this->_table . '
					  SET left = (left - ' . $leftMoveNode . '),
					  	  right = (right - ' . $rightMoveNode . ')
					  WHERE left BETWEEN ' . $leftMoveNode . ' AND ' . $rightMoveNode;
        echo '<br>' . $sqlSelect;
        mysql_query($sqlSelect,$this->_connect);
        
        /*================================================
         *  2. Tinh do dai cua nhanh chung ta cat
        /*================================================*/
        $widthMoveNode = $this->widthNode($leftMoveNode, $rightMoveNode);
        
        /*================================================
         *  3. Cap nhat gia tri cac node nam ben phai cua node tach
         /*================================================*/
        
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left - ' . $widthMoveNode . ')
		  				   WHERE left > ' . $rightMoveNode;
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right - ' . $widthMoveNode . ')
		  				   WHERE right > '.$rightMoveNode ;                
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         *  4. Lay ra thong thong tin cua node cha ($infoParentNode)
         /*================================================*/
        
        $infoParentNode = $this->getNodeInfo($this->_parent_id);
        
        /*================================================
         *  5. Lay gia tri cua node brother ($infoBrotherNode)
        /*================================================*/
        
        $infoBrotherNode = $this->getNodeInfo($brother_id);
        $rightBrotherNode  = $infoBrotherNode['right'];
        
        /*================================================
         * 6. Cap nhat cac gia tri truoc khi gan nhanh vao
         /*================================================*/
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left + ' . $widthMoveNode . ')
		  				   WHERE left > ' . $rightBrotherNode;
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right + ' . $widthMoveNode . ')
		  				   WHERE right > ' . $rightBrotherNode;
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        /*================================================
         * 7. Cap nhat level cho nhanh sap dc gan vao cay
         /*================================================*/
        $levelMoveNode = $infoMoveNode['level'];
        $levelParentNode = $infoParentNode['level'];
        $sqlUpdateLevel = 'UPDATE ' . $this->_table . '
						   SET level = (level - ' . $levelMoveNode . '+' . $levelParentNode . '+ 1)
						   WHERE right <=0';
        echo '<br>' . $sqlUpdateLevel;
        mysql_query($sqlUpdateLevel,$this->_connect);
        

        /*================================================
         * 8. Cap nhat nhanh truoc khi gan vao node moi
         /*================================================*/
        $sqlUpdateLeft = ' UPDATE ' . $this->_table . '
		  				   SET left = (left + ' . $rightBrotherNode . '+ 1)
		  				   WHERE right <= 0 ';
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        $sqlUpdateRight = ' UPDATE ' . $this->_table . '
		  				   SET right = (right + ' . $rightBrotherNode . '+' . $widthMoveNode . ')
		  				   WHERE right <= 0 ';
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        

        /*================================================
         * 9. Gan vao node cha
         /*================================================*/
        $sqlUpdateNode = ' UPDATE ' . $this->_table . '
		 				   SET parent = ' .  $infoParentNode['id'] . '
		  				   WHERE id = ' . $infoMoveNode['id'];
        
        echo '<br>' . $sqlUpdateNode;
        mysql_query($sqlUpdateNode,$this->_connect);
        
    }
    
    // Insert Node, parent ở đây là ID, =1 có nghĩa mặc định ID node gốc là 1
    public function insertNode($data, $parent = 1,$options = null){
        //echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';
        
        $this->_data = $data;
        $this->_parent_id = $parent;
        if ($options['position'] == 'right' || $options['position'] == null ) $this->insertRight();
        if ($options['position'] == 'left' ) $this->insertLeft();
        if ($options['position'] == 'before' ) $this->insertBefore($options['brother_id']);
        if ($options['position'] == 'after' ) $this->insertAfter($options['brother_id']);
        
        
       
    }
    protected function insertAfter($brother_id){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';
        $parentInfo  = $this->getNodeInfo($this->_parent_id);
        $brotherInfo = $this->getNodeinfo($brother_id);
        // Update Node
        $sqlUpdateLeft = 'UPDATE ' .$this->_table
        . ' SET left = (left + 2) '
            . ' WHERE left > ' . ($brotherInfo['right']);
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        // Update trước các node cũ trước khi insert node mới
        
        $sqlUpdateRight = 'UPDATE ' .$this->_table
        . ' SET right = (right + 2) '
            . ' WHERE right > ' . ($brotherInfo['right']);
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        // Node mới
        $data = $this->_data;
        $data['parent'] 	= $parentInfo['id']; //$this->_parent_id
        $data['left'] 		= $brotherInfo['right'] + 1;
        $data['right'] 		= $brotherInfo['right'] + 2;
        $data['level'] 		= $brotherInfo['level'] ;
         
        $newQuey = $this->createInsertQuery($data);
        
        $sqlInsert = 'INSERT INTO ' . $this->_table
        . "(" . $newQuey['cols'] . ") "
            . " VALUES(" . $newQuey['vals'] . ")";
        echo '<br>' . $sqlInsert;
        mysql_query($sqlInsert,$this->_connect);
        
    }
    protected function insertBefore($brother_id){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';
        $parentInfo  = $this->getNodeInfo($this->_parent_id);
        $brotherInfo = $this->getNodeinfo($brother_id);
        
        // Update Node
        $sqlUpdateLeft = 'UPDATE ' .$this->_table
        . ' SET left = (left + 2) '
            . ' WHERE left >= ' . ($brotherInfo['left']);
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        // Update trước các node cũ trước khi insert node mới
        
        $sqlUpdateRight = 'UPDATE ' .$this->_table
        . ' SET right = (right + 2) '
            . ' WHERE right >= ' . ($brotherInfo['left']+ 1);
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        // Cập nhật node mới
        
        $data = $this->_data;
        $data['parent'] 	= $parentInfo['id']; //$this->_parent_id
        $data['left'] 		= $brotherInfo['left'] ;
        $data['right'] 		= $brotherInfo['left'] + 1;
        $data['level'] 		= $brotherInfo['level'] ;
         
        $newQuey = $this->createInsertQuery($data);
        
        $sqlInsert = 'INSERT INTO ' . $this->_table
        . "(" . $newQuey['cols'] . ") "
            . " VALUES(" . $newQuey['vals'] . ")";
        echo '<br>' . $sqlInsert;
        mysql_query($sqlInsert,$this->_connect);

    }
    protected function insertLeft(){
        $parentInfo  = $this->getNodeInfo($this->_parent_id);
    
        $parentLeft = $parentInfo['left'];
        // Update trước các node cũ trước khi insert node mới
        $sqlUpdateLeft = 'UPDATE ' .$this->_table
        . ' SET left = (left + 2) '
            . ' WHERE left >= ' . ($parentLeft + 1);
        echo '<br>' . $sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        // Update trước các node cũ trước khi insert node mới
        
        $sqlUpdateRight = 'UPDATE ' .$this->_table
        . ' SET right = (right + 2) '
            . ' WHERE right > ' . ($parentLeft + 1);
        echo '<br>' . $sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        // Cập nhật node mới
        $data = $this->_data;
        $data['parent'] 	= $parentInfo['id']; //$this->_parent_id
        $data['left'] 		= $parentLeft + 1;
        $data['right'] 		= $parentLeft + 2;
        $data['level'] 		= $parentInfo['level'] + 1;
        	
        $newQuey = $this->createInsertQuery($data);
        
        $sqlInsert = 'INSERT INTO ' . $this->_table
        . "(" . $newQuey['cols'] . ") "
            . " VALUES(" . $newQuey['vals'] . ")";
        echo '<br>' . $sqlInsert;
        mysql_query($sqlInsert,$this->_connect);
    }
    
    protected function insertRight(){
        //echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';

        $parentinfo = $this->getNodeinfo($this->_parent_id);
        
        //print_r($parentinfo);
        
        $parentRight = $parentinfo['right'];
        // Update trước các node cũ trước khi insert node mới
        
        $sqlUpdateLeft  =   'UPDATE '. $this->_table
                            .' SET left = (left + 2) '
                            .' WHERE left > '. $parentRight;
        echo '<br/>'.$sqlUpdateLeft;
        mysql_query($sqlUpdateLeft,$this->_connect);
        
        // Update trước các node cũ trước khi insert node mới
        
        $sqlUpdateRight  =   'UPDATE '.$this->_table
        .' SET right = (right + 2)'
        .' WHERE right >= ' .   $parentRight;
        echo '<br/>'.$sqlUpdateRight;
        mysql_query($sqlUpdateRight,$this->_connect);
        
        $data = $this->_data;
        $data['parent'] = $parentinfo['id'];
        $data['level']   = $parentinfo['level'] + 1;
        $data['left']   = $parentRight;
        $data['right']   = $parentRight + 1;
        
        // In mảng $data kiểm tra thử xem
        $newquery = $this->createInsertQuery($data);
        // In $newquery ra xem thử  $new query lúc này sẽ là một mảng 2 phần tử là cols với vals
        
        $sqlInsert  =   'INSERT INTO '. $this->_table
        ."(" . $newquery['cols'] . ")"
        ." VALUES(" . $newquery['vals'] . ")";
        
        mysql_query($sqlInsert,$this->_connect);
        
        echo '<br/>'.$sqlInsert;
        
       
    }
    protected function createInsertQuery($data = null){ // Nắm vững hướng đối tượng tí là OK
        if($data != null && count($data) > 0){
            $cols = ''; // Các cột sẽ Insert (Ở đây là các chỉ số mảng)
            $vals = ''; // Dữ liệu sẽ Insert
            $i = 1;
            foreach ($data as $key=>$value){
                if($i == 1){
                    $cols .="`".$key."`";
                    $vals .="'".$value."'";
                }else{
                    $cols .=",`".$key."`";
                    $vals .=",'".$value."'";
                }
                $i++;
            }
            // echo '<br/>'.$cols;
            // echo '<br/>'.$vals;
            // echo 'INSERT INTO'.$this->_table."($cols)".'VALUES'."($vals)";
            $newquery['cols'] = $cols;  // Trả về mảng newquery gồm 2 phần tử
            $newquery['vals'] = $vals;
            
        }
        return $newquery;
    }
   
   
   
    public function getNodeinfo($id){
        /* $sql = 'SELECT * FROM' . $this->_table . 'WHERE id =' . $id;
        $result = mysql_query($sql,$this->_connect);
        $row    = mysql_fetch_assoc($result);
        
        return $row; */   
        $sql = 'SELECT * FROM ' . $this->_table . ' WHERE id = ' . $id;
        $result = mysql_query($sql,$this->_connect);
        $row = mysql_fetch_assoc($result);
        return $row;
    }
    
    
    
    
    
}