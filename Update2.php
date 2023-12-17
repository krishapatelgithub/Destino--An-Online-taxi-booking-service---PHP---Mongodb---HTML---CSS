<html>
    <head>
        <title>Destino | Data Update</title>
    </head>
    <body>
        <?php
            $man=$_POST["man"];
            if($man=="customer"){
                $id=$_POST["id"];
                $fnm=$_POST["fname"];
                $lnm=$_POST["lname"];
                $email=$_POST["Email"];

                require 'Backend/vendor/autoload.php';
                $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                $database = $mongoClient->local; // Replace with your database name
                $collection = $database->tblusers; // Replace with your collection name
               
                $objectId = new MongoDB\BSON\ObjectId($id);
                // Update criteria (e.g., update documents where "field_name" equals "field_value")
                $criteria = ["_id" => $objectId];

                // Update operation (e.g., set a new value for a field)
                $update = [
                    '$set' => [
                        "first_name" => $fnm,
                        "last_name" => $lnm,
                        "Email" => $email
                        // Add more fields and their new values as needed
                    ]
                ];

                // Update a single document that matches the criteria
                $result = $collection->updateOne($criteria, $update);

                // Check for errors
                if ($result->getModifiedCount() === 1) {
                    echo "<label style=' font-family:Bahnschrift; font-size:35px;'>Document updated successfully.</label>";
                } else {
                    echo "No documents matched the criteria or an error occurred.";
                }
            }

            if($man=="book"){
                $id=$_POST["id"];
                $nm=$_POST["name"];
                $bdate=$_POST["date"];
                $email=$_POST["email"];
                $price=$_POST["price"];
                $status=$_POST["status"];

                require 'Backend/vendor/autoload.php';
                $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                $database = $mongoClient->local; // Replace with your database name
                $collection = $database->Book_det; // Replace with your collection name
               
                $objectId = new MongoDB\BSON\ObjectId($id);
                // Update criteria (e.g., update documents where "field_name" equals "field_value")
                $criteria = ["_id" => $objectId];

                // Update operation (e.g., set a new value for a field)
                $update = [
                    '$set' => [
                        "name" => $nm,
                        "Email" => $email,
                        "bdate" => $bdate,
                        "price" => $price,
                        "status" => $status
                        // Add more fields and their new values as needed
                    ]
                ];

                // Update a single document that matches the criteria
                $result = $collection->updateOne($criteria, $update);

                // Check for errors
                if ($result->getModifiedCount() === 1) {
                    echo "<label style=' font-family:Bahnschrift; font-size:35px;'>Document updated successfully.</label>";
                } else {
                    echo "No documents matched the criteria or an error occurred.";
                }
            }

            if($man=="taxi"){
                $id=$_POST["id"];
                $nm=$_POST["dname"];
                $loc=$_POST["location"];
                $price=$_POST["price"];

                require 'Backend/vendor/autoload.php';
                $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                $database = $mongoClient->local; // Replace with your database name
                $collection = $database->taxi_det; // Replace with your collection name
               
                $objectId = new MongoDB\BSON\ObjectId($id);
                // Update criteria (e.g., update documents where "field_name" equals "field_value")
                $criteria = ["_id" => $objectId];

                // Update operation (e.g., set a new value for a field)
                $update = [
                    '$set' => [
                        "driver" => $nm,
                        "loc" => $loc,
                        "price" => $price
                        // Add more fields and their new values as needed
                    ]
                ];

                // Update a single document that matches the criteria
                $result = $collection->updateOne($criteria, $update);

                // Check for errors
                if ($result->getModifiedCount() === 1) {
                    echo "<label style=' font-family:Bahnschrift; font-size:35px;'>Document updated successfully.</label>";
                } else {
                    echo "No documents matched the criteria or an error occurred.";
                }
            }
        ?>
    </body>
</html>