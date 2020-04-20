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
            if(!empty($_FILES['uploaded_file']['name']))
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $name_of_uploaded_file =
                    basename($_FILES['uploaded_file']['name']);
    
                $type_of_uploaded_file =
                    substr(
                        $name_of_uploaded_file,
                        strrpos($name_of_uploaded_file, '.') + 1
                    );
    
                $size_of_uploaded_file =
                    $_FILES["uploaded_file"]["size"] / 1024;
                $max_allowed_file_size = 20490;
                $allowed_extensions = array("pdf", "doc", "csv", "css", "jpg", "jpg", "jpeg", "gif", "bmp", "png","mp4", "mp3", "3gp", "webm", "mpg", "avi", "docx");
                if ($name_of_uploaded_file != '') {
                    $errors .= Helpers::documentValidation($size_of_uploaded_file, $max_allowed_file_size, $allowed_extensions, $type_of_uploaded_file);
                }
                $upload_folder = "/var/www/html/public/newsDocument/";
                $path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
                $tmp_path = $_FILES["uploaded_file"]["tmp_name"];
    
                if (is_uploaded_file($tmp_path)) {
                    mkdir(dirname($path_of_uploaded_file), 0777, true);
                    move_uploaded_file($tmp_path . '/' . $name_of_uploaded_file, $path_of_uploaded_file);
                    if (!copy($tmp_path, $path_of_uploaded_file)) {
                        $errors .= 'Error while copying the uploaded file';
                    }
                } else if ($name_of_uploaded_file != '') {
                    $errors .= 'Something went wrong please try again latter';
                }
                if ($errors == '') {
                    $_POST['attachment'] = $path_of_uploaded_file;
                    $_POST['filetype']='file';
                    $result = $this->NewsModel->addNewNews($_POST);
                    if ($result) {
                        echo '<script>alert("Publicity Uploaded Successfull");document.location="'.URLROOT.'news"</script>';
                    }else {
                        echo '<script>alert("' . $errors . '");document.location="' . URLROOT . 'news"</script>';
                    }
                }

                echo '<script>alert("' . $errors . '");document.location="' . URLROOT . 'news"</script>';
            }
            else if(!empty($_POST["weblink"]))
            {
                $_POST['attachment'] = $_POST["weblink"];
                $_POST['filetype']='weblink';
                $result = $this->NewsModel->addNewNews($_POST);
                if($result)
                {
                    echo '<script>alert("Publicity Uploaded Successfull");document.location="'.URLROOT.'news"</script>';

                }
                else{
                    echo '<script>alert("Something went wrong Please try again");document.location="'.URLROOT.'news"</script>';

                }
                Core::dnd("error");
            }
            else{
                echo '<script>alert(" weblink or File is a Mandatory field");document.location="' . URLROOT . 'news"</script>';

            }
        
        }
        $this->dataView['table'] = $this->NewsModel->getNewsRecord();
        $this->views('admin/news', $this->dataView);
    }

    public function show()
    {
        $result = $this->NewsModel->getNewsRecord();
        $data=['press'=>[],'advisory'=>[],'visuals'=>[],'awarness'=>[],'bulletin'=>[],];
        foreach($result as $key)
        {
            
            switch($key->category)
            {
                case 'Press release':
                    $data['press'][]=$key;
                break;
                case 'Covid-19 advisory':
                    $data['advisory'][]=$key;
                break;
                case 'Visuals':
                    $data['visuals'][]=$key;
                break;
                case 'Covid-19 Awarness':
                    $data['awarness'][]=$key;
                break;
                case 'Bulletins':
                    $data['bulletin'][]=$key;
                break;
            }
        }
        
        $this->views('user/news', $data);
    }
    public function remove()
    {
        if (!adminLoggedIn('adminmedia')) {
            $url = URLROOT . 'Admine';
            header('location:' . $url);
        }
        $this->NewsModel->removeNewsData($_POST['userid']);
    }
    public function edit()
    {
        if (!adminLoggedIn('adminmedia')) {
            $url = URLROOT . 'Admine';
            header('location:' . $url);
        }
        if ($_POST && isset($_SESSION['admin_id'])) {
            if(!empty($_FILES['uploaded_file']['name']))
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $name_of_uploaded_file =
                    basename($_FILES['uploaded_file']['name']);
    
                $type_of_uploaded_file =
                    substr(
                        $name_of_uploaded_file,
                        strrpos($name_of_uploaded_file, '.') + 1
                    );
    
                $size_of_uploaded_file =
                    $_FILES["uploaded_file"]["size"] / 1024;
                $max_allowed_file_size = 20490;
                $allowed_extensions = array("pdf", "doc", "csv", "css", "jpg", "jpg", "jpeg", "gif", "bmp", "png","mp4", "mp3", "3gp", "webm", "mpg", "avi", "docx");
                if ($name_of_uploaded_file != '') {
                    $errors .= Helpers::documentValidation($size_of_uploaded_file, $max_allowed_file_size, $allowed_extensions, $type_of_uploaded_file);
                }
                $upload_folder = "/var/www/html/public/newsDocument/";
                $path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
                $tmp_path = $_FILES["uploaded_file"]["tmp_name"];
    
                if (is_uploaded_file($tmp_path)) {
                    mkdir(dirname($path_of_uploaded_file), 0777, true);
                    move_uploaded_file($tmp_path . '/' . $name_of_uploaded_file, $path_of_uploaded_file);
                    if (!copy($tmp_path, $path_of_uploaded_file)) {
                        $errors .= 'Error while copying the uploaded file';
                    }
                } else if ($name_of_uploaded_file != '') {
                    $errors .= 'Something went wrong please try again latter';
                }
                if ($errors == '') {
                    $_POST['attachment'] = $path_of_uploaded_file;
                    $result = $this->NewsModel->editNewsFile($_POST);
                    if ($result) {
                        echo '<script>alert("Publicity Edit Successfull");document.location="'.URLROOT.'news"</script>';
                    }else {
                        echo '<script>alert("' . $errors . '");document.location="' . URLROOT . 'news"</script>';
                    }
                }

                echo '<script>alert("' . $errors . '");document.location="' . URLROOT . 'news"</script>';
            }
            else{
                $result=$this->NewsModel->editNews($_POST);
                if($result)
                {
                    echo '<script>alert("Publicity Edit Successful");document.location="'.URLROOT.'news"</script>';
    
                }
                else{
                    echo '<script>alert("Something went wrong! Please try again.");document.location="'.URLROOT.'news"</script>';
    
                }
            }  
        }
    }
}
