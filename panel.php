<?php

// connect to the db and execute the query
$connection = mysqli_connect('localhost', 'root', '', 'mispan');
$query = "SELECT * FROM infotbl";
$res = mysqli_query($connection , $query);

?>
<!--Some Examples of table is added here so the backend developer can do the job :D-->
<html>
    <head><title>Panel</title>
        <link rel="stylesheet" type="text/css" href="css/panelSheet.css";>
        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="js/panel.js"></script>
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
                    // show the query result as assoc array
                    while($row = mysqli_fetch_assoc($res)){
                ?>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><a><?php echo $row['email']; ?></a></td>
                    <td><a href="showPage.html" class="text">Text</a></td>
                    <td><a href="noimg.png" target="_blank" class="img">Image</a></td>
                    <td>
                        <ul>
                            <button>
                                <li class="fas fa-check"></li>
                            </button> 
                        <form action="editPage.html">
                            <button>
                                <li class="	fas fa-edit"></li>
                            </button>
                        </form>
                        <form>
                            <button>
                                <li class="fas fa-trash"></li>
                            </button>
                        </form> 
                        </ul>
                    </td>
                <?php 
                    }
                ?>
                </tbody>
            </table>
                
                
        </div>
    </body>
</html>