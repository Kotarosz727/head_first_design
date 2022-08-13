<?php
// composit
namespace sample;

require_once 'MenuComponents.php';

class Menu extends MenuComponents
{
    // MenuComnentsが格納される(Menu,若しくはMunuItemが格納される)
    private array $components;

    public function __construct(
        private string $name,
        private string $description
    ){}

    public function add(MenuComponents $data)
    {
        $this->components[] = $data;
    }

    public function print()
    {
        echo $this->name. PHP_EOL;;
        echo $this->description. PHP_EOL;;

        foreach($this->components as $component)
        {
            $component->print(). PHP_EOL;;
        }
    }
}