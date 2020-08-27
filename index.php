<?php

require_once(__DIR__ . '/User.php');

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
    'cognome' => 'Esposito ',
    'provenienza' => 'Formia',
    'eta' => 23,
    'email' => 'teoteo@test.it',
    'descrizione' => 'Lorem ipsum dolor sit amet'
  ],

];



foreach ($users as $user_single) {

  $user = new User($user_single['id'], $user_single['nome'], $user_single['cognome'], $user_single['email'], $user_single['provenienza'], $user_single['eta'], $user_single['descrizione']);
  $data = $user->getUserData();

  ?>
  <div>
    <ul>
        <li> id: <?php  echo $data['id']; ?></li>
        <li> nome: <?php echo $data['nome']; ?></li>
        <li> cognome: <?php echo $data['cognome']; ?></li>
        <li> email: <?php echo $data['email']; ?></li>
        <li> provenienza: <?php echo $data['provenienza']; ?></li>
        <li> eta: <?php echo $data['eta']; ?> </li>
        <li> descrizione: <?php echo $data['descrizione']; ?></li>
    </ul>
  </div>
  <?php

}



?>
