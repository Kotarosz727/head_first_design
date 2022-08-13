<?php
namespace sample;

use Traversable;
use ArrayIterator;
use sample\MenuItem;
use IteratorAggregate;

require_once 'MenuItem.php';

class CakeMenu implements IteratorAggregate
{
    private array $menus;

    CONST MENU1 = [
        'name' => 'PanCake',
        'price' => 1200,
        'description' => 'test'
    ];

    CONST MENU2 = [
        'name' => 'ChocolateCake',
        'price' => 1500,
        'description' => 'test2' 
    ];

    public function __construct()
    {
        $this->setAttributes();
        $this->setMenus();
    }

    public function setAttributes()
    {
        $this->menu1 = self::MENU1;
        $this->menu2 = self::MENU2;
    }

    public function setMenus(): void
    {
        $iterator = new ArrayIterator($this);

        while ($iterator->valid())
        {
            $this->menus[] = new MenuItem(
                $iterator->current()['name'],
                $iterator->current()['price'],
                $iterator->current()['description']
            );
            $iterator->next();
        }
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