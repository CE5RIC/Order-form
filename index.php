<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions

// A session is a way to store information (in variables) to be used across multiple pages.
// Unlike a cookie, the information is not stored on the users computer.

session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}



// TODO: provide some products (you may overwrite the example)

$products = [
    ['name' => 'Club Ham', 'price' => 3.20],
    ['name' => 'Club Cheese', 'price' => 3],
    ['name' => 'Club Cheese & Ham', 'price' => 4],
    ['name' => 'Club Chicken', 'price' => 4],
    ['name' => 'Club Salmon', 'price' => 5],
    ['name' => 'Cola', 'price' => 2],
    ['name' => 'Fanta', 'price' => 2],
    ['name' => 'Sprite', 'price' => 2],
    ['name' => 'Ice-tea', 'price' => 3],
];






$totalValue = 0;

function handle() {
$street = $_POST['street'];
$streetNumber = $_POST['streetnumber'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

    if(isset($_POST['submit'])){

        if(!empty($_POST['products'])) {    
            foreach($_POST['products'] as $value){
             
             
                echo "This is your order: <br>";
                print_r($value);


echo "For delivery at " .$street . " " .$streetNumber . " " .$city . " " .$zipcode . " <br>";

               
             
            }
            
        }
    
            }
        }

handle();


// when the form is submitted, loop over the $_POST checkbox name using for each

function handleForm()
{

    // TODO: form related tasks (step 1)
    
    // Validation (step 2)
        $invalidFields = validate();
        if (!empty($invalidFields)) {
            // TODO: handle errors
        } else {
            // TODO: handle successful submission
        }
    }
// TODO: replace this if by an actual check
$formSubmitted = false;
if ($formSubmitted) {
    handleForm();
}




function validate()
{
    // TODO: This function will send a list of invalid fields back
    return [];
}



require 'form-view.php';




