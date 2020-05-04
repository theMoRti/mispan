<?php

// connect to the db and execute the query
@$id=$_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'mispan');
$query = "SELECT * FROM infotbl WHERE user_id='$id'";
$res = mysqli_query($connection , $query);

function editmenu($data,$id){
    $connection = mysqli_connect('localhost', 'root', '', 'mispan');
    $sql="UPDATE infotbl SET name='$data[name]',email='$data[email]' WHERE user_id='$id'";
    mysqli_query($connection , $sql);
}


if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    editmenu($data,$id);
    //header("location:editPage.php?edit=ok");
    echo "Edited SeccussFully";
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
                <!--Inputs-->
            <form method="post">    
                <?php 
                    // show the query result as assoc array
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