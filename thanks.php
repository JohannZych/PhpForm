<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire
    if(empty($_POST['firstName']) || trim($_POST['firstName']) === ''){
        $errors[] = "Le prénom est obligatoire";}
    if(empty($_POST['lastName']) || trim($_POST['lastName']) === ''){
        $errors[] = "Le nom est obligatoire";}
    if(empty($_POST['email']) || trim($_POST['email']) === ''){
        $errors[] = "L'email est obligatoire";}
    if((filter_var(($_POST['email']),  FILTER_VALIDATE_EMAIL) === false)){
        $errors[] = "Le format de l'email n'est pas le bon";}
    if(empty($_POST['phone']) || trim($_POST['phone']) === ''){
        $errors[] = "Le numéro de téléphone est obligatoire";}
    if(empty($_POST['subject']) || trim($_POST['subject']) === ''){
        $errors[] = "Le sujet est obligatoire";}
    if(empty($_POST['message']) || trim($_POST['message']) === ''){
        $errors[] = "Le message est obligatoire'";}

    if(empty($errors)) {
        header('Location: thanks.php');
    }
}
?>

<?php // Affichage des éventuelles erreurs
if (count($errors) > 0) : ?>
    <div class="border border-danger rounded p-3 m-5 bg-danger">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bravo ! Vous êtes inscrit.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
<main class="container">
    <div class="text-center border rounded p-3 m-5">
        <h2>Vous êtes inscrit !</h2>
        <p>Merci <?= $_POST['firstName'] . " " .  $_POST['lastName'] ?> de nous avoir contacté à propos de " <?= $_POST['subject'] ?>".

            Un de nos conseiller vous contactera soit à l’adresse <?= $_POST['email'] ?> ou par téléphone au <?= $_POST['phone'] ?> dans les plus brefs délais pour traiter votre demande :

            <?= $_POST['message'] ?>.</p>
    </div>
</main>
</body>
</html>