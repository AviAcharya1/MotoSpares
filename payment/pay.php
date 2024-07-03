<!DOCTYPE html>
<html>
<head>
    <title>Address and Payment Method</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="pay.css">
</head>
<body>
<div class="container1">
         <div class="navbar">
             <img src="../images/logo.png" class="logo">
             <nav>
                 <ul>
                     <li><a href="../login/index2.php">< Back</a></li>
                 </ul>
             </nav>
         </div>
    </div></br>

<h2><u>Address and Payment Method</u></h2>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form id="validate" action="thanku.php">
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3></br>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="" placeholder="Full Name" required>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="" placeholder="............" required>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="" placeholder="City" required>

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="" placeholder="State"required>
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="" placeholder="000000"required>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3></br>
                        <label><input type="checkbox" checked="" name="">Credit/Debit/ATM Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="" placeholder="00">
                        <div class="row">
                            
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="" placeholder="0000">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="" placeholder="000">
                               </div>
                            </div>
                        <label><input type="checkbox" checked="checked" name=""> Cash on delivery</label>
                    </div>
                </div>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>
    
</body>
</html>