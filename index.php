<?php
// includig the functions like db connection and userlogin
include_once 'public/login.php';
$connection = mysqli_connect('localhost', 'root', '', 'mispan');
    // getting data from form and give them to the userlogin() function in function.php
    if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    userlogin($data);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
  </head>
  <body>
    <!-- START THE FORM -->
    <form action="" method="post">
      <h1>Login Form</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" name="frm[username]" required>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" name="frm[password]" required>
      </div>
      <button type="submit" name="btn">Login</button>
    </form>
  </body>
</html>