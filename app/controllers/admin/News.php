<?php
class News extends Controller
{
    protected $dataView = ['table' => ""];
    public function __construct()
    {
        $this->NewsModel = $this->model('NewsModel');
    }
    
    public function index()
    {

        if (!adminLoggedIn('adminmedia')) {
            $url = URLROOT . 'Admine';
            header('location:' . $url);
        }
        
        $errors = '';
        if ($_POST && isset($_SESSION['admin_id'])) {

            $result=$this->NewsModel->addNewNews($_POST);
            if($result)
            {
                echo '<script>alert("News uploaded Successful");document.location="'.URLROOT.'news"</script>';

            }
            else{
                echo '<script>alert("Something went wrong! Please try again.");document.location="'.URLROOT.'news"</script>';

            }
        }
        $this->dataView['table']=$this->NewsModel->getNewsRecord();
        $this->views('admin/news', $this->dataView);
    }
   
    public function show()
    {
        $this->dataView['table']=$this->NewsModel->getNewsRecord();
        $this->views('user/news', $this->dataView);   
    }
    public function remove()
    {
        if (!adminLoggedIn('adminmedia')) {
            $url = URLROOT . 'Admine';
            header('location:' . $url);
        }
        $this->NewsModel->removeNewsData($_POST['userid']);
    }
}
