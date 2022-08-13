<?php
namespace sample;

require_once 'MenuComponents.php';
require_once 'Menu.php';
require_once 'MenuItem.php';

class Waitress
{
    public function printMenus(MenuComponents $menu)
    {
        $menu->print();
    }
}

$dinerMenu = new Menu(
    'Diner Menu',
    'This is Diner Menu'
);

$cafeMenu = new Menu(
    'Cafe Menu',
    'This is Cafe Menu'
);

$dinerMenu->add(new MenuItem(
    'Vegitable Soup',
    1500,
    'Best food ever!'
));

$dessertMenu = new Menu(
    'Dessert Menu in Diner Menu',
    'This is Dessert Menu in Diner Menu'
);

$dessertMenu->add(new MenuItem(
    'Chocolate Cake',
    960,
    'This is one of Dessert Menu'
));

$dinerMenu->add($dessertMenu);

$cafeMenu->add(new MenuItem(
    'Pan Cake',
    1000,
    'So Sweet'
));

$allMenus = new Menu(
    'All Menus',
    'This is All menus so far.'
);

$allMenus->add($dinerMenu);
$allMenus->add($cafeMenu);

$client = new Waitress;
$client->printMenus($allMenus);