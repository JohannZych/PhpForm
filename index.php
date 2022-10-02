<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<form action="/form.php" method="post" class="container bg-light border rounded p-5">
    <h1 class="text-center">Votre formulaire</h1>

    <p class="row">
        <label for="lastName" class="form-label">Nom : </label>
        <input type="text" name="lastName" id="lastName" class="form-control">
    </p>

    <p class="row">
        <label for="firstName" class="form-label">Prénom : </label>
        <input type="text" name="firstName" id="firstName" class="form-control">
    </p>

    <p class="row">
        <label for="email" class="form-label">Email : </label>
        <input type="mail" name="email" id="email" class="form-control">
    </p>

    <p class="row">
        <label for="phone" class="form-label">Téléphone : </label>
        <input type="tel" name="phone" id="phone" class="form-control">
    </p>

    <p class="row">
        <label for="subject" class="form-label">Sujet : </label>
        <select name="subject" id="subject">
            <option value="">Votre choix</option>
            <option value="On en a gros">On en a gros !</option>
            <option value="Le gras c'est la vie">Le gras c'est la vie !</option>
            <option value="Semi-croustillant">Semi-croustillant</option>
        </select>
    </p>

    <p class="row">
        <label for="message" class="form-label">Message : </label>
        <textarea id="message" name="message" rows="5" cols="33">Votre message</textarea>
    </p>

    <p class="text-center">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </p>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
