<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos données</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-light border rounded p-5">
    <h1>Vos données</h1>
    <ul>
        <li>Nom : <span class="fw-bold"><?= $firstName ?></span></li>
        <li>Prénom : <span class="fw-bold"><?= $lastName ?></span></li>
        <li>Email : <span class="fw-bold"><?= $email ?></span></li>
        <li>Téléphone : <span class="fw-bold"><?= $phone ?></span></li>
        <li>Sujet : <span class="fw-bold"><?= $subject ?></span></li>
        <li>Message : <span class="fw-bold"><?= $message ?></span></li>

    </ul>

    <h1 class="text-center mt-5">Merci ! </h1>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
