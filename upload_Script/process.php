<?php
//Making sure that the request works only when a POST request hits the file
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    //Making sure files have gone through
    if (isset($_FILES['files'])) {

        //Creating an array for all errors while uploading multiples files
        $errors = [];

        //Defining the PATH of the directory wher uploads should go
        $path = 'C:/xampp/htdocs/upload_script/uploads/';

        //Setting the approved extension
        $extensions = ['jpg', 'jpeg', 'png', 'webp'];

        //Getting the number of files being uploaded
        $all_files = count($_FILES['files']['tmp_name']);

        //Getting file name, temporary file name, type, size and extension for each uploaded file
        for ($i = 0; $i < $all_files; $i++) {
            $file_name = $_FILES['files']['name'][$i];
            $file_tmp = $_FILES['files']['tmp_name'][$i];
            $file_type = $_FILES['files']['type'][$i];
            $file_size = $_FILES['files']['size'][$i];
            $file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));
        }

        //checking if the extension of the file is in the approved lis of extensions
        if (!in_array($file_ext, $extensions)) {
            $errors[] = 'Extension not allowed: ' . $file_name . '' . $file_type;
        }

        //Checking the file'size
        if ($file_size > 2097152) {
            $errors[] = 'File size exceeds limits' . $file_name . ' ' . $file_type;
        }

        //Checking errors
        if (empty($errors)) {

            //Moving the uploaded file to the defined repository
            move_uploaded_file($file_tmp, $path . $file_name);
            $successMsg = "Your File has been susccessfully Uploaded";
        }
    }

    //printing errors il they exist
    if ($errors) {
        print_r($errors);
    }
}
