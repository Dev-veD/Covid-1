<?php 

class Bulletin extends Controller{

     public function __construct()
     {
        $this->BulletinModel = $this->model('BulletinModel');
     }

     public function index()
     {
        $result=$this->BulletinModel->getAllNotice();

        $this->views('user/bulletin',$result);
     }
}


?>