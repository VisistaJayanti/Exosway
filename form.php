<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Age = $_POST['Age'];
$SchoolName = $_POST['SchoolName'];
$email = $_POST['email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

$con = mysqli_connect("localhost", "root", "", "exosway");

if ($con->connect_error) {
    die("connect error" . $con->connect_error);
} else {
    $stmt = $con->prepare("Insert into enroll(Fname, Lname, Age, SchoolName,  email, Subject, Message) values(?, ?, ?, ?, ?, ? ,?)");
    $stmt->bind_param("sssssss", $Fname, $Lname, $Age, $SchoolName,  $email, $Subject, $Message);
    $execval=$stmt->execute();
    echo $execval;
    echo "Registration Succesful!";
    $stmt->close();
    $con->close();
}
?>

