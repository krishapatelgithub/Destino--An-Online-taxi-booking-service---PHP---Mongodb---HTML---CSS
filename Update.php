<html>
    <head>
        <title>Destino | Update Data</title>
    </head>
    <body>
        <?php 
            $man=$_GET["manage"];
            $id=$_GET["id"];
            if($man=="customer")
            {
                require 'Backend/vendor/autoload.php'; 

                // Set up MongoDB connection
                $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                $collection = $mongoClient->local->tblusers;
                
                $objectId = new MongoDB\BSON\ObjectId($id);
                $query = ['_id' => $objectId];
                $document = $collection->findOne($query);

                if ($document) {
                    // Document found, do something with it
                    //print_r($document);
                    echo "<div style='position:absolute; top:20px; left:470px; font-family:Bahnschrift;  font-size:15px; padding:15px;'>
                            <form name='form' action='Update2.php' method='post'>
                                <table>
                                <tr style='background-color:#1565c0; color:white; height:25px;'><td colspan=2 style='padding:8px;'>Data 
                                <input type='hidden' name='man' value='".$man."' /></td></tr><tr>
                                <td style='padding:10px;'>
                                <label>Id: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='id' value='".$document->_id."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>First name: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='fname' value='".$document->first_name."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Last name: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='lname' value='".$document->last_name."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Email: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='Email' value='".$document->Email."' />
                                </td style='padding:10px;'></tr><tr ><td colspan=2 style='padding:20px;'>
                                <input style='position:absolute; font-family:Bahnschrift; left:65px; height:30px; width:300px; background-color:#1565c0; color:white; border:none; border-radius:5px; cursor:pointer;' type='submit' value='Update' /></td></tr>
                                </table>
                             </form></div>";
                } else {
                    echo "Document not found.";
                }
            }

            if($man=="book"){
                require 'Backend/vendor/autoload.php'; 

                // Set up MongoDB connection
                $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                $collection = $mongoClient->local->Book_det;
                
                $objectId = new MongoDB\BSON\ObjectId($id);
                $query = ['_id' => $objectId];
                $document = $collection->findOne($query);

                if ($document) {
                    // Document found, do something with it
                    //print_r($document);
                    echo "<div style='position:absolute; top:20px; left:470px; font-family:Bahnschrift;  font-size:15px; padding:15px;'>
                            <form name='form' action='Update2.php' method='post'>
                                <table>
                                <tr style='background-color:#1565c0; color:white; height:25px;'><td colspan=2 style='padding:8px;'>Data
                                <input type='hidden' name='man' value='".$man."' /></td></tr><tr>
                                <td style='padding:10px;'>
                                <label>Id: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='id' value='".$document->_id."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Name: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='name' value='".$document->name."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Email: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='email' value='".$document->Email."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Booking date: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='date' value='".$document->bdate."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Price: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='price' value='".$document->price."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Status: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='status' value='".$document->status."' />
                                </td style='padding:10px;'></tr><tr ><td colspan=2 style='padding:20px;'>
                                <input style='position:absolute; font-family:Bahnschrift; left:65px; height:30px; width:300px; background-color:#1565c0; color:white; border:none; border-radius:5px; cursor:pointer;' type='submit' value='Update' /></td></tr>
                                </table>
                             </form></div>";
                } else {
                    echo "Document not found.";
                }
            }

            if($man=="taxi"){
                require 'Backend/vendor/autoload.php'; 

                // Set up MongoDB connection
                $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
                $collection = $mongoClient->local->taxi_det;
                
                $objectId = new MongoDB\BSON\ObjectId($id);
                $query = ['_id' => $objectId];
                $document = $collection->findOne($query);

                if ($document) {
                    // Document found, do something with it
                    //print_r($document);
                    echo "<div style='position:absolute; top:20px; left:470px; font-family:Bahnschrift;  font-size:15px; padding:15px;'>
                            <form name='form' action='Update2.php' method='post'>
                                <table>
                                <tr style='background-color:#1565c0; color:white; height:25px;'><td colspan=2 style='padding:8px;'>Data
                                <input type='hidden' name='man' value='".$man."' /></td></tr><tr>
                                <td style='padding:10px;'>
                                <label>Id: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='id' value='".$document->_id."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Driver Name: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='dname' value='".$document->driver."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Location: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='location' value='".$document->loc."' />
                                </td></tr><tr><td style='padding:10px;'>
                                <label>Price: </label>
                                </td><td style='padding:10px;'>
                                <input style='font-family:Bahnschrift; height:30px; width:300px; background-color:#cfcae9; color:black; border:none; border-radius:5px;' type='text' name='price' value='".$document->price."' />
                                </td></tr><tr ><td colspan=2 style='padding:20px;'>
                                <input style='position:absolute; font-family:Bahnschrift; left:65px; height:30px; width:300px; background-color:#1565c0; color:white; border:none; border-radius:5px; cursor:pointer;' type='submit' value='Update' /></td></tr>
                                </table>
                             </form></div>";
                } else {
                    echo "Document not found.";
                }
            }
        ?>

    </body>
</html>