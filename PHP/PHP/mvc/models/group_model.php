<?php
class Group_Model{
    public function __construct(){
        echo '<h3>'. __METHOD__ .'</h3>';
    }
    public function listItems($options = null){
        $query[] 	= "SELECT `g`.`id`,`g`.`name`,`g`.`status`,`g`.`ordering`, COUNT(`u`.id) AS total";
        $query[] 	= "FROM `group` AS `g` LEFT JOIN `user` AS `u` ON `g`.`id` = `u`.`group_id`";
        $query[] 	= "GROUP BY `g`.`id`";
        $query		= implode(" ", $query);
        
        $result		= $this->listRecord($query); // $this ở đây là database
        return $result;
    }
}