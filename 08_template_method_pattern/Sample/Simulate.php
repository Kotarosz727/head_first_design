<?php
namespace Sample;

require_once 'Tea.php';

$tea = new Tea();
$bool = true;
$tea->wantsCondimentsHook($bool);
$tea->prepare();