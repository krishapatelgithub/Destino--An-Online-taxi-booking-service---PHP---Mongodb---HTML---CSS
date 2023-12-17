<html>
    <head>
        <title>Destino | Make Payment</title>
    </head>
    <body>
       <?php
            $price=0;
            $price=$_GET["price"];
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $date=$_POST["date"];
                $status ="Confirm Booking";
                $pr=$_POST["hprice"];
                $errors = 0;
                // Validate name
                if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
                    echo "<script>alert('Enter valid  first name');</script>";
                    $errors= 1;
                }

                // Validate email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<script>alert('Enter valid  email');</script>";
                    $errors= 1;
                }

                // If there are no validation errors, process the data
                if ($errors==0) {
                    require 'Backend/vendor/autoload.php'; 

                    // Set up MongoDB connection
                    $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                    $collection = $mongoClient->local->Book_det;

                    // Define the filter condition to search for the email address
                    $document = [
                        "name" => $name,
                        "Email" => $email,
                        "bdate" => $date,
                        "price" => $pr,
                        "status" => $status
                    ];
                        // Insert the document into the MongoDB collection
                        $result1 = $collection->insertOne($document);
                        if ($result1->getInsertedCount() > 0) {
                            $url="Location: BillGenerate.php?email=".$email."&price=".$pr."&name=".$name."&date=".$date;
                            header($url);
                            echo "<script>alert('Data is valid and has been successfully processed.')</script>";
                        } else {
                            echo "<script>alert('Error inserting data into the database.');</script>";
                        }
                    }
                    
            }
       ?>
       <div style="position:absolute; top:20px; left:470px; height:570px; width:400px; color:black; box-shadow:3px 3px 3px grey; border-radius:5px;">
            <label style="position:absolute; color:grey; top:20px; left:10px; font-family:Bahnschrift; font-size:15px;">Pay</label>
            <label style="position:absolute; color:black; top:45px; left:10px; font-family:Bahnschrift; font-size:25px;" name="pr">₹<?php echo $price; ?>.00</label>
            <label style="position:absolute; color:black; top:90px; left:10px; font-family:Bahnschrift; font-size:15px;">Pay with card</label><br><br><br><br><hr>
           <form name="payment" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label style="position:absolute; color:grey; top:130px; left:10px; font-family:Bahnschrift; font-size:15px;">Email:</label>
                <input style="position:absolute; top:147px; left:10px; font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="email" name="email" placeholder="Email"/>
                
                <label style="position:absolute; color:grey; top:200px; left:10px; font-family:Bahnschrift; font-size:15px;">Card Information:</label>
                <input style="position:absolute; top:217px; left:10px; font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px 5px 0px 0px;" type="text" name="card_num" placeholder="1234 1234 1234 1234" require/>
                <input style="position:absolute; top:247px; left:10px; font-family:Bahnschrift; height:30px; width:180px; background-color:#cfcae9; color:black; border:none; border-radius:0px 0px 0px 5px;" type="text" name="card_date" placeholder="mm/yy" require/>
                <input style="position:absolute; top:247px; left:190px; font-family:Bahnschrift; height:30px; width:120px; background-color:#cfcae9; color:black; border:none; border-radius:0px 0px 5px 0px;" type="text" name="cvc" placeholder="CVC" require/>

                <label style="position:absolute; color:grey; top:300px; left:10px; font-family:Bahnschrift; font-size:15px;">Name on card:</label>
                <input style="position:absolute; top:317px; left:10px; font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="text" name="name" placeholder="Name"/>
                
                <label style="position:absolute; color:grey; top:370px; left:10px; font-family:Bahnschrift; font-size:15px;">Country or Region:</label>
                <input style="position:absolute; top:387px; left:10px; font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;" type="text" name="country" placeholder="Country or Region"/>

                <label style="position:absolute; color:grey; top:440px; left:10px; font-family:Bahnschrift; font-size:15px;">Booking Date:</label>
                <input style="position:absolute; top:457px; left:10px; font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:grey; border:none; border-radius:5px;" type="date" name="date" placeholder=""/>

                <input type="submit" value="Pay" style="position:absolute; top:510px; left:10px; font-family:Bahnschrift; height:35px; width:330px; background-color:#1565c0; color:white; border:none; border-radius:5px; cursor:pointer" />
                <input type="hidden" value="<?php echo $price; ?>" name="hprice" />
            </form>
        </div>
    </body>
</html>