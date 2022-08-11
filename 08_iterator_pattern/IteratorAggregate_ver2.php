<?php
class myData implements IteratorAggregate {
  public $property1 = "Public property one";
  public $property2 = "Public property two";
  public $property3 = "Public property three";

  public function __construct() {
      $this->property4 = "last property";
  }

  public function getIterator() {
      return new ArrayIterator($this);
  }
}

$obj = new myData;

// foreach($obj as $key => $value) {
//   var_dump($key, $value);
//   echo "\n";
// }

$iterator = $obj->getIterator();
$count = $iterator->count();
echo $count. PHP_EOL;

while($iterator->valid()) {
  echo $iterator->key() . ' => ' . $iterator->current() . "\n";

  $iterator->next();
}