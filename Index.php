<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Destino | Online Taxi Booking Service</title>
        <link rel="stylesheet" href="css/IndexStyle.css">
        </style>
    </head>
    <body>
    <script>
        

    // JavaScript function to increase the cart item count
    function addToCart(button) {
        const queryString = window.location.search;
        
        // Parse the query string using URLSearchParams
        const searchParams = new URLSearchParams(queryString);

        // Get the value of the "variableName" query string parameter
        const emailValue = searchParams.get("email");

        // Check if the variableValue is null (parameter not found) or has a value
        if (emailValue !== null) {
            // Use the variableValue in your JavaScript code    
            var currentItemCount = parseInt(document.getElementById("cart-item-count").textContent);

            // Increase the item count by 1
            var newItemCount = currentItemCount + 1;

            // Update the cart item count on the page
            document.getElementById("cart-item-count").textContent = newItemCount;
            
            // Find the parent div of the clicked button
            var div = button.parentNode;
            // Get the ID attribute value of the parent div
            var divId = div.getAttribute("id");
            var prid = button.getAttribute("id");
            // Display the ID in an alert
            //alert("The ID of the div is: " + divId);

            //alert(prid);
            // Encode the variable value for a URL
            var encodedlocValue = encodeURIComponent(divId);
            var encodedprValue = encodeURIComponent(prid);
            // Construct the URL with the variable value
            var url = 'Booking.php?location=' + encodedlocValue + '&price=' + encodedprValue;
            //alert(url);
            // Redirect to the URL
            window.location.href = url;
            var anchorElement = document.getElementById("myLink"); // Get the anchor element by its id
            anchorElement.href = url;
        } else {
            alert("You have not logged In.");
        }
        // Get the current cart item count from the page
        
    }
</script>
        <div class="navbar">
            <label class="mark">Destino</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a class="nav-link" href="Index.php">Home</a>
             <a id="us" class="nav-link" href="#our_services">Our Services</a>
             <a id="au" class="nav-link" href="#about_us">About</a>
             <a id="cu" class="nav-link" href="#contact_us">Contact</a>
             <div class="nav-right">
              <a class="nav-link" href="Login.php" style="position:absolute; right:122px; top:15px;">LogIn</a>
                <a id="myLink" href=""><img src="Images/icons8-booking-64.png" height="30px" width="30px" style="border: 1px solid white; position:absolute; right:90px; top:15px; cursor:pointer;"></a>
                <a href="AdminLogin.php"><img style="border: 1px solid white; position:absolute; right:20px; top:4px; cursor:pointer;" src="Images/admin.png" height="45px" width="40px"></a>
                <span id="cart-item-count" style="position:absolute; top:12px; right:93px; background-color:red; color:white; border-radius:50% 50% 50% 50% / 60% 60% 40% 40%; width:10px; height:11px; padding:1px; padding-bottom:5px; text-align:center;">0</span>
             </div>           
        </div>
        <div>
          <img  class="img1" src="Images/_gallery-2.jpg">
           <div>    
                <label class="heading1">Book your ride now!</label>
                <p class="expl">Get to your destination with ease and comfort <br>by booking a ride with our taxi booking service Destino.</p>
                <a class="book-btn" href="#ava-tax">Book now</a><br>
                <a class="howtobook-btn" href="#how_to_book">How to book</a>
           </div>
        </div><br>
        <label  id="ava-tax" class="heading3">Available Taxis</label><br><br><hr>
        <div class="Available-taxis">
            <div class="taxi1">
                <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Ahemdabad</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹3000</label>
                <div class="taxi-book" id="Ahemdabad"><button id="3000" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Surat</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹1500</label>
                <div class="taxi-book" id="Surat"><button id="1500" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Vadodara</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹2100</label>
                <div class="taxi-book" id="Vadodara"><button id="2100" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Umbergaon</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹500</label>
                <div class="taxi-book" id="Umbergaon"><button id="500" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Valsad</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹200</label>
                <div class="taxi-book" id="Valsad"><button id="200" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Mumbai</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹2500</label>
                <div class="taxi-book" id="Mumbai"><button id="2500" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Chikhli</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹800</label>
                <div class="taxi-book" id="Chikhli"><button id="800" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Daman</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹400</label>
                <div class="taxi-book" id="Daman"><button id="400" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Valsad beach</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹100</label>
                <div class="taxi-book" id="Valsad beach"><button id="100" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Ahemdabad Airport</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹3500</label>
                <div class="taxi-book" id="Ahemdabad Airport"><button id="3500" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
            <div class="taxi1">
            <img class="taxi-img" src="Images/taxi-img.png" height="90px" width="150px"><br>
                <label style="font-family: Bahnschrift; font-size:20px; background-color:#263238; color: white;">Location</label><br>
                <label class="loc" style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">Statue of Unity</label><br><br>
                <label style="font-family: Bahnschrift; font-size:16px; background-color:#263238; color: white;">₹2500</label>
                <div class="taxi-book" id="Statue of Unity"><button id="2500" style="text-decoration:none; border:none; font-family: Bahnschrift; font-size:16px; background-color:#ffc400; color:black; cursor:pointer;" onclick="addToCart(this)">Book</button></div>
            </div>&nbsp;&nbsp;
        </div><br>
        <label class="heading3">How to book</label><br><br><hr>
        <div class="container4" id="how_to_book">
           <center><table>
                <tr>
                   <td class="contact_td"> <center><img src="Images/request.png" height="100px" width="100px"></center></td>
                   <td class="contact_td"> <center><img src="Images/ride.jpg" height="150px" width="150px"></center></td>
                  <td class="contact_td"> <center><img src="Images/rate.jpg" height="100px" width="100px"></center></td>
                </tr>
                <tr>
                    <td><center><b><p class="heading41">Request</p></b></center></td>
                    <td><center><b><p class="heading41">Ride</p></b></center></td>
                    <td><center><b><p class="heading41">Rate</p></b></center></td>
                </tr>
                <tr>
                    <td><p class="expl41">Go to the Book Now page and enter your pick-up and drop-out point. And according to your location select and request for taxi.</p></td>
                    <td><p></p><p class="expl41">Check that the vehicle details match what you see in your dashboard before getting in the vehicle.</p></td>
                    <td><p class="expl41">You'll be automatically chargerd through your payment method on file, so you can exit the vehicle as soon as you arrive. Remember to rate your driver and service.</p></td>
                </tr>
            </table></center>
        </div><br><br>
        <div class="container3" id="our_services">
            <label class="heading3">Our Services</label><br><br><hr>
            <img class="img2" src="Images/360_F_522122740_8wtNhmn7Iu9f4k8VTBnGFKjL0QjUlK43.jpg">
            <label class="heading31">City Tours</label>
            <p class="expl31" >Experience the best of Valsad with our customized city tours.<br>From historical sites to shopping, we've got you covered.</p><br>
            <label class="heading32">Airport Transfers</label>
            <p class="expl32">Arrive in style with our comfortable and affordable airport<br> taxi services.Book now for hassle-free travel.</p>
            <img class="img3" src="Images/display.jpg">
        </div>
        <div class="container2" id="about_us">
            <hr> 
            <img class="img5" src="Images/about-us.png">
            <label class="heading2">About Us</label>
            <p class="expl2">Destino is a leading taxi bookin service based in Valsad, Gujarat.<br>With Our user-friendly platform we are dedicated to providing<br> convenient and reliable transposrtation solutions to our customers. <br>Whether you need a ride to the airport, a quick trip across town, or a day of<br> exploring city, Destino  is here to ensure a seamless and enjoyable experience. <br>Book your next ride whith us and discover the convenient and comfort of<br> traveling with Destino.</p>
        </div><br>
       <div class="container5" id="contact_us">
            <div class="left-side">
                <p class="heading5">Get in touch with us</p><br>
                <p class="expl5">Fill out this form to send us a message and we'll get back to you<br> as soon as possible.</p>
            </div>
            <div class="right-side">
                <label class="labfn">Name</label><br>
                <input class="contact-form-name" type="text" placeholder="Enter name"><br><br>
                <label class="labfe">Email</label><br>
                <input class="contact-form-email" type="text" placeholder="Enter email"><br><br>
                <label class="labfm">Message</label><br>
                <textarea name="message" cols="32" rows="8" placeholder="Enter message"></textarea>
                <button class="btn-send" value="Send">Send</button>
            </div>
       </div><!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
       <div class="footer">
            <p style="background: transparent; background-color: limegreen; padding: 15px;">Taxi  |  Taxi Booking System. All Rights Reserved</p>
        </div>
    </body>
</html>