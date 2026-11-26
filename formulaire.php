<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Nouvel équipement</title>
</head>
<body>
    <form action="traitement.php" method="post">
        <label for="nom">Nom :</label>
        <input id="nom" name="nom" type="text" required>
        <label for="type">Type :</label>
        <select id="type" name="type" required>
            <option value="">Choisir</option>
            <option value="serveur">Serveur</option>
            <option value="poste">Poste</option>
            <option value="reseau">Réseau</option>
        </select>
        <label for="memoire">Mémoire (Go) :</label>
        <input id="memoire" name="memoire" type="number" min="1" max="1024" required>
        <label>
            <input name="actif" type="checkbox" value="1">
            Équipement actif
        </label>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>