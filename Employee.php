<?php

//extends User. La classe Employee eredita tutte le caratteristiche della classe Users
  class Employee extends User {

    public $sconto = 0;

    public function setSconto() {

      if($this->eta > 65) {
        $this->sconto = 40 ;
      }
    }

  }

 ?>
