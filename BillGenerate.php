<html>
    <head>
        <title>Destino | Automatic Bill Generate</title>
        <link rel="stylesheet" href="css/BillGenerateStyle.css">
    </head>
    <body>
        <?php 
            $email=$_GET["email"];
            $price=$_GET["price"];
            $name=$_GET["name"];
            $date=$_GET["date"];
            require 'Backend/vendor/autoload.php'; 

            // Set up MongoDB connection
            $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
            $collection = $mongoClient->local->Bill_Det;

            // Define the filter condition to search for the email address
            $document = [
                "Email" => $email,
                "name" => $name,
                "bdate" => $date,
                "price" => $price
            ];
                // Insert the document into the MongoDB collection
                $result1 = $collection->insertOne($document);
                if ($result1->getInsertedCount() > 0) {
                    //$url="Location: BillGenerate.php?email=".$email."&price=".$pr;
                    //header($url);
                    //echo "<script>alert('Data is valid and has been successfully processed.')</script>";
                } else {
                    echo "<script>alert('Error inserting data into the database.');</script>";
                }

            $mongodb = new MongoDB\Driver\Manager("mongodb://localhost:27017");

            // Define the filter to search by email
            $filter = ['Email' => $email];

            // Define the MongoDB query
            $query = new MongoDB\Driver\Query($filter);

            // Execute the query
            $cursor = $mongodb->executeQuery('local.Bill_Det', $query);
            $results = iterator_to_array($cursor);

            // Display records in a table
            if (count($results) > 0) {
                echo "<label style='position:absolute; top:20px; left:685px; font-family: Bahnschrift; font-size: 15px;'>e-Bill</label>";
                echo "<img style='position:absolute; top:30px; left:630px;' src='Images/QR.svg' height='150px' width='150px'>";
                echo "<table class='table'>";
                foreach ($results as $document) {
                   echo "<tr><td colspan=2 class='head'>Data</td></tr>
                            <tr>
                                <td class='names'>Bill ID</td>
                                <td><b>" . $document->_id . "</b></td>
                            </tr>
                            <tr>
                                <td class='names'>Name</td>
                                <td><b>" . $document->name . "</b></td>
                            </tr>
                            <tr>
                                <td class='names'>Email</td>
                                <td><b>" . $document->Email . "</b></td>
                            </tr>
                            <tr>
                                <td class='names'>Bill Date</td>
                                <td><b>" . $document->bdate . "</b></td>
                            </tr>
                            <tr class='bill'>
                                <td class='names'>Total Bill Amount</td>
                                <td><b>₹" . $document->price . ".00</b></td>
                            </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found for the given email.";
            }

        ?>
    </body>
</html>