<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenumber = $_POST["phonenumber"];
    $streetnumber = $_POST["streetnumber"];
    $streetname = $_POST["streetname"];
    $streetdirection = $_POST["streetdirection"];
    $postalcode = $_POST["postalcode"];
    $email = $_POST["email"];
    $quantity = $_POST["Quantity"];
    $pizzatype = $_POST["pizza-type"];
    $sauce = $_POST["lang"];

    // Validate the form data as needed

    // Process the form data as needed

    // Redirect the user to a new page to display the results
    header("Location: results.html");
    exit();
}