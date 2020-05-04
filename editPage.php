<?php

// connect to the db and execute the query form db
@$id=$_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'mispan');
$query = "SELECT * FROM infotbl WHERE user_id='$id'";
$res = mysqli_query($connection , $query);

// a function to update the db form submited data in the edit page
function editpage($data,$id){
    $connection = mysqli_connect('localhost', 'root', '', 'mispan');
    $sql="UPDATE infotbl SET name='$data[name]',email='$data[email]' WHERE user_id='$id'";
    mysqli_query($connection , $sql);
}


?>
<html>
    <head><title>Edit</title>
    
        <link rel="stylesheet" type="text/css" href="css/editSheet.css">
        <script src="js/editFormVal.js"></script>
    </head>
    <body>
        <!--Alert Div-->
        <div class="error" id='Error' style="display: none;margin-top: 1%;"></div>
        <!--Section-->
        <div class="section">
            <!--Title Text-->
            <h1 class="sectionText" style="margin-top: 5px;">Edit</h1>
            <?php
                // execute the editpage() with a checker
                if(isset($_POST['btn'])){
                    $data=$_POST['frm'];
                    editpage($data,$id);
                    // header("location:editPage.php?edit=ok");
                    echo "Edited Seccussfully, Now click on Return to see Changes";
                } else {
                    echo "Please Edit or click on Return";
                }
            ?>
                <!--Inputs-->
            <form method="post">    
                <?php 
                    // show the query result as assoc array from db
                    while($row = mysqli_fetch_assoc($res)){
                ?>
                <input type="text" id='Name' name="frm[name]" placeholder="Name" value="<?php echo $row['name']; ?>" onchange="document.getElementById('Name').style.backgroundColor = '#FFFFFF';"><br/>
                <input type="text" id='Email' name="frm[email]" placeholder="Email" value="<?php echo $row['email']; ?>" onchange="document.getElementById('Email').style.backgroundColor = '#FFFFFF';"><br/><br/><br/>
                <?php 
                    }
                ?>
                <button class="submit" name="btn" onclick="getValues()">Submit</button><br/><br/>
            </form>    
                <!---->
                <a href="panel.php">
                    Return
                </a>
        </div>
    </body>
</html>