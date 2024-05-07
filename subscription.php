<?php

session_start();

$email = $_SESSION['email'];

if ($password === null) {
    header('Location: ./index.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
</head>
<body>
    
<?php

if (isset($_POST['email'])) {
    if (emailIsValid($email)) {
        ?>
            <p class="alert-warning alert m-3" role="alert">La mail è valida</p>
        <?php
    } else {
        ?>
            <p class="alert-danger alert m-3" role="alert">La mail non è valida</p>
        <?php
    }

}     

?>

</body>
</html>