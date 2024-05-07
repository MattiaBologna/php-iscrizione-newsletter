<?php

$email = $_POST['email'] ?? '';
var_dump($email)

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
    
    <main>

        <?php

            if (isset($_POST['email'])) {
                if (str_contains($email, '@') && (str_contains($email, '.'))) {
                    ?>
                        <p>La mail è valida</p>
                    <?php
                } else {
                    ?>
                        <p>La mail non è valida</p>
                    <?php
                }
            }

        ?>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>