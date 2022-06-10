<?php
// includiamo il database
include __DIR__ . "/../database.php";
// stabiliamo che: SE il parametro genre (sarebbe il v-model) esiste utilizzare quel parametro ALTRIMENTI utilizzare null
// soluzione con isset (più professionale per effettuare un controllo in più con un ternario)
// $genre = isset($_GET["genre"]) ? $_GET['genre'] : null;
$genre = $_GET["genre"];
// stabiliamo l'array da passare all'API
$results = [];
// se la variabile genre esiste: per ogni item nel db SE item.genre è uguale al v-model allora PUSHA nell'array da passare all'API
if ($genre) {
  foreach ($database as $album) {
    if ($album['genre'] == $genre) {
      $results[] = $album;
    }
  }
// altrimenti passeremo il db non filtrato
} else {
  $results = $database;
}

header("Content-Type: application/json");
// inviamo l'array in formato json all'API
echo json_encode($results);
