<?php

require_once(__DIR__ . "/User.php");

$users = [
  [
    'id' => 1,
    'nome' => 'Dennis',
    'cognome' => 'Olimpio ',
    'provenienza' => 'Napoli',
    'eta' => 26,
    'email' => 'dennis@test.it',
    'descrizione' => 'studenti boolean, classe 14'
  ],
  [
    'id' => 2,
    'nome' => 'Jessica',
    'cognome' => 'piazza ',
    'provenienza' => 'Lecce',
    'eta' => 31,
    'email' => 'jessica@test.it',
    'descrizione' => ' Lorem ipsum dolor sit amet'
  ],
  [
    'id' => 3,
    'nome' => 'Sveva',
    'cognome' => 'Ferrari ',
    'provenienza' => 'Roma',
    'eta' => 77,
    'email' => 'sveva@test.it',
    'descrizione' => 'Lorem ipsum dolor sit amet'
  ],
  [
    'id' => 4,
    'nome' => 'Timoteo',
    'cognome' => 'Ferrari ',
    'provenienza' => 'Formia',
    'eta' => 23,
    'email' => 'teoteo@test.it',
    'descrizione' => 'Lorem ipsum dolor sit amet'
  ],

];

var_dump($users)

// $utente = new users


?>
