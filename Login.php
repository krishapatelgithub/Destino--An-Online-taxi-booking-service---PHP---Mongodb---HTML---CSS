<html>
    <head>
        <title>Destino | User Login</title>
    </head>
    <body style="background-color: #e0e0e0;">
        <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") 
             {
                $email = $_POST["email"];
                $pass = $_POST["password"];

                require 'Backend/vendor/autoload.php'; 

                // Set up MongoDB connection
                $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                $collection = $mongoClient->local->tblusers;

                $documentCount=0;
                $filter = ['Email' => $email, 'pass' => $pass];
                $documentCount = $collection->countDocuments($filter);
                $url="Location: Index.php?email=".$email;
                if ($documentCount > 0) {
                    header($url);
                } 
                else{
                    echo "<script>alert('This Email Id is not registered');</script>";
                }
             }
        ?>
        <div style="position:absolute; height:250px; width:380px; top:50px; left:500px; background-color:white; padding:10px;">
                <form class="login-form" name="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label style="position:absolute; top:40px; left:40px; font-family:Bahnschrift; font-size:15px;">Email: </label><br>
                    <input style="position:absolute; top:58px; left:40px;font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="email" name="email" require><br><br>
                    <label style="position:absolute; top:100px; left:40px; font-family:Bahnschrift; font-size:15px;">Password: </label><br>
                    <input style="position:absolute; top:118px; left:40px; font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="password" name="password" require><br><br>
                    <div style="padding-left: 30px; background:white ;">
                        <input style="position:absolute; top:180px; left:40px; font-family:Bahnschrift; height:35px; width:300px; background-color:#1565c0; color:white; border:none; border-radius:5px; cursor:pointer;" class="login-button" type="submit" value="Login">
                    </div><br>
                    <label style="font-family:Bahnschrift; font-size:15px; position:absolute; top:230px; left:40px;" class="register-label">Don't have account? <a href="Registration.php">Create New Account</a></label>
                </form>
        </div>
    </body>
</html>