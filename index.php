<?php

class Film {
  public $titolo;
  public $anno;
  public $regista;

  public function __construct($titolo, $anno ,$regista){

    $this ->titolo =$titolo;
    $this ->anno =$anno;
    $this ->regista =$regista;
  }
}

$matrix = new Film('matrix', '2000', 'Lana Wachowski');
$titanic = new Film('titanic','1998','James Cameron');
$dune = new Film('dune','1965','Frank Pavich');


var_dump($matrix);
echo "</br>";
var_dump($titanic);
echo "</br>";
var_dump($dune);
echo "</br>";

echo "</br>";


class Libri {
  public $titolo;
  public $autore;
  public $anno;
  public $genere;

  public function __construct($titolo,$autore,$anno,$genere){
    $this ->titolo =$titolo;
    $this ->autore =$autore;
    $this ->anno =$anno;
    $this ->genere =$genere;
  }
}

$genteDiDublino  =new Libri('genteDiDublino','joyse','1906','narr');
$statiUniti =new Libri('statiUniti','Cartosio','2002','saggio');
$Inverno =new Libri('Inverno','smith','2021','narr');


var_dump($genteDiDublino);
echo "</br>";
var_dump($statiUniti);
echo "</br>";
var_dump($Inverno);
echo "</br>";



echo "</br>";


class Cioccolati {
  public $nome;
  public $tipo;
  public $gusto;
  public $lotto;
}

  public function __construct($nome,$tipo,$gusto,$lotto,){
    $this ->nome=$nome;
    $this ->tipo =$tpo;
    $this ->gusto =$gusto;
    $this ->lotto =$lotto;

  }
}

$gianduiotto  =new Cioccolati('$gianduiotto','latte','intenso','258');
$lucernotti =new Cioccolati('lucernotti','fondente','intenso','123');
$adocioc =new Cioccolati('adocioc','latte','intenso','458');


var_dump($gianduiotto);
echo "</br>";
var_dump($lucernotti);
echo "</br>";
var_dump($adocioc);
echo "</br>";
