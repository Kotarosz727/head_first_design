<?php
class Example implements \IteratorAggregate
{
  protected $data = [];

  public function __construct(array $data)
  {
    $this->data = $data;
  }

  public function getIterator()
  {
    yield from $this->data;
  }
}

$test = new Example([1, 2, 3]);

foreach ($test as $node) {
  echo $node, PHP_EOL;
}

