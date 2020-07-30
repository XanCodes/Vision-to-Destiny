<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision to Destiny | Home</title>
    
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="style.js"></script>
    <!-- Decor -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="tint">
            <div class="info">
                <h1>Thank You</h1>
                <p>We'll Contact You Shortly</p>
            </div>
        </div>
    </div>
    <header>
        <nav>
            <div class="logo">
                <a href="index.html"><h1>VD</h1></a>
            </div>
            <div class="nav-menu">
                <i class="fas fa-bars" id="mobile"></i>
                <ul class="menu-list">
                    <a href="index.html">
                        <li class="active">Home</li>
                    </a>
                    <a href="about.html">
                        <li>About</li>
                    </a>
                    <a href="services.html">
                        <li>Services</li>
                    </a>
                    <a href="contact.html">
                        <li>Contact Us</li>
                    </a>
                </ul>
            </div>
        </nav>
    </header>
    <?php 
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['comment'];
        $occupation = $_POST['occupation']
        $organization = $_POST['org'];


        $to="Vision2Destiny4U@gmail.com";
        $subject="Contacting Vision2Destiny";
        $message="Name: ".$name."\n"."Phone Number: ".$number."\n"."Job: ".$occupation."\n"."Organization: ".$organization."\n"."Message: "."\n\n".$message;
        $headers="From: ".$email;
        

        /* if(mail($to, $subject, $message, $headers)) {
            echo "<h1>Sent Succesfully! Thank You"." ".$name.", We will contact you soon!</h1>";
        } 
        else {
            echo "<h1>Did you fill out every field?</h1>";
        } */
    }
?>
</body>
</html>