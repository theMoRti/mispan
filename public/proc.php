<?php
$connection = mysqli_connect('localhost', 'root', '', 'mispan');

if (isset($_GET['btn'])){

    // $data will get the frm var information form the form 
    $data = $_GET['frm'];
// echo $data["'name'"];
    $nameform = $data['name'];
    $emailform = $data['email'];
    $textform = $data['text'];

    // a file uploader
    mkdir("../uploader/".$emailform);
    $picname=$_FILES['pic']['name'];
    
    // get the format of the file
    $array=explode(".",$picname);
    $ext=end($array);

    // make new name for the uploaded file
    $new_name=rand().".".$ext;

    // put the file into the defined path
    $from=$_FILES['pic']['tmp_name'];
    $to="../uploader/".$emailform."/".$new_name;
    move_uploaded_file($from,$to);


        // INSERT THE DATA AND UPLODED FILE INTO THE DATABASE 
        $query = "INSERT INTO infotbl (name, email, text, pic) VALUES ('$nameform', '$emailform', '$textform', '$to');";
        mysqli_query($connection , $query);


}

echo "Thancks for Submit";

?>