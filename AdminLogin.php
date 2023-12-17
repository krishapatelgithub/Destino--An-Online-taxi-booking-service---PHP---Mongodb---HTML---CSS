<html>
    <head>
        <title>Destino | Admin Login</title>
        <link rel="stylesheet" href="css/LoginStyle.css">
    </head>
    <body>
        <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") 
             {
                $email = $_POST["email"];
                $pass = $_POST["password"];

                require 'Backend/vendor/autoload.php'; 

                // Set up MongoDB connection
                $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                $collection = $mongoClient->local->tbladmin;

                $documentCount=0;
                $filter = ['email' => $email, 'pass' => $pass];
                $documentCount = $collection->countDocuments($filter);
                $url="Location: AdminDashboard.php?email=".$email;
                if ($documentCount > 0) {
                    header($url);
                } 
                else{
                    echo "<script>alert('This Email Id is not registered');</script>";
                }
             }
        ?>
        <div class="main-container">
                <form class="login-form" name="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label>Email: </label><br>
                    <input type="email" name="email" require><br><br>
                    <label>Password: </label><br>
                    <input type="password" name="password" require><br><br>
                    <div style="padding-left: 55px; background:white ;">
                        <input  class="login-button" type="submit" value="Login">
                    </div><br>
                </form>
        </div>
    </body>
</html>