<html>
    <head><title>Sign Up</title></head>
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

            $sql = "SELECT * FROM users WHERE username = '$record_username'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)==0)
            {
                $sql1 = "INSERT INTO users(username, password)
                VALUES('$record_username', '$record_password')";

                if(mysqli_query($conn, $sql1))
                {
                    header("Location: welcome1.html");
                }

                else 
                {
                    echo "<label>Error: " . $sql . "<br>" . mysqli_error($conn)."</label>";
                }
    
            }

            else
            {
                header("Location: signUp1.html");
            }

            mysqli_close($conn);

           
        ?>
    </body>
</html>