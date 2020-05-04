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
            <!--Inputs / send data with GET method to proc.php file -->
            <form action="proc.php" method="get" enctype="multipart/form-data">
                <input name="frm['name']" type="text" id='Name' placeholder="Name" onchange="document.getElementById('Name').style.backgroundColor = '#FFFFFF';" ><br/>
                <input name="frm['email']" type="text" id='Email' placeholder="Email" onchange="document.getElementById('Email').style.backgroundColor = '#FFFFFF';"><br/>
                <textarea name="frm['text']" id="message" placeholder="Your Message" onchange="document.getElementById('message').style.backgroundColor = '#FFFFFF';"></textarea><br/>
                <input name="pic" type="file" class="custom-file-input file">
                <button name="btn" class="submit" onclick="getValues()">Send</button>
                
            </form>    
        </div>
    </body>
</html>
