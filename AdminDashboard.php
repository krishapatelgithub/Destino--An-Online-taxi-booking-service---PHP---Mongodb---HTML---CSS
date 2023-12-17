<html>
    <head>
        <title>Destino | Admin Dashboard</title>
    </head>
    <body style="margin:0; background-color:#e0e0e0">
        <?php
            $email=$_GET["email"];
            $nm="";
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $nm="";
                $type="";
                $type=$_POST["view"];
               foreach($type as $link){
                    if($link=="Manage Customer"){
                        require 'Backend/vendor/autoload.php'; 

                        $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

                        // Define the filter to search by email

                        // Define the MongoDB query
                        $database = $mongoClient->local;
                        $collection = $database->tblusers;


                        // Execute the query
                        $cursor = $collection->find();

                        echo "<table style='position:absolute; top:180px;  width:1000px; left:320px; z-index:100; font-family:Bahnschrift;  font-size:15px;'>";
                        echo "<tr style='background-color:#d32f2f; color:white; font-size:17px;'>
                                    <td style='padding:8px;'>Id</td>
                                    <td style='padding:8px;'>First Name</td>
                                    <td style='padding:8px;'>Last Name</td>
                                    <td style='padding:8px;'>Email</td>
                                    <td style='padding:8px;'>Password</td>
                                    <td style='padding:8px;'>Update</td>
                                    <td style='padding:8px;'>Delete</td>
                                 </tr>";
                        // Iterate through the cursor and display the data
                        foreach ($cursor as $document) {
                            echo "<tr>
                                        <td style='padding:8px;'>" . $document->_id. "</td>
                                        <td style='padding:8px;'>". $document->first_name."</td>
                                        <td style='padding:8px;'>". $document->last_name."</td>
                                        <td style='padding:8px;'>". $document->Email."</td>
                                        <td style='padding:8px;'>". $document->pass."</td>
                                        <td style='padding:8px;'><a href='Update.php?manage=customer&id=".$document->_id."'>Update</a></td>
                                        <td style='padding:8px;'><a href='Delete.php?manage=customer&id=".$document->_id."'>Delete</a></td>
                                     </tr>";
                        }
                        echo "</table>";
                        $nm="Manage Customer";
                    }

                    if($link=="Manage Booking"){
                        require 'Backend/vendor/autoload.php'; 

                        $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

                        // Define the filter to search by email

                        // Define the MongoDB query
                        $database = $mongoClient->local;
                        $collection = $database->Book_det;


                        // Execute the query
                        $cursor = $collection->find();

                        echo "<table style='position:absolute; top:180px;  width:1000px; left:320px; z-index:100; font-family:Bahnschrift;  font-size:15px;'>";
                        echo "<tr style='background-color:#d32f2f; color:white; font-size:17px;'>
                                    <td style='padding:8px;'>Id</td>
                                    <td style='padding:8px;'>Name</td>
                                    <td style='padding:8px;'>Email</td>
                                    <td style='padding:8px;'>Booking Date</td>
                                    <td style='padding:8px;'>Price</td>
                                    <td style='padding:8px;'>Status</td>
                                    <td style='padding:8px;'>Update</td>
                                    <td style='padding:8px;'>Delete</td>
                                 </tr>";
                        // Iterate through the cursor and display the data
                        foreach ($cursor as $document) {
                            echo "<tr>
                                        <td style='padding:8px;'>" . $document->_id. "</td>
                                        <td style='padding:8px;'>". $document->name."</td>
                                        <td style='padding:8px;'>". $document->Email."</td>
                                        <td style='padding:8px;'>". $document->bdate."</td>
                                        <td style='padding:8px;'>". $document->price."</td>
                                        <td style='padding:8px;'>". $document->status."</td>
                                        <td style='padding:8px;'><a href='Update.php?manage=book&id=".$document->_id."'>Update</a></td>
                                        <td style='padding:8px;'><a href='Delete.php?manage=book&id=".$document->_id."'>Delete</a></td>
                                     </tr>";
                        }
                        echo "</table>";
                        $nm="Manage Booking";
                    }
                    if($link=="Manage Taxis"){
                        require 'Backend/vendor/autoload.php'; 

                        $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

                        // Define the filter to search by email

                        // Define the MongoDB query
                        $database = $mongoClient->local;
                        $collection = $database->taxi_det;


                        // Execute the query
                        $cursor = $collection->find();

                        echo "<table style='position:absolute; top:180px;  width:1000px; left:320px; z-index:100; font-family:Bahnschrift;  font-size:15px;'>";
                        echo "<tr style='background-color:#d32f2f; color:white; font-size:17px;'>
                                    <td style='padding:8px;'>Id</td>
                                    <td style='padding:8px;'>Driver name</td>
                                    <td style='padding:8px;'>Location</td>
                                    <td style='padding:8px;'>Price</td>
                                    <td style='padding:8px;'>Update</td>
                                    <td style='padding:8px;'>Delete</td>
                                 </tr>";
                        // Iterate through the cursor and display the data
                        foreach ($cursor as $document) {
                            echo "<tr>
                                        <td style='padding:8px;'>" . $document->_id. "</td>
                                        <td style='padding:8px;'>". $document->driver."</td>
                                        <td style='padding:8px;'>". $document->loc."</td>
                                        <td style='padding:8px;'>". $document->price."</td>
                                        <td style='padding:8px;'><a href='Update.php?manage=taxi&id=".$document->_id."'>Update</a></td>
                                        <td style='padding:8px;'><a href='Delete.php?manage=taxi&id=".$document->_id."'>Delete</a></td>
                                     </tr>";
                        }
                        echo "</table>";
                        $nm="Manage Taxis";
                    }
                }
            }
        ?>
        <div style="position:fixed; height:100%; width:280px; background-color:#263238; color:white; font-family:Bahnschrift; font-size:15px;">
            <img src="Images/user1.png" height="170px" width="170px" style="position:absolute; top:20px; left:55px;">
            <label style="position:absolute; top:200px; left:75px; font-family:Bahnschrift; font-size:15px;"><?php echo $email; ?></label><br><br>
            <form name="form" action="" method="post">
                <input style="position: absolute; border:none; background-color:#263238; color:white;  font-family:Bahnschrift;  font-size:15px; top:270px; left:0px; width:100%; height:40px; background-color:#212121; cursor:pointer;" type="submit" name="view[]" value="Manage Customer">
                <input style="position: absolute; border:none; background-color:#263238; color:white;  font-family:Bahnschrift;  font-size:15px; top:320px; left:0px; width:100%; height:40px; background-color:#212121; cursor:pointer;" type="submit" name="view[]" value="Manage Booking">
                <input style="position: absolute; border:none; background-color:#263238; color:white;  font-family:Bahnschrift;  font-size:15px; top:370px; left:0px; width:100%; height:40px; background-color:#212121; cursor:pointer;" type="submit" name="view[]" value="Manage Taxis">
            </form>
        </div>
        <div style="position:absolute; top:0px; right:0px; height:80px; width:1086px; background-color:white; color:white; font-family:Bahnschrift; font-size:15px;">
            <label style="position: absolute; border:none; color:black;  font-family:Bahnschrift;  font-size:35px; top:20px; left:20px; ">Destino | Taxi Booking Service</label>
        </div>

        <div style="position:absolute; top:90px; right:0px; height:35px; width:1086px; background-color:white; color:white; font-family:Bahnschrift; font-size:15px;">
        <label style="position: absolute; border:none; color:black;  font-family:Bahnschrift;  font-size:17px; top:10px; left:20px; ">Home > <?php echo $nm; ?></label>
        </div>

        <div style="position:absolute; top:150px; right:0px; height:400px; width:1086px; background-color:white; color:white; font-family:Bahnschrift; font-size:15px;">
            
        </div>

        <div style="position:fixed; bottom:0px; width:100%; height:30px; background-color:black; color:white; font-family:Bahnschrift;  font-size:15px;">
            
        </div>
    </body>
</html>