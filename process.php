<?php
include_once 'Database.php';
// echo'hello';
// echo $_POST['email'];
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "insert into food (username, email, password) values('$name', '$email','$password' )";
    if(mysqli_query($conn, $sql))
{
    echo "Record is inserted into the Database";
}
else{
    echo "Error while inserting";
}
mysqli_close($conn);
}


?>