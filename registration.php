<?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location : home.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>AgusaniStore</title>
  <link rel="icon" href="imgs/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/registration.css?v=<?php echo time(); ?>">
</head>

<body>
  <div class="container">
    <?php
    if (isset($_POST["submit"])) {
      $fullName = $_POST["fullname"];
      $userName = $_POST["username"];
      $email = $_POST["email"];
      $phoneNumber = $_POST["phonenumber"];
      $password = $_POST["password"];
      $passwordRepeat = $_POST["repeat_password"];
      $gender = $_POST["gender"];

      $passwordHash = password_hash($password, PASSWORD_DEFAULT);

      $errors = array();

      if (empty($fullName) or empty($userName) or empty($email) or empty($phoneNumber) or empty($password) or empty($passwordRepeat) or empty($gender)) {
        array_push($errors, "All fields are required");
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
      }
      if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
      }
      if ($password !== $passwordRepeat) {
        array_push($errors, "Password does not match");
      }
      require_once "database.php";
      $sql = "SELECT * FROM users WHERE email ='$email '";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if ($rowCount > 0) {
        array_push($errors, "Email already exist!");
      }
      if (count($errors) > 0) {
        foreach ($errors as $error) {
          echo "<div class='alert alert-danger'>$error</div>";
        }
      } else {
        $sql = "INSERT INTO users (full_name, username, email, phone_number, password, gender) VALUES(?, ?, ?, ?, ?, ?) ";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
          mysqli_stmt_bind_param($stmt, "ssssss", $fullName, $userName, $email, $phoneNumber, $passwordHash, $gender);
          mysqli_stmt_execute($stmt);
          echo "<div class='alert alert-success'>You're registered successfully.</div>";
        } else {
          die("Something went wrong");
        }
      }
    }


    ?>
    <div class="title">Registration</div>
    <form action="registration.php" method="post">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Full Name</span>
          <input type="text" name="fullname" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <span class="details">Username</span>
          <input type="text" name="username" placeholder="Enter your username" required>
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
          <span class="details">Phone Number</span>
          <input type="text" name="phonenumber" placeholder="Enter your number" required>
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="input-box">
          <span class="details">Confirm Password</span>
          <input type="text" name="repeat_password" placeholder="Confirm your password" required>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="submit">
        </div>
    </form>
  </div>
</body>