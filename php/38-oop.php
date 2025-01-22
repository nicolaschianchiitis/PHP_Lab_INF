<?php
class Persona {
  private $nome;
  private $cognome;
  
  public function __construct($nome, $cognome) {
    $this->nome = $nome;
    $this->cognome = $cognome;
  }
  public function setNome($n) {
	  $this->nome = $n;
  }
  public function setCognome($c) {
	  $this->cognome = $c;
  }
  protected function toString() {
    return "Sono ".get_class($this)."; mi chiamo {$this->cognome} {$this->nome}";
  }
}

class Studente extends Persona {
  private $classe;
  public function __construct($nome, $cognome, $classe) {
    parent::__construct($nome, $cognome);
	$this->classe = $classe;
  }
  public function setClasse($c) {
	  $this->classe = $c;
  }
  public function toString() {
	return parent::toString().  "; frequento la classe " . $this->classe;
  }
}

$studente1 = new Studente("Mario", "Draghi", "3ainf");
$studente1->setCognome("Bianchi");
$studente1->setClasse("5ainf");
echo $studente1->toString();
?>