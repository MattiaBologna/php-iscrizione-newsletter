<?php

session_start();

$email = $_POST['email'] ?? '';

include_once __DIR__ . '\utilities.php';

if (isset($_POST['email'])) {

    $_SESSION['email'] = $email;

    // redirect
    header('Location: ./subscription.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="app" class="d-flex flex-column vh-100">

        <?php include __DIR__ . '/partials/header.php'; ?>
        
        <main class="flex-grow-1">

            <section>
                <div class="container py-5">
                    <div class="row">
                        <form action="" method="POST">
                            <p>
                                <label for="email">Email:</label>
                                <input type="text" name="email" placeholder="Insert email...">
                            </p>
                        </form>
                    </div>
                </div>
            </section>

        </main>

        <?php include __DIR__ . '/partials/footer.php'; ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>