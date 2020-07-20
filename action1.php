<html>
    <head><title></title></head>
    <style>
        .background
        {
            background-image: url("images/nature2.jpg");
        }

        label 
        {
            width:100px;
            text-align: right;
            color: yellow;
        }

    </style>
    <body class="background"> 
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "iit123";
            $dbname = "myDB";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }

            $record_username = $_POST["username"];
            $record_password = $_POST["password"];

            $sql = "SELECT * FROM users WHERE username = '$record_username' AND password = '$record_password'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)==0)
            {
                header('Location: signIn1.html');
            }

            else
            {
                header("Location: homePage.html");
            }

            mysqli_close($conn);

           
        ?>
    </body>
</html>