<?php

// connect to the db and execute the query
$id=$_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'mispan');
$query = "SELECT * FROM infotbl WHERE user_id='$id'";
$res = mysqli_query($connection , $query);

?>
<html>
    <head><title>Message</title>
        <link rel="stylesheet" type="text/css" href="../css/showSheet.css">
    </head>
    <body>
        <!--Section-->
        <div class="section">
            <!--Title Text-->
            <h1 class="sectionText" style="margin-top: 5px;">Message</h1>
            <!--Read only inputs to show information-->
            <?php 
                    // show the query result as assoc array
                    while($row = mysqli_fetch_assoc($res)){
                ?>
                <input type="text" id='Name' placeholder="Name" value="Name > <?php echo $row['name']; ?> " readonly ><br/>
                <input type="text" id='Email' placeholder="Email" value="Email > <?php echo $row['email']; ?> " readonly style="border-bottom: 2px solid #fd3d3d ;" ><br/>
                <textarea id="message" placeholder="Message > <?php echo $row['text']; ?> " readonly ></textarea><br/>
                <!---->
                <?php 
                    }
                ?>
                <a href="panel.php">
                    Return
                </a>
                
                
        </div>
    </body>
</html>