<?php
  /* dimostrazione di come trasformare in php una stringa contenente array JSon ($filmsJson) in array associativo json_encode() 
    oppure al contario da $filmsArray in JSon
  */ 
  // Stringa che contiene un dato array json
  $filmsJson = '[  
  {
    "Codice": 1,
    "Titolo": "Dunkirk",
    "Regista": "Nolan",
    "Anno": "2019",
    "Durata": 92,
    "Img": "https://images-na.ssl-images-amazon.com/images/I/81781%2BYmMoL._SY445_.jpg"
  },
  {
    "Codice": 2,
    "Titolo": "L\'età giovane",
    "Regista": "Dardenne",
    "Anno": "2020",
    "Durata": 95,
    "Img": "https://images-na.ssl-images-amazon.com/images/I/71XC8DYfO6L._SY445_.jpg"
  },
  {
    "Codice": 3,
    "Titolo": "TeneT",
    "Regista": "Nolan",
    "Anno": "2020",
    "Durata": 90,
    "Img": "https://images-na.ssl-images-amazon.com/images/I/71lg0x8oqTL._SY445_.jpg"
  },
  {
    "Codice": 4,
    "Titolo": "Il ponte delle spie",
    "Regista": "Spielberg",
    "Anno": "2016",
    "Durata": 102,
    "Img": "https://images-na.ssl-images-amazon.com/images/I/71ylhqePG4L._SY445_.jpg"
  },
  {
    "Codice": 5,
    "Titolo": "Jojo Rabbit",
    "Regista": "Waititi",
    "Anno": "2020",
    "Durata": 88,
    "Img": "https://images-na.ssl-images-amazon.com/images/I/81Uo8zyGdUL._SY445_.jpg"
  }]';

  // array associativo come fosse una risposta da una query sql
  $filmsArray = [  
  [
    "Codice" => 1,
    "Titolo" => "Dunkirk",
    "Regista" => "Nolan",
    "Anno" => "2019",
    "Durata" => 92,
    "Img" => "https://images-na.ssl-images-amazon.com/images/I/81781%2BYmMoL._SY445_.jpg"
  ],
  [
    "Codice" => 2,
    "Titolo" => "L\'età giovane",
    "Regista" => "Dardenne",
    "Anno" => "2020",
    "Durata" => 95,
    "Img" => "https://images-na.ssl-images-amazon.com/images/I/71XC8DYfO6L._SY445_.jpg"
  ],
  [
    "Codice" => 3,
    "Titolo" => "TeneT",
    "Regista" => "Nolan",
    "Anno" => "2020",
    "Durata" => 90,
    "Img" => "https://images-na.ssl-images-amazon.com/images/I/71lg0x8oqTL._SY445_.jpg"
  ],
  [
    "Codice" => 4,
    "Titolo" => "Il ponte delle spie",
    "Regista" => "Spielberg",
    "Anno" => "2016",
    "Durata" => 102,
    "Img" => "https://images-na.ssl-images-amazon.com/images/I/71ylhqePG4L._SY445_.jpg"
  ],
  [
    "Codice" => 5,
    "Titolo" => "Jojo Rabbit",
    "Regista" => "Waititi",
    "Anno" => "2020",
    "Durata" => 88,
    "Img" => "https://images-na.ssl-images-amazon.com/images/I/81Uo8zyGdUL._SY445_.jpg"
  ]];

  $lista = json_decode($filmsJson, true);  // converte in array
    
  echo "<h2>Elenco film</h2>";
  echo "<TABLE>";
  foreach($filmsArray as $film) {
	  echo "<TR>".
      "<TD>".$film["Codice"]."</TD>".
      "<TD>".$film["Titolo"]."</TD>".
      "<TD>".$film["Regista"]."</TD>".
      "<TD>".$film["Anno"]."</TD>".
      "<TD>".$film["Durata"]."</TD>".
      "<TD>"."<img src='".$film["Img"]."'width=80></TD>".
      "</TR>";
  }
  echo "</TABLE>";

  echo "<br/>".json_encode($filmsArray, true); // converte in JSon eventualmente per inviarlo ad una richiesta di un client
?>