<?php
class note{
  public $id;
  public $text;

  public function __construct($id,$text,$color){
    $this -> id = $id;
    $this -> text = $text;
    $this -> color = $color;
  }
};

$addNote = isset($_GET['add-note']);

$notes = [
  new note(1,'El servicio de Google, que se ofrece sin coste económico.','red'),
  new note(2,'Ciao mondo','blue'),
  new note(3,'Traduce texto y archivos completos de manera instantánea. Traducciones precisas para particulares (un solo usuario) y equipos de trabajo.','green'),
  new note(4,'El traductor más avanzado del mundo en inglés.','yellow'),
  new note(5,'Ciao mondo','blue'),
  new note(3,'Traduce texto y archivos completos de manera instantánea. Traducciones precisas para particulares (un solo usuario) y equipos de trabajo.','green'),
  new note(4,'El traductor más avanzado del mundo en inglés.','yellow'),
  new note(5,'Ciao mondo','blue'),
  new note(3,'Traduce texto y archivos completos de manera instantánea. Traducciones precisas para particulares (un solo usuario) y equipos de trabajo.','green'),
  new note(4,'El traductor más avanzado del mundo en inglés.','yellow'),
  new note(5,'Ciao mondo','blue'),  new note(1,'El servicio de Google, que se ofrece sin coste económico.','red'),
  new note(2,'Ciao mondo','blue'),
  new note(3,'Traduce texto y archivos completos de manera instantánea. Traducciones precisas para particulares (un solo usuario) y equipos de trabajo.','green'),
  new note(4,'El traductor más avanzado del mundo en inglés.','yellow')
];

?>