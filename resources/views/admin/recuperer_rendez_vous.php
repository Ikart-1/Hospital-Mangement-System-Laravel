<?php
use Illuminate\Support\Facades\DB;

// récupérer_rendez_vous.php

// Établir la connexion à la base de données

// Effectuer la requête pour récupérer les rendez-vous
$appointments = DB::table('appointments')->get();

// Renvoyer les rendez-vous au format JSON
header('Content-Type: application/json');
echo json_encode($appointments);
?>
