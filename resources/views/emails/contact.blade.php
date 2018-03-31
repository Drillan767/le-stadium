<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>Nouveau contact depuis le site !</h2>
    <ul>
        <li><strong>Nom</strong> : {{ $contact['contact_name'] }}</li>
        <li><strong>Email</strong> : {{ $contact['contact_email'] }}</li>
        <li><strong>Objet</strong> : {{ $contact['email'] }}</li>
        <li><strong>Message</strong> : {{ $contact['message'] }}</li>
    </ul>
</body>
</html>