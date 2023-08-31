<!DOCTYPE html>
<html>

<head>
    <title>
        contact us
    </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="logo.png" class="logo">
            <ul>
                <li> <a href="index1.php">HOME</a></li>
                <li> <a href="about.php">ABOUT US</a></li>
                <li> <a href="catlog.php">AS GUEST</a></li>
                <li> <a href="account.php">LOGIN</a></li>
                <li> <a href="payment.php">PAYMENT PORTAL</a></li>
                <li> <a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
        <div>
        <br><br><br><br><br><br>
        <form class="cal" method="post" action="contact_data.php">
                <h2>CONTACT US</h2>
                <br>
               <p>
                            <label>
                                <h2><b>Name : </b></h2><input name="Name" />
</label>

                            <label>
                                <h2><b>Email : </b></h2><input type="email" name="email" />
                            </label>
                            <label>
                                <h2><b>Message : </b></h2><input type="message" name="message" />
                            </label>

                        </p>
                        <p>
                            <button type="submit" name="submit"> Submit</button>
                        </p>
                <div>
                    <span class="fa fa-phone"></span> 001 1023 567
                    <span class="fa fa-envelope-o"></span> contact_sccoby@fashion.com
                </div>
            </form>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     
    </div>
</body>

</html>