<?php


  class AnalysisModel{
    protected $db='';
    
    public function __construct()
    {
        $this->db=new Database();
        
    }

    public function getAnalysisRecord()
    {
        $this->db->query('SELECT * FROM analysis');
    return $this->db->resultSet();   
    }
    public function removeAnalysisData($id)
    {
        $this->db->query("DELETE FROM analysis WHERE id =:id");
    $this->db->bindvalues(':id', $id);
    $this->db->execute();
    }
    public function uploadNewAnalysis($data)
    {

        $this->db->query('INSERT INTO analysis(description,type,document_path) values(:description,:type,:document_path)');
        $this->db->bindvalues(':description',$data['description']);
        $this->db->bindvalues(':type',$data['type']);
        $this->db->bindvalues(':document_path',$data['document_path']);
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