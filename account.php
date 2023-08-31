<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="logo.png" class="logo">
            <ul>
                <li> <a href="index1.php">HOME</a></li>
                <li> <a href="about.php">ABOUT US</a></li>
                <li> <a href="catlog.php"> AS GUEST</a></li>
                <li> <a href="account.php">LOGIN</a></li>
                <li> <a href="payment.php">PAYMENT PORTAL</a></li>
                <li> <a href="contact.php">CONTACT</a></li>
            </ul>
        </div>



        <div>
            <form class="cal" method="post" action="login.php">
                <centre>
                    <fieldset>
                        <legend>

                            <h2><b><i>SIGN UP</i></b></h2>

                        </legend>
                        <br>
                        <p>
                            <label>
                                <h2><b>First name : </b></h2><input name="firstName" />
                            </label>

                            <label>
                                <h2><b>Last name : </b></h2><input name="lastName" />
                            </label>

                            <label>
                                <h2><b>Email : </b></h2><input type="email" name="email" />
                            </label>
                            <label>
                                <h2><b>Password : </b></h2><input type="password" name="password" />
                            </label>

                        </p>


                        <p>
                            <label>
                                <h2><b>Date of Birth : </b></h2><input type="date" name="birthDate">
                            </label>
                        </p>




                        <p>


                            <label for="phone">
                                <h2><b>Mobile number : </b></h2>
                            </label>
                            <input type="tel" id="phone" name="phone">
                        </p>




                        <p>
                            <button type="submit" name="submit"> Submit</button>
                        </p>


                    </fieldset>
            </form>
            <div>
                <form>
                    <fieldset>
                        <legend>

                            <h2><b><i>USER LOGIN</i></b></h2>

                        </legend>
                        <br>

                        <h2><b> Email Id : </b></h2><input type="email" name="email" />
                        <h2><b>Password : </b></h2><input type="password" name="password" /></br>
                        <button type="submit" name="submit"> Submit</button>



                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">@jyotisingh&anjali</div>        
    </div>

</body>

</html>