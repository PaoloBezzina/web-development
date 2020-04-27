
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style-sheet.css">
    <link rel="shortcut icon" type="image/png" href="https://www.shareicon.net/data/512x512/2016/05/25/770336_fork_512x512.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ta' Pinu Restuarant - Contact Us</title>
</head>


<body>

    <div class="hero-image">
        <h1 class="hero-title">Ta' Pinu Restuarant</h1>
        <h2 class="hero-text">Traditional Maltese Restaurant</h2>
        <ul class="navigation">
            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <a class="navigation" href="favorites.php">
                <img src="https://www.vippng.com/png/full/102-1027843_one-heart-png-transparent-png-download-white-heart.png">
            </a>
        </ul>
        
    </div>


<div class="content">
    <h1>Contact Us</h1> 
    <form id="contact-form" action= "contact-us-action.php"  method="POST">
        <label for = "name"> First name: </label><br>
        <input type = "text" id = "name" size="30" name = "name"><br>

        <label for = "surname">Surname:</label><br>
        <input type = "text" id = "surname" size="30" name = "surname"><br>

        <label for = "email">Email Address:</label><br>
        <input type = "text" id = "surname" size="30" name = "surname"><br>

        <label for = "message">Message:</label><br>
        
        <textarea name="message" form="contact-form" rows="15" cols="50"></textarea>

        </br></br> <input type = "submit" value="Send">
    </form>
</div>
</body>

</html> 