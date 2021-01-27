<?php

// Intervalles de caractères : 
// [a-z]    : j'autorise tout l'alphabet en minuscules
// [A-Z]    : j'autorise tout l'alphabet en majuscules
// [0-9]    : j'autorise tout les chiffres
// [a-zA-Z] : j'autorise tout l'alphabet minuscules et majuscules

// Répétitions :
// {2,5} : 2, 3, 4 ou 5 caractères autorisés
// {3,}  : 3 vers l'infini
// ?     : 0 ou 1 fois
// +     : 1 vers l'infini
// *     : 0 ou 1 ou vers l'infini

// Le symbole ou : |

// Les caractères spéciaux
// pour les utiliser, il faut les échappé avec un \.

// Délimiter le début et la fin du pattern :
// ^ : début du champ
// $ : fin du champ

function verifInput("email", $email, $message) {}

// Exemple 1 (pattern âge) :
if (!preg_match("#^[0-9]{1,2}$#", $_POST['age'])) {
	echo "Format invalide";
}

// Exemple 2 (pattern code postal) :
if (!preg_match("#^[0-9]{5}|2A[0-9]{3}|2B[0-9]{3}$#", $_POST['cp'])) {
	echo "Format invalide";
}

// Exemple 3 (pattern code postal raccourci) :
if (!preg_match("#^[0-9]{5}|2[A-B][0-9]{3}$#", $_POST['cp'])) {
	echo "Format invalide";
}

// Exemple 4 (pattern adresse email) : 
if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$#", $_POST['email'])) {
	echo "Format invalide";
}

// Exemple 5 (pattern numéro de téléphone) : 
if (!preg_match(("#^[0-9]{2}[. -]?){3}[0-9]{2}$#", $_POST['tel'])) {
	echo "Format invalide";
}

// Exemple 6 (pattern mot de passe) : 
if (!preg_match("#^[a-z]{2}[A-Z]{2}[0-9]{2}[.@?]$#", $_POST['mdp'])) {
	echo "Format invalide";
}



?>