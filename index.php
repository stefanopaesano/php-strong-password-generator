<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


<div class='container bg-primary'>
        <form action="" method="GET">
            <label class='text-light' for="lunghezza_password">crea la tua password sicura</label>
            <input type="number" id="lunghezza_password" name="lunghezza_password" required>
            <input type="submit" name="genera_password" value="Genera Password">
        </form>

        <?php
        include 'processa_form.php';
        ?>

</div>






</body>
</html>




