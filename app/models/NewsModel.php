<?php


  class NewsModel{
    protected $db='';
    
    public function __construct()
    {
        $this->db=new Database();
        
    }

   
  public function getNewsRecord()
  {
    $this->db->query('SELECT * FROM news');
    return $this->db->resultSet();   
  }
  public function addNewNews($data)
  {
    $this->db->query('INSERT INTO news(title,date,portal,edition,page,weblink) values(:title,:date,:portal,:edition,:page,:weblink)');
    $this->db->bindvalues(':title',$data['title']);
    $this->db->bindvalues(':date',$data['date']);
    $this->db->bindvalues(':portal',$data['portal']);
    $this->db->bindvalues(':edition',$data['edition']);
    $this->db->bindvalues(':page',$data['page']);
    $this->db->bindvalues(':weblink',$data['weblink']);
    if($this->db->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
  }
  public function removeNewsData($id)
  {
    $this->db->query("DELETE FROM news WHERE id =:id");
    $this->db->bindvalues(':id', $id);
    $this->db->execute();
  }

  
}

?>