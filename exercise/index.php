<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_clr($clr){
    $this->color=$clr;
  }

  function get_clr() {
    return $this->color;
  }

}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$apple->set_clr('RED');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $apple->get_clr();
echo "<br>";
echo $banana->get_name();
?>