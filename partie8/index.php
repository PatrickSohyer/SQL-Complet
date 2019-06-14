<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

        <title>SQL PARTIE 8</title>

    </head>
    <body>

        <p class="H3 mt-3">Exercice 1 : SELECT * FROM `frameworks` RIGHT JOIN `languages` ON `frameworks`.`languagesId` = `languages`.`id`;</p>
        <p class="H3 mt-3">Exercice 2 : SELECT * FROM `frameworks` LEFT JOIN `languages` ON `frameworks`.`languagesId` = `languages`.`id`;</p>
        <p class="H3 mt-3">Exercice 3 : SELECT `languages`.`name`, COUNT(`frameworks`.`id`) FROM `languages` INNER JOIN `frameworks` ON `frameworks`.`languagesId` = `languages`.`id` GROUP BY `languages`.`name`;</p>
        <p class="H3 mt-3">Exercice 4 : SELECT `l`.`name`, COUNT(`f`.`id`) AS 'nb' FROM `languages` AS `l` INNER JOIN `frameworks` AS `f` ON `f`.`languagesId` = `l`.`id` GROUP BY `l`.`name` HAVING 'nb' > 3;</p>
<!--        Je sélectionne la colonne name dans la table languages, je compte les id dans la colonne ID de la table frameworks, je sélectionne ma table languages, je join la table frameworks, ON fait la vérification ( languagesID = ID ), GROUP BY permet de regrouper les résultats, HAVING  similaire à WHERE à la différence que HAVING permet de filtrer en utilisant des fonctions telles que SUM(), COUNT(), AVG(), MIN() ou MAX().  -->


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>