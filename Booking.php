<!DOCTYPE html>
<html>
<head>
    <title>Destino | Booking</title>
    <link rel="stylesheet" href="css/BookingStyle.css">
</head>
<body>
<?php
    // Retrieve data from the query string
    $loc = $_GET['location'];
    $pr=$_GET['price'];
    // Display the data
    //echo "Name: " . htmlspecialchars($loc) . "<br>";
    //echo $pr;
    ?>
    <script>
        function addToCart() {
            // Get the current cart item count from the page
            var currentItemCount = parseInt(document.getElementById("cart-item-count").textContent);
            var currentPriceCount = parseInt(document.getElementById("cart-price").textContent);
            // Increase the item count by 1
            if(currentItemCount > 3){
                alert('Taxi limit is only of 4 passengers.');
            }
            else{
                var newItemCount = currentItemCount + 1;
                var newPriceCount = currentPriceCount + 100;
                // Update the cart item count on the page
                document.getElementById("cart-item-count").textContent = newItemCount;
                document.getElementById("cart-price").textContent = newPriceCount;
                var encodedlocValue = encodeURIComponent(newPriceCount);
                var url = 'Payment.php?price=' + encodedlocValue;
                //alert(url);
                // Redirect to the URL
                //window.location.href = url;
                var anchorElement = document.getElementById("myLink"); // Get the anchor element by its id
                anchorElement.href = url;
            }
            
        }
        function removeToCart() {
            // Get the current cart item count from the page
            var currentItemCount = parseInt(document.getElementById("cart-item-count").textContent);
            var currentPriceCount = parseInt(document.getElementById("cart-price").textContent);
            // Increase the item count by 1
            if(currentItemCount < 2){
                alert('There should be atleast 1 passenger.');
            }
            else{
                var newItemCount = currentItemCount - 1;
                var newPriceCount = currentPriceCount - 100;
                // Update the cart item count on the page
                document.getElementById("cart-item-count").textContent = newItemCount;
                document.getElementById("cart-price").textContent = newPriceCount;
            }
            var encodedlocValue = encodeURIComponent(newPriceCount);
            var url = 'Payment.php?price=' + encodedlocValue;
            //alert(url);
            // Redirect to the URL
            //window.location.href = url;
            var anchorElement = document.getElementById("myLink"); // Get the anchor element by its id
            anchorElement.href = url;
        }
        
    </script>
    <div>
        <div style="Iposition:absolute; height:180px; width:380px; top:50px; left:500px; background-color:white; padding:10px;">
            <label style="position:absolute; top:6px; left:10px; font-size:20px; font-family: Bahnschrift;">Book your taxi</label><br><hr>
            <label style="position:absolute; top:45px; left:10px; font-size:16px; font-family: Bahnschrift;"> Drop-out Location : <?php echo $loc; ?></label><br>
            <label style="position:absolute; top:75px; left:10px; font-family: Bahnschrift;">Total price : ₹<span id="cart-price"><?php echo $pr; ?></span></label>
            <label style="position:absolute; top:105px; left:10px; font-family: Bahnschrift;">Number of passengers :
                <button onclick="removeToCart()">-</button>&nbsp;
                     <span id="cart-item-count" >1</span>&nbsp;
                <button onclick="addToCart()">+</button>
            </label>
            <a id="myLink" style="position:absolute; top:140px; left:30px; text-decoration:none; font-family: Bahnschrift; color:black; background-color:#ffc400; padding:10px; border-radius:5px;" href="">Make Payment</a>
        </div>
    </div>
    
</body>
</html>
