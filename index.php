<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
        <?php

        $data = file_get_contents('dataFile.txt');

        $array = explode("\n", $data);

        foreach ($array as $line) {
            echo "<li>$line</li>";
        }
        ?>

        <hr>


        <form method="POST" action="system.php">

            <div>
                <label for="firstName">Vardas *</label>
                <input type="text" name="firstName" placeholder="Vardas" maxlength="20">
            </div>

            <div>
                <label for="lastName">Pavardė *</label>
                <input type="text" name="lastName" placeholder="Pavardė" maxlength="20">
            </div>


            <div>
                <label for="phone">Tel. numeris *</label>
                <input type="text" name="phone" placeholder="Tel. numeris" maxlength="30">
            </div>

            <div>
                <label for="address">Adresas *</label>
                <textarea type="text" name="address" placeholder="Adresas" maxlength="200"></textarea>
            </div>


            <div>

                <button type="submit" onsubmit="getDT();">Patvirtinti </button>

            </div>
    </header>

    </form>

</body>

</html>