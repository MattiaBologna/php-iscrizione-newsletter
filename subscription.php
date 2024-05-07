<?php

session_start();

include_once __DIR__ . '\utilities.php';


if ($_SESSION['email'] === null) {
    header('Location: ./index.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<?php

    if (emailIsValid($_SESSION['email'])) {
        ?>
            <p class="alert-warning alert m-3" role="alert">La mail è valida</p>
        <?php
    } else {
        ?>
            <p class="alert-danger alert m-3" role="alert">La mail non è valida</p>
        <?php
    }
    

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>