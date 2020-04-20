<?php
class Analysis extends Controller
{

    public function __construct()
    {

        $this->AnalysisModel = $this->model('AnalysisModel');
    }

    public function index()
    {
        if (!adminLoggedIn('adminanalysis')) {
            $url = URLROOT . 'Admine';
            header('location:' . $url);
        }
        if ($_POST) {
            if(!empty($_POST['website']))
            {
                $_POST['document_path'] = $_POST['website'];
                $result = $this->AnalysisModel->uploadNewAnalysis($_POST);
                if ($result) {

                    echo '<script>alert("New Analysis Uploaded");document.location="' . URLROOT . 'analysis"</script>';
                } else {
                    echo '<script>alert("Something went wrong! Please try again.");document.location="' . URLROOT . 'analysis"</script>';
                }
            }
            else if (!empty($_FILES["uploaded_file"]["tmp_name"])) {
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
                $allowed_extensions = array("pdf", "doc", "csv", "css", "jpg", "jpg", "jpeg", "gif", "bmp", "png", "mp4", "mp3", "3gp", "webm", "mpg", "avi", "docx");
                if ($name_of_uploaded_file != '') {
                    $errors .= Helpers::documentValidation($size_of_uploaded_file, $max_allowed_file_size, $allowed_extensions, $type_of_uploaded_file);
                }
                $upload_folder = "/var/www/html/public/AnalysisDocument/";
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
                    $result = $this->AnalysisModel->uploadNewAnalysis($_POST);
                    if ($result) {

                        echo '<script>alert("New Analysis Uploaded");document.location="' . URLROOT . 'analysis"</script>';
                    } else {
                        echo '<script>alert("' . $errors . '");document.location="' . URLROOT . 'analysis"</script>';
                    }
                }

                echo '<script>alert("' . $errors . '");document.location="' . URLROOT . 'analysis"</script>';
            }
            
            else{
                echo '<script>alert("You have to select any one field website url or choose file");document.location="' . URLROOT . 'analysis"</script>';

            }
        }
        $data = $this->AnalysisModel->getAnalysisRecord();
        $this->views('admin/analysis', $data);
    }
    public function show()
    {
        $data = $this->AnalysisModel->getAnalysisRecord();
        $this->views('user/analysis', $data);
    }
    public function remove()
    {
        if (!adminLoggedIn('adminanalysis')) {
            $url = URLROOT . 'Admine';
            header('location:' . $url);
        }
        $this->AnalysisModel->removeAnalysisData($_POST['userid']);
    }
    public function edit()
    {

        if ($_POST) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(!empty($_POST['website']))
            {
                $_POST['document_path'] = $_POST['website'];
                $result = $this->AnalysisModel->editAnalysisFile($_POST);
                if ($result) {
                    echo '<script>alert("Edit Successfull");document.location="' . URLROOT . 'analysis"</script>';
                } else {
                    echo '<script>alert("Something went wrong! Try again");document.location="' . URLROOT . 'analysis"</script>';
                }
            }
            else if (!empty($_FILES["uploaded_file"]["tmp_name"])) {
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
                $allowed_extensions = array("pdf", "doc", "csv", "css", "jpg", "jpg", "jpeg", "gif", "bmp", "png", "mp4", "mp3", "3gp", "webm", "mpg", "avi", "docx");
                if ($name_of_uploaded_file != '') {
                    $errors .= Helpers::documentValidation($size_of_uploaded_file, $max_allowed_file_size, $allowed_extensions, $type_of_uploaded_file);
                }
                $upload_folder = "/var/www/html/public/AnalysisDocument/";
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
                    $result = $this->AnalysisModel->editAnalysisFile($_POST);
                    if ($result) {

                        echo '<script>alert("Edit Successful");document.location="' . URLROOT . 'analysis"</script>';
                    } else {
                        echo '<script>alert("' . $errors . '");document.location="' . URLROOT . 'analysis"</script>';
                    }
                }

                echo '<script>alert("' . $errors . '");document.location="' . URLROOT . 'analysis"</script>';
            } else {
                $_POST['document_path'] = "";
                $result = $this->AnalysisModel->editAnalysis($_POST);
                if ($result) {
                    echo '<script>alert("Edit Successfull");document.location="' . URLROOT . 'analysis"</script>';
                } else {
                    echo '<script>alert("Something went wrong! Try again");document.location="' . URLROOT . 'analysis"</script>';
                }
            }
        } else {
            echo '<script>alert("Please fill form");document.location="' . URLROOT . '"analysis"</script>';
        }
    }
}
