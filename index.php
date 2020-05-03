<?php
include_once 'public/config.php';

if (isset($_GET['btn'])){

    // $data will get the frm var information form the form 
    $data = $_GET['frm'];
// echo $data["'name'"];
    $nameform = $data["'name'"];
    $emailform = $data["'email'"];
    $textform = $data["'text'"];

    // a file uploader
    $pic=$_FILES['pic']['name'];
    mkdir("uploader/".$emailform);
    
    // get the format of the file
    $array=explode(".",$pic);
    $ext=end($pic);

    // make new name for the uploaded file
    $newName=rand().".".$ext;

    // put the file into the defined path
    $form=$_FILES['pic']['tmp_name'];
    $to="uploader/".$emailform."/".$newName;
    move_uploaded_file($form,$to);

        // INSERT THE DATA AND UPLODED FILE INTO THE DATABASE 
        $query = "INSERT INTO infotbl (name, email, text, pic) VALUES ('$nameform', '$emailform', '$textform', '$to');";
        mysqli_query($connection , $query);

header("Location: index.php");

}

?>
<html>
    <head><title>Form</title>
        <link rel="stylesheet" type="text/css" href="css/sheet.css">
        <link rel="stylesheet" type="text/css" href="css/fileSheet.css">
        <script src="js/formVal.js"></script>
    </head>
    <body>
        <!--Alert Div-->
        <div class="error" id='Error' style="display: none;margin-top: 1%;"></div>
        <!--Section-->
        <div class="section">
            <!--Title Text-->
            <h1 class="sectionText" style="margin-top: 5px;">Form</h1>
            <!--Inputs-->
            <form action="" method="get" enctype="multipart/form-data">
                <input name="frm['name']" type="text" id='Name' placeholder="Name" onchange="document.getElementById('Name').style.backgroundColor = '#FFFFFF';" ><br/>
                <input name="frm['email']" type="text" id='Email' placeholder="Email" onchange="document.getElementById('Email').style.backgroundColor = '#FFFFFF';"><br/>
                <textarea name="frm['text']" id="message" placeholder="Your Message" onchange="document.getElementById('message').style.backgroundColor = '#FFFFFF';"></textarea><br/>
                <input name="pic" type="file" class="custom-file-input file">
                <button name="btn" class="submit" onclick="getValues()">Send</button>
                
            </form>    
        </div>
    </body>
</html>
