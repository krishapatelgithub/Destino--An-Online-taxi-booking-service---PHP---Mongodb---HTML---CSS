<html>
    <head>
        <title>Destino | Delete Record</title>
    </head>
    <body>
        <?php
            $man=$_GET["manage"];
            $id=$_GET["id"];
            require 'Backend/vendor/autoload.php'; 
            $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
            $database = $mongoClient->local; 
            if($man=="customer"){
                $collection = $database->tblusers; 
                $filter = ['_id' => new MongoDB\BSON\ObjectId($id)];

                // Delete the document that matches the filter
                $deleteResult = $collection->deleteOne($filter);

                // Check if the document was successfully deleted
                if ($deleteResult->getDeletedCount() === 1) {
                    echo "Document with ID $documentId has been deleted.";
                } else {
                    echo "Document with ID $documentId was not found or an error occurred.";
                }
            }

            if($man=="book"){
                $collection = $database->Book_det; // Replace with your collection name


                // Create a filter to specify the document by its ID
                $filter = ['_id' => new MongoDB\BSON\ObjectId($id)];

                // Delete the document that matches the filter
                $deleteResult = $collection->deleteOne($filter);

                // Check if the document was successfully deleted
                if ($deleteResult->getDeletedCount() === 1) {
                    echo "Document has been deleted.";
                } else {
                    echo "Document with ID $documentId was not found or an error occurred.";
                }
            }
            
            if($man=="taxi"){
                $collection = $database->taxi_det; // Replace with your collection name


                // Create a filter to specify the document by its ID
                $filter = ['_id' => new MongoDB\BSON\ObjectId($id)];

                // Delete the document that matches the filter
                $deleteResult = $collection->deleteOne($filter);

                // Check if the document was successfully deleted
                if ($deleteResult->getDeletedCount() === 1) {
                    echo "<label style=' font-family:Bahnschrift; font-size:35px;'>Document with ID $documentId has been deleted.</label>";
                } else {
                    echo "Document with ID $documentId was not found or an error occurred.";
                }
            }
            
        ?>
    </body>
</html>