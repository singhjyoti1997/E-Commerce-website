<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment portal</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <style>
        table{
        border-collapse:collapse;  
        }
        table td, th{
        border:1px solid #ccc;
       
        }
        table tr:hover{  
        background: #f1f1f1;
        }
        
        </style>
</head>

<body >
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
    <center>

        <table border="8" class="cal1">
            <center>
                <header>
                    <h2 class="o1"><B>PAYMENT DETAILS</B></h2>
                </header>
                <hr>
                <center>
                    <tr>
                        <td><b>NAME</b> </td>
                        <td> <label>
                                <br />
                                <select name=>
                                    <option>--None--</option>
                                    <option>Mr.</option>
                                    <option>Ms.</option>
                                    <option>Mrs.</option>
                                </select>
                            </label></td>
                        <td>

                            <p>
                                <label><b><i>First name:</i></b><input name="firstName" /></label>
                            </p>
                        </td>
                        <td>
                            <p>
                                <label><b><i>Last name:</i></b><input name="lastName" /></label>
                            </p>
                        </td>
                    <tr>
                        <td><b>YOUR ADDRESS </b></td>
                        <td colspan="3"><label>
                                <b><i>Address :</i></b>
                                <br />
                                <center><textarea name="address" cols="30" rows="3"></textarea></center>
                            </label></td>
                    </tr>

                    </tr>
                    <tr>
                        <td>
                            <p>
                                <B>MODE OF PAYMENT :</B>
                            </p>
                        </td>
                        <td colspan="3"><label><input type="radio" name="payment" value="COD" /><b><i>
                                        COD</i></b></label>
                            <label><input type="radio" name="payment" value="UPI" /><b><i>UPI</i></b></label>
                            <label><input type="radio" name="payment"
                                    value="NET- BANKING" /><B><I>NET-BANKING</I></B></label>
                            <label><input type="radio" name="payment" value="CREDIT/DEBIT CARD" />
                                <B><I>CREDIT/DEBIT-CARD</I></B></label>
                        </td>

                    </tr>
                    
                    <tr>
                        <td><b>CLICK SUBMIT TO PAY</b></td>
                        <td colspan="3">
                            <center>
                                <p>
                                    <button type="submit">Submit</button>
                                </p>
                        </td>
                </center>

        </table>
    </center>
<div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br>
    

</body>


</html>