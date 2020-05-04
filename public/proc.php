<?php
$connection = mysqli_connect('localhost', 'root', '', 'mispan');

if (isset($_GET['btn'])){

    // $data will get the frm var information form the form 
    $data = $_GET['frm'];
// echo $data["'name'"];
    $nameform = $data["'name'"];
    $emailform = $data["'email'"];
    $textform = $data["'text'"];

    // a file uploader
    @$pic=$_FILES['pic']['name'];
    mkdir("../uploader/".$emailform);
    
    // get the format of the file
    $array=explode(".",$pic);
    $ext= end($array);

    // make new name for the uploaded file
    $newName=rand().".".$ext;

    // put the file into the defined path
    @$form=$_FILES['pic']['tmp_name'];
    $to="../uploader/".$emailform."/".$newName;
    move_uploaded_file($form,$to);

        // INSERT THE DATA AND UPLODED FILE INTO THE DATABASE 
        $query = "INSERT INTO infotbl (name, email, text, pic) VALUES ('$nameform', '$emailform', '$textform', '$to');";
        mysqli_query($connection , $query);


}

echo "Thancks for Submit";

?>