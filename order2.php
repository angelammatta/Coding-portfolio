<!DOCTYPE html>
<html>
 <head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CIS Restaurant, Lunch Menu">
		<meta name="description" content="CIS Restaurant: Lunch Menu">
	<title>CIS Restaurant Menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



<?php


$firstName =  substr(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING),0,30);
$lastName =  substr(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING),0,30);
$phone1 = substr(filter_input(INPUT_POST, 'phone1', FILTER_SANITIZE_STRING),0,3);
$phone2 = substr(filter_input(INPUT_POST, 'phone2', FILTER_SANITIZE_STRING),0,3);
$phone3 = substr(filter_input(INPUT_POST, 'phone3', FILTER_SANITIZE_STRING),0,4);
$email = substr(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),0,35);
$cardType = substr(filter_input(INPUT_POST, 'CardType', FILTER_SANITIZE_STRING),0,10);
$cardNumber = substr(filter_input(INPUT_POST, 'CardNumber', FILTER_SANITIZE_STRING),0,24);
$zipCode = substr(filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_STRING),0,5);


$subtotal = substr(filter_input(INPUT_POST, 'subtotal',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION),0,7);
$taxes = substr(filter_input(INPUT_POST, 'taxes', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION),0,7);
$discount = substr(filter_input(INPUT_POST, 'discount', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION),0,7);
$total = substr(filter_input(INPUT_POST, 'total', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION),0,7);
$couponCode = substr(filter_input(INPUT_POST, 'couponcode', FILTER_SANITIZE_NUMBER_INT),0,5);



$date = date('Y-m-d H:i:s');

include('../../connect.php');

// Establish database connection with PDO
try {
    $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
   }
   catch(PDOException $e) {
    echo $e->getMessage();
   }


// Use of PHP PDO prepared statements to prevent SQL injection
// Insert into payment table
$sql =$DBH->prepare("INSERT INTO payment VALUES (NULL, :firstname, :lastname,
:phone1, :phone2, :phone3, :email, :CardType, :CardNumber, :zipcode, :subtotal, :taxes,
:discount, :total, :couponcode, :date)");
$sql->execute( array(':firstname'=>$firstName, ':lastname'=>$lastName,
':phone1'=>$phone1, ':phone2'=>$phone2, ':phone3'=>$phone3, ':email'=>$email,
':CardType'=>$cardType, ':CardNumber'=>$cardNumber, ':zipcode'=>$zipCode,
':subtotal'=>$subtotal, ':taxes'=>$taxes, ':discount'=>$discount, ':total'=>$total,
':couponcode'=>$couponCode, ':date'=>$date ) )or die(print_r($sql->errorInfo(),
true));


// Get payment_id from newly placed order
$query =$DBH->prepare("SELECT * FROM payment WHERE firstname = :firstname AND
lastname = :lastname AND orderdate = :date");
$values = [':firstname' => $firstName, ':lastname' => $lastName, ':date' => $date];
$query->execute($values);
$payments = $query->fetchAll(PDO::FETCH_CLASS, 'StdClass');
foreach ($payments as $payment) {
 $payment_id = $payment->payment_id;
}


// Insert records into orders table
if (!empty($_POST['wings'])) {
    $wings=$_POST['wings'];
    $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Boneless
    Wings and Skins Sampler', :wings)");
    $sql->execute( array(':payment_id'=>$payment_id, ':wings'=>$wings) )or
    die(print_r($sql->errorInfo(), true));
    }

    // Insert records into orders table
if (!empty($_POST['nachos'])) {
    $nachos=$_POST['nachos'];
    $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Three Cheese Nachos', :nachos)");
    $sql->execute( array(':payment_id'=>$payment_id, ':nachos'=>$nachos) )or
    die(print_r($sql->errorInfo(), true));
    }


      // Insert records into orders table
if (!empty($_POST['dip'])) {
    $dip=$_POST['dip'];
    $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Spinach Artichoke Dip', :dip)");
    $sql->execute( array(':payment_id'=>$payment_id, ':dip'=>$dip) )or
    die(print_r($sql->errorInfo(), true));
    }

    if (!empty($_POST['quesadilla'])) {
        $quesadilla=$_POST['quesadilla'];
        $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Santa Fe Chicken Quesadilla', :quesadilla)");
        $sql->execute( array(':payment_id'=>$payment_id, ':quesadilla'=>$quesadilla) )or
        die(print_r($sql->errorInfo(), true));
        }

          if (!empty($_POST['chips'])) {
            $chips=$_POST['chips'];
            $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Chips and Salsa', :chips)");
            $sql->execute( array(':payment_id'=>$payment_id, ':chips'=>$chips) )or
            die(print_r($sql->errorInfo(), true));
            }

            if (!empty($_POST['calamari'])) {
                $calamari=$_POST['calamari'];
                $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Fried Calamari', :calamari)");
                $sql->execute( array(':payment_id'=>$payment_id, ':calamari'=>$calamari) )or
                die(print_r($sql->errorInfo(), true));
                }

                if (!empty($_POST['pastrami'])) {
                    $pastrami=$_POST['pastrami'];
                    $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Pastami Sandwich', :pastrami)");
                    $sql->execute( array(':payment_id'=>$payment_id, ':pastrami'=>$pastrami) )or
                    die(print_r($sql->errorInfo(), true));
                    }

                    if (!empty($_POST['panini'])) {
                        $panini=$_POST['panini'];
                        $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Roasted Turkey & Avocado BLT Panini', :panini)");
                        $sql->execute( array(':payment_id'=>$payment_id, ':panini'=>$panini) )or
                        die(print_r($sql->errorInfo(), true));
                        }
            
                        if (!empty($_POST['reuben'])) {
                            $reuben=$_POST['reuben'];
                            $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Reuben Sandwich', :reuben)");
                            $sql->execute( array(':payment_id'=>$payment_id, ':reuben'=>$reuben) )or
                            die(print_r($sql->errorInfo(), true));
                            }
                
                            if (!empty($_POST['vegetarian'])) {
                                $vegetarian=$_POST['vegetarian'];
                                $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Vegetarian Sandwich', :vegetarian)");
                                $sql->execute( array(':payment_id'=>$payment_id, ':vegetarian'=>$vegetarian) )or
                                die(print_r($sql->errorInfo(), true));
                                }
                                if (!empty($_POST['turkey wrap'])) {
                                    $turkey=$_POST['turkey wrap'];
                                    $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Chipotle Honey Mustard Turkey Wrap', :turkey wrap)");
                                    $sql->execute( array(':payment_id'=>$payment_id, ':turkey wrap'=>$turkey) )or
                                    die(print_r($sql->errorInfo(), true));
                                    }
                         
                                
                                    if (!empty($_POST['shrimp'])) {
                                        $shrimp=$_POST['shrimp'];
                                        $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Parmesan Shrimp Pasta ', :shrimp pasta)");
                                        $sql->execute( array(':payment_id'=>$payment_id, ':shrimp pasta'=>$shrimp) )or
                                        die(print_r($sql->errorInfo(), true));
                                        }

                                        if (!empty($_POST['chickenpasta'])) {
                                            $chickenpasta=$_POST['chickenpasta'];
                                            $sql =$DBH->prepare("INSERT INTO orders VALUES (NULL, :payment_id, 'Parmesan Chicken Pasta', :chickenpasta)");
                                            $sql->execute( array(':payment_id'=>$payment_id, ':chickenpasta'=>$chickenpasta) )or
                                            die(print_r($sql->errorInfo(), true));
                                            }
    
    





    $DBH = null;


?>

<p>Order successfully placed.</p>

</body>

</html>
