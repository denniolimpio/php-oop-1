<?php
// creo la mia classe
class User {
  // definisco le variabili/ attributi
  public $id;
  public $nome;
  public $cognome;
  public $provenienza;
  public $eta;
  public $email;
  public $descrizione;


  public function __construct( $_id, $_nome, $_cognome, $_provenienza, $_eta, $_email, $_descrizione) {
    $this->id = $_id;
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->provenienza = $_provenienza;
    $this->eta = $_eta;
    $this->email = $_email;
    $this->descrizione = $_descrizione;
  }

  public function getUserData() {
    return [
      'id' => $this->id,
      'nome' => $this->nome,
      'cognome' => $this->cognome,
      'provenienza' => $this->provenienza,
      'eta' => $this->eta,
      'email' => $this->email,
      'descrizione' => $this->descrizione,
    ];
  }

}

?>
