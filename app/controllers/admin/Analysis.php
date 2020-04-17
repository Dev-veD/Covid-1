<?php
class Analysis extends Controller
{
    
    public function __construct()
    {
        
        $this->NewsModel = $this->model('AnalysisModel');
    }
    
    public function index()
    {
        if (!adminLoggedIn('adminanalysis')) {
            $url = URLROOT . 'Admine';
            header('location:' . $url);
        }
        if($_POST)
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
            $max_allowed_file_size = 204900;
            $allowed_extensions = array("pdf", "doc", "csv", "css", "jpg", "jpg", "jpeg", "gif", "bmp", "png","mp4","mp3","3gp","webm","mpg","avi");
            if ($name_of_uploaded_file != '') {
                $errors .= Helpers::documentValidation($size_of_uploaded_file, $max_allowed_file_size, $allowed_extensions, $type_of_uploaded_file);
            }
            $upload_folder = "/var/www/html/Covid/public/AnalysisDocument/";
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
                
                $_POST['document_path'] = $path_of_uploaded_file;
                $result = $this->NewsModel->uploadNewAnalysis($_POST);
                if ($result) {
                    
                    echo '<script>alert("New Analysis Uploaded");document.location="'.URLROOT.'"analysis"</script>';
                }
                else{
                    echo '<script>alert("'.$errors.'");document.location="'.URLROOT.'"analysis"</script>';

                }
            }
            
            echo '<script>alert("'.$errors.'");document.location="'.URLROOT.'"analysis"</script>';

        }
        $data=$this->NewsModel->getAnalysisRecord();
        $this->views('admin/analysis', $data);
        
        
    }
    public function show()
    {
        $data=$this->NewsModel->getAnalysisRecord();
        $this->views('user/analysis', $data);   
    }
    public function remove()
    {
        if (!adminLoggedIn('adminanalysis')) {
            $url = URLROOT . 'Admine';
            header('location:' . $url);
        }
        $this->NewsModel->removeAnalysisData($_POST['userid']);
    }
   
}
