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
    $this->db->query('INSERT INTO news(title,date,description,category,document_path,filetype) values(:title,:date,:description,:category,:document_path,:filetype)');
    $this->db->bindvalues(':title',$data['title']);
    $this->db->bindvalues(':date',$data['date']);
    $this->db->bindvalues(':description',$data['description']);
    $this->db->bindvalues(':category',$data['category']);
    $this->db->bindvalues(':document_path',$data['attachment']);
    $this->db->bindvalues(':filetype',$data['filetype']);
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
  public function editNews($data)
  {
    
    $this->db->query('UPDATE news SET title=:title,date=:date,description=:description,category=:category WHERE id=:id');
    $this->db->bindvalues(':title',$data['title']);
    $this->db->bindvalues(':date',$data['date']);
    $this->db->bindvalues(':description',$data['description']);
    $this->db->bindvalues(':category',$data['category']);
    $this->db->bindvalues(':id',$data['id']);

  
        if($this->db->execute())
        {
          
          return true;
        }
        else
        {
          
          return false;
        }

  }
  public function editNewsFile($data)
  {
    
    $this->db->query('UPDATE news SET title=:title,date=:date,description=:description,category=:category,document_path=:document_path WHERE id=:id');
    $this->db->bindvalues(':title',$data['title']);
    $this->db->bindvalues(':date',$data['date']);
    $this->db->bindvalues(':description',$data['description']);
    $this->db->bindvalues(':category',$data['category']);
    $this->db->bindvalues(':document_path',$data['attachment']);
    $this->db->bindvalues(':id',$data['id']);

  
        if($this->db->execute())
        {
          
          return true;
        }
        else
        {
          
          return false;
        }

  }
  
}

?>
