<?php

$myFName = null;
$myLName = null;
$myAge = null;
$myGender = null;
$myAddress = null;
$myPhone = null;
$myEmail = null;
$myERName = null;
$myERNumber = null;
$myStatus = null;
$mySaturday = null;
$mySunday = null;
$mySize = null;
$myNeeds = null;

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myfname']) && empty($_POST['honeypot']))
{
    include '../includes/db.inc.html.php';

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $myFName = htmlspecialchars($_POST['myfname'], ENT_QUOTES, 'UTF-8');
    $myLName = htmlspecialchars($_POST['mylname'], ENT_QUOTES, 'UTF-8');
    $myAge = htmlspecialchars($_POST['myage'], ENT_QUOTES, 'UTF-8');
    $myGender = htmlspecialchars($_POST['mygender'], ENT_QUOTES, 'UTF-8');
    $myAddress = htmlspecialchars($_POST['myaddress'], ENT_QUOTES, 'UTF-8');
    $myPhone = htmlspecialchars($_POST['myphone'], ENT_QUOTES, 'UTF-8');
    $myEmail = htmlspecialchars($_POST['myemail'], ENT_QUOTES, 'UTF-8');
    $myERName = htmlspecialchars($_POST['myername'], ENT_QUOTES, 'UTF-8');
    $myERNumber = htmlspecialchars($_POST['myernumber'], ENT_QUOTES, 'UTF-8');
    $myStatus = htmlspecialchars($_POST['mystatus'], ENT_QUOTES, 'UTF-8');
    $mySaturday = htmlspecialchars($_POST['mysaturday'], ENT_QUOTES, 'UTF-8');
    $mySunday = htmlspecialchars($_POST['mysunday'], ENT_QUOTES, 'UTF-8');
    $mySize = htmlspecialchars($_POST['mysize'], ENT_QUOTES, 'UTF-8');
    $myNeeds = htmlspecialchars($_POST['myneeds'], ENT_QUOTES, 'UTF-8');

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO registration SET
          fname = :fname,
          lname = :lname,
          age = :age,
          gender = :gender,
          address = :address,
          phone = :phone,
          email = :email,
          ername = :ername,
          ernumber = :ernumber,
          status = :status,
          saturday = :saturday,
          sunday = :sunday,
          size = :size,
          needs = :needs';

        $s = $pdo->prepare($sql);
        $s->bindValue(':fname', $myFName);
        $s->bindValue(':lname', $myLName);
        $s->bindValue(':age', $myAge);
        $s->bindValue(':gender', $myGender);
        $s->bindValue(':address', $myAddress);
        $s->bindValue(':phone', $myPhone);
        $s->bindValue(':email', $myEmail);
        $s->bindValue(':ername', $myERName);
        $s->bindValue(':ernumber', $myERNumber);
        $s->bindValue(':status', $myStatus); 
        $s->bindValue(':saturday', $mySaturday);
        $s->bindValue(':sunday', $mySunday);
        $s->bindValue(':size', $mySize);
        $s->bindValue(':needs', $myNeeds);
        $s->execute();
    }
    catch (PDOException $e) {
        $error = 'Error adding submitted field: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    // load the thank you page after the INSERT runs
    include 'success.html.php';

}
// Add an else to load the initial page if the initial (line 19) if statement is false
else
{
    include 'register.html.php'; //Modify this to include the initial file for this folder
}