<?php
class Database{
    protected $connect; // luu server ket noi
    protected $database; // luu bang du lieu ket noi
    protected $table;
    protected $resultquery; // kết quả trả về của việc thực hiện câu jquery
    
    // Connect database
    public function __construct($params){
       // Tien hanh ket noi
       $link = mysql_connect($params['server'],$params['name'],$params['password']);
       if (!$link){ // ket noi khong thanh cong
           die('Function not connect'.mysql_errno()); // in ra phan thong bao loi
       }else { // truong hop connect thanh cong
           $this->connect = $link; // this tro toi connect = bien link
           $this->database = $params['database'];
           $this->table = $params['table'];
           $this->setDatabase(); // cho mac dinh la null cho phuong thuc o duoi chay duoc
       }// neu connect thanh cong se hien thi ra resource id #4
       
      
        /* echo __METHOD__;
        echo '<pre>';
        print_r($params);
        echo '</pre>'; */
    }
    // Chon database
    // xay dung phuong thuc
    // Set connect
    public function setconnect($connect){
        $this->connect =  $this->connect;
    }
    // Set database
    public function setDatabase($database = NULL){
         if ($database != null){ // tien hanh ket noi =>
             $this->database = $database;
         }
         mysql_select_db( $this->database,$this->connect); // gom database va link connect
    }
    // Set table
    public function settable($table){
        $this->table =  $this->table;
    }
    
    // Disconnect database
    public function __destruct(){
        mysql_close( $this->connect);
    }
    // Insert
    public function insert($data, $type = 'single') { // truyen moi lan chi mot dong
        /* echo '<pre>';
        print_r($data);
        echo '</pre>'; */
        if( $type == 'single'){
         $newquery =   $this->createInsertSQL($data);
         $query = "INSERT INTO `$this->table`(".$newquery['cols'].") VALUES (".$newquery['vals'].")";
         $this->query($query);
        /*  echo '<pre>';
         print_r($query);
         echo '</pre>'; */
        }else {
            foreach($data as $value){
                $newQuery = $this->createInsertSQL($value);
                $query = "INSERT INTO `$this->table`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
                $this->query($query);
            }
        }
        // tra ve id cua dong vua insert du lieu
        //echo mysql_insert_id($this->connect);
        return $this->lastID();
    }
    
    // Create Insert SQL
    function createInsertSQL($data){
        $newQuery = array();
        if(!empty($data)){
            foreach($data as $key=> $value){
                $cols .= ", `$key`";
                $vals .= ", '$value'";
            }
        }
        $newQuery['cols'] = substr($cols, 2);
        $newQuery['vals'] = substr($vals, 2);
        return $newQuery;
    }
    
    // Last ID
    public function lastID(){
        return mysql_insert_id($this->connect);
    }
    // Query : Dùng để gọi một câu query nào đó
    public function query($query){
        /* $this->resultQuery = mysql_query($query, $this->connect); nội dung query chúng ta thực hiện
        return $this->resultQuery; */
        mysql_query($query, $this->connect);
    }
    // Update
    public function update($data,$where){ // bien de luu phan dieu kien
        $newQuerySet = $this->createUpdateSQL($data);
        $newQueryWhere = $this->createWhereUpdateSQL($where);
         
        $query = "UPDATE `group` SET " . $newQuerySet . " WHERE $newQueryWhere";
        $this->query($query);
        return $this->affected_rows();
        
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        
        echo '<pre>';
        print_r($where);
        echo '</pre>';
        /*
         * [0] => id
            [1] => 250 => `id` = '250'
         */
    }
    
    // Create Update SQL
    public function createUpdateSQL($data){
        $newQuery = "";
        if(!empty($data)){
            foreach($data as $key => $value){
                $newQuery .= ", `$key` = '$value'";
            }
        }
        $newQuery = substr($newQuery, 2);
        return $newQuery;
    }
    
    // Create Where Update SQL
    public function createWhereUpdateSQL($data){
       /* echo '<pre>';
       print_r($data);
       echo '</pre>'; */
       $newWhere = '';
       
       if(!empty($data)){
           foreach ($data as $value){
              /*  echo '<pre>';
               print_r($value);
               echo '</pre>'; */
               $newWhere[] ="`$value[0]`= `$value[1]`";
               $newWhere[] = $value[2];
           }
           $newWhere = implode(" ", $newWhere);
       }
       return $newWhere;
    }
    public function affected_rows(){
        return mysql_affected_rows($this->connect);
    }
    public function delete($where){
        $newWhere = $this->createWhereDeleteSQL($where);
        $query 	= "DELETE FROM `$this->table` WHERE `id` IN ($deleteID)";
        
        echo '<pre>';
        print_r($where);
        echo '</pre>';
    }
    // Create Where Update SQL
    public function createWhereDeleteSQL($data){
        /* echo '<pre>';
         print_r($data);
         echo '</pre>'; */
        $newWhere = '';
         
        if(!empty($data)){
            foreach ($data as $value){
               echo '<pre>';
               print_r($data);
               echo '</pre>';
            }
            //$newWhere = implode(" ", $newWhere);
        }
        return $newWhere;
    }
}

