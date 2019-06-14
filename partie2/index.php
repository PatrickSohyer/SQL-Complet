<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

        <title>SQL PARTIE 2</title>

    </head>
    <body>

        <p class="H3 mt-3">Exercice 1 : USE `webDevelopment`; <br />
            CREATE TABLE `languages`(`id` INT PRIMARY KEY AUTO_INCREMENT,`languages` VARCHAR(40));</p>
        <p class="H3 mt-3">Exercice 2 : CREATE TABLE `tools`(̀ id` INT PRIMARY KEY AUTO_INCREMENT, `tools` VARCHAR(50));</p>
        <p class="H3 mt-3">Exercice 3 : CREATE TABLE `frameworks`(`id` INT PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(50));</p>
        <p class="H3 mt-3">Exercice 4 : CREATE TABLE `libraries`(`id` INT PRIMARY KEY AUTO_INCREMENT, `library` VARCHAR(50));</p>
        <p class="H3 mt-3">Exercice 5 : CREATE TABLE `ide`(`id` INT PRIMARY KEY AUTO_INCREMENT, `ideName` VARCHAR(50));</p>
        <p class="H3 mt-3">Exercice 6 : CREATE TABLE IF NOT EXISTS `frameworks`(`id` INT PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(50));</p>
        <p class="H3 mt-3">Exercice 7 : DROP TABLE IF EXISTS `tools`;</p>
        <p class="H3 mt-3">Exercice 8 : DROP TABLE `libraries`;</p>
        <p class="H3 mt-3">Exercice 9 : DROP TABLE `ide`;</p>
        <p class="H3 mt-3">TP : CREATE DATABASE `codex`; <br />
        CREATE TABLE `clients`(`id` INT PRIMARY KEY AUTO_INCREMENT, `lastname` VARCHAR(40), `firstname` VARCHAR(40), `birthdate` DATE, `address` VARCHAR(50), `firstPhoneNumber` INT, `secondePhoneNumber` INT, `mail` VARCHAR(50));</p>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>