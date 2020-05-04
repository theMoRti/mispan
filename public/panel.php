<?php

// connect to the db and execute the query
$connection = mysqli_connect('localhost', 'root', '', 'mispan');
$query = "SELECT * FROM infotbl";
$res = mysqli_query($connection , $query);

?>
<!--Some Examples of table is added here so the backend developer can do the job :D-->
<html>
 <?php 
    // a design that when user delete a record , it will show on the top of the screen ( or Panel )
    if(isset($_GET['delete'])){?>
        <div class="alert" style="
            width: 50%;
            height: 30px;
            background-color: red;
            color: white;
            font-family: verdana;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
            line-height: 30px;
            margin: 30px auto;
            opacity: 0.7;
            border-radius: 30px;
};
">
            Deleted SuccessFully
        </div>
    <?php }?>
    <head><title>Panel</title>

        <link rel="stylesheet" type="text/css" href="../css/panelSheet.css";>
        <script src="../js/jquery-3.5.0.min.js"></script>
        <script src="../js/panel.js"></script>
        <script src="https://kit.fontawesome.com/45349af287.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Section-->
        <div class="section">
            <!--Title Text-->
            <h1 class="sectionText" style="margin-top: 5px;">Control Panel</h1>
            <table>
                <tbody>
                <!--Main Row-->
                <?php 
                    // show the query result as assoc array form db
                    while($row = mysqli_fetch_assoc($res)){
                ?>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><a><?php echo $row['email']; ?></a></td>
                    <td><a href="showPage.php?id=<?php echo $row['user_id']; ?>"" class="text">Text</a></td>
                    <td><a href="<?php echo $row['pic']; ?>" target="_blank" class="img">Image</a></td>
                    <td>
                        <ul>
                        <!---- edit and delete button in the panel ---->
                        <a href="editPage.php?id=<?php echo $row['user_id']; ?>"><li class="	fas fa-edit" style="color: blue;"></li></a>
                        <a href="delete.php?id=<?php echo $row['user_id']; ?>"><li class="	fas fa-trash" style="color: red;"></li></a> 
                        </ul>
                    </td>
                    <tr>
                <?php 
                    }
                ?>
                </tbody>
            </table>
                

                
        </div>
    </body>
</html>