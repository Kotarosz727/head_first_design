<?php
namespace sample;

use Traversable;
use ArrayIterator;
use IteratorAggregate;

require_once 'MenuItem.php';

class DinerMenu implements IteratorAggregate
{
    private array $menus; 

    public function __construct()
    {
        $this->setMenus('Tomato Curry', 1000, 'Hot');
    }

    public function setMenus(string $name, int $price, string $description): void
    {
        $this->menus[] = new MenuItem(
            $name,
            $price,
            $description
        );
    }

    public function getMenus(): array
    {
        return $this->menus;
    }

    public function getIterator(): Traversable 
    {
        return new ArrayIterator($this->menus);
    }
}