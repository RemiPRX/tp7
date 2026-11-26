<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Méthode non autorisée";
    return;
}

$nom = trim($_POST["nom"] ?? "");
$type = $_POST["type"] ?? "";
$memoireTexte = $_POST["memoire"] ?? "";
$actif = isset($_POST["actif"]);
$erreurs = [];
$typesAutorises = ["serveur", "poste", "reseau"];

if ($nom === "") {
    $erreurs[] = "Le nom est obligatoire.";
}
if (!in_array($type, $typesAutorises, true)) {
    $erreurs[] = "Le type est invalide.";
}

$memoire = filter_var($memoireTexte, FILTER_VALIDATE_INT);
if ($memoire === false || $memoire < 1 || $memoire > 1024) {
    $erreurs[] = "La mémoire doit être un entier entre 1 et 1024.";
}

if (count($erreurs) > 0) {
    echo "<ul>";
    foreach ($erreurs as $erreur) {
        echo "<li>" . htmlspecialchars($erreur) . "</li>";
    }
    echo "</ul>";
    return;
}