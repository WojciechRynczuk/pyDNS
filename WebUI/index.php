<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Praktyki</title>
</head>
<body>
    <section class="main"><h1>Praktyki</h1></section>
    <section class="qwe">
        <form action="add.php" method="post">
            Nazwa domeny: <input type="text" name="domainname" id="text">
            <input type="reset" value="reset">
            <input type="submit" value="dodaj">
        </form>
        <br>
        <br>
        <br>
        <form action="delete.php" method="post">
            Nazwa pliku: <input type="text" name="plik" id="text">
            <input type="reset" value="reset">
            <input type="submit" value="usun">
        </form>
        
        <?php
        $katalog='/Applications/XAMPP/htdocs/plik/';

        foreach(scandir($katalog) as $file)
            if($file != '.' && $file != '..')
            echo $file . '<br />';

        ?>
    </section>
    <section class="footer">Pozdrawiam</section>
</body>
</html>