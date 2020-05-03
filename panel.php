<?php
include_once 'public/config.php';

$data = $_GET['frm'];
// echo $data["'name'"];
$nameform = $data["'name'"];
$emailform = $data["'email'"];
$textform = $data["'text'"];

$query = "INSERT INTO infotbl (name, email, text, pic) VALUES ('$nameform', '$emailform', '$textform', 'defualt');";
mysqli_query($connection , $query);

header("location: index.php?submit=ok")

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
                <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Text</td>
                <td>Image</td>
                <td>Control</td>
                </tr>
                
                <!--Example Rows-->
                <tr>
                    <td>5</td>
                    <td>Ale</td>
                    <td><a>Alematin@gmail.com</a></td>
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
                </tr>
                    <tr>
                        <td>4</td>
                        <td>Shampo Parzhak</td>
                        <td><a>KiramToParzhak@gmail.com</a></td>
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
                    </tr>
                    <td>3</td>
                    <td>Morti</td>
                    <td><a>MortiJaghi@gmail.com</a></td>
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
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mamad</td>
                    <td><a>MamadKooni@gmail.com</a></td>
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
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ali</td>
                    <td><a>Alimatin1010@gmail.com</a></td>
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
                </tr>
                </tbody>
            </table>
                
                
        </div>
    </body>
</html>