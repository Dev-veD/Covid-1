<?php


  class BulletinModel{
    protected $db='';
    
    public function __construct()
    {
        $this->db=new Database();
        
    }

   public function getAllNotice(){
    $this->db->query('SELECT * FROM notices');
    return $this->db->resultSet();
  }
  
}

?>