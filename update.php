<?php
include('./conn.php');
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
  
    if (!empty($name) && !empty($phone) && !empty($email) && !empty($pass)) {
        $sql = "update students
        SET student_name='$name', contact_info='$phone', email='$email',
        password='$pass'
        WHERE student_id='$id'";

      $stmt = $conn->prepare($sql);
      $stmt->execute();
      echo "<br>" . "Data updated success";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title> Fatma Ahmed Hashim </title>
  </head>
<body>

<h2>Welcome To Your School</h2>

<form action="<?php '_PHP_SELF' ?>" method="post">
  <label for="name">STUDENT NAME:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="phone">CONTACT INFO:</label><br>
  <input type="text" id="phone" name="phone"><br>
  <label for="email">EMAIL:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="password">PASSWORD:</label><br>
  <input type="text" id="password" name="password"><br><br>
  <input type="submit" name="update">
</form> 



</body>
</html>






