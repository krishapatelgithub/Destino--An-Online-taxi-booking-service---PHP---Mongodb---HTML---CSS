<html>
    <head>
        <title>Destino | User Registration</title>
        <link rel="stylesheet" href="css/RegistrationStyle.css">
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $name = $_POST["name"];
                $lname = $_POST["Lname"];
                $email = $_POST["email"];
                $pass = $_POST["password"];
                $cpass = $_POST["cpassword"];

                $errors = 0;

                // Validate name
                if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
                    echo "<script>alert('Enter valid  first name');</script>";
                    $errors= 1;
                }

                //validate last name
                if (!preg_match("/^[a-zA-Z ]+$/", $lname)) {
                    echo "<script>alert('Enter valid  last name');</script>";
                    $errors= 1;
                }

                // Validate email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<script>alert('Enter valid  email');</script>";
                    $errors= 1;
                }

                //validate password
                if($pass!=$cpass){
                    echo "<script>alert('password and confirm password are not same.');</script>";
                    $errors= 1;
                }

                // If there are no validation errors, process the data
                if ($errors==0) {
                    require 'Backend/vendor/autoload.php'; 

                    // Set up MongoDB connection
                    $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                    $collection = $mongoClient->local->tblusers;

                    // Define the filter condition to search for the email address
                    $documentCount=0;
                    $filter = ['email' => $email];
                    $documentCount = $collection->countDocuments($filter);
                    // Check if any documents were found
                   if ($documentCount > 0) {
                        
                    } else {
                        $document = [
                            "first_name" => $name,
                            "last_name" => $lname,
                            "Email" => $email,
                            "pass" => $pass,
                            "conf_pass" => $cpass
                        ];
                        // Insert the document into the MongoDB collection
                        $result1 = $collection->insertOne($document);
                        if ($result1->getInsertedCount() > 0) {
                            header("Location: Login.php");
                            echo "<script>alert('Data is valid and has been successfully processed.')</script>";
                        } else {
                            echo "<script>alert('Error inserting data into the database.');</script>";
                        }
                    }
                    
                }
            }
        ?>


        <div style="position:absolute; height:550px; width:380px; top:20px; left:500px; background-color:white; padding:10px;">
            <form style="position:absolute; top:20px; left:53px; background-color:white;" name="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <img class="image-upload" src="Images/istockphoto-1337144146-612x612.jpg" height="120px" width="120px"><br>
                <label style="font-family:Bahnschrift; font-size:15px;">First name: </label><br>
                <input style="font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="text" name="name" require><br><br>
                <label style="font-family:Bahnschrift; font-size:15px;">Last name: </label><br>
                <input style="font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="text" name="Lname"><br><br>
                <label style="font-family:Bahnschrift; font-size:15px;">Email: </label><br>
                <input style="font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="email" name="email" require><br><br>
                <label style="font-family:Bahnschrift; font-size:15px;">Password: </label><br>
                <input style="font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="password" name="password" require><br><br>
                <label style="font-family:Bahnschrift; font-size:15px;">Confirm password: </label><br>
                <input style="font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="password" name="cpassword" require><br><br><br>
                <div style="background:white ;">
                    <input style=" font-family:Bahnschrift; font-size:15px; height:35px; width:300px; background-color:#1565c0; color:white; border:none; border-radius:5px; cursor:pointer;" class="login-button" type="submit" value="Create Account">
                </div><br>
            </form>
    </div>

    </body>
</html>