<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

        <title>SQL PARTIE 3</title>

    </head>
    <body>

        <p class="H3 mt-3">Exercice 1 : ALTER TABLE `languages` ADD `versions` VARCHAR(50); </p>
        <p class="H3 mt-3">Exercice 2 : ALTER TABLE `frameworks` ADD `versions` INT;</p>
        <p class="H3 mt-3">Exercice 3 : ALTER TABLE `languages` CHANGE `versions` `version` VARCHAR(30);</p>
        <p class="H3 mt-3">Exercice 4 : ALTER TABLE `frameworks` CHANGE `name` `frameworks` VARCHAR(50);</p>
        <p class="H3 mt-3">Exercice 5 : ALTER TABLE `frameworks` MODIFY `versions` VARCHAR(10);</p>
        <p class="H3 mt-3">TP : USE `codex`; <br />
            ALTER TABLE `clients` DROP `secondePhoneNumber`; <br />
            ALTER TABLE `clients` CHANGE `firstPhoneNumber` `phoneNumber` VARCHAR(50); <br />
            ALTER TABLE `clients` MODIFY `phoneNumber` VARCHAR(50); <br />
            ALTER TABLE `clients` ADD `zipCode` VARCHAR(50); <br />
            ALTER TABLE `clients` ADD `city` VARCHAR(50);</p>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>