<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'kingshuk_user1', '_7^8G5=o1@vX','kingshuk_dbase1');

// get the post records
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtSubject = $_POST['subject'];
$txtMessage = $_POST['message'];

$sql="INSERT INTO `form` (`name`, `email`, `subject`, `message`) VALUES (\"$txtName\", \"$txtEmail\", \"$txtSubject\", \"$txtMessage\")";


$rs = mysqli_query($con, $sql);


if (!$rs) {
   die("Sorry, something went wrong " . mysqli_connect_error());
}
echo "Success";

?>
