<?php

require_once 'test.php';
if(isset($_GET['name'])){

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokemon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Pokemon</h1>

<div>
    <div style="width: 100%;">
        <form action="index.php"style="width: 35%" method="GET">

            <label for="name">Name Pokemon</label>
            <input type="text" id="name" name="name" placeholder="Name Pokemon ...">

            <input type="submit" value="Submit" style="width: 20%">
        </form>
    </div>
</div>

<table style="border-top: black solid 1px">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
    </tr>
    <?php
    foreach ($pokemons as $pokemon) {
        ?>
        <tr>
            <td><?= $pokemon->getId() ?></td>
            <td><?= $pokemon->getName() ?></td>
            <td><img src="<?= $pokemon->getImage() ?>" width="70"</td>
        </tr>
        <?php
    }
    ?>


</table>
</body>
</html>