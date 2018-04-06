<?php
use Tester\Assert;
use App\Model\test;


require __DIR__ . '/../vendor/autoload.php';       # při instalaci Composerem

Tester\Environment::setup();
Assert::true(true);