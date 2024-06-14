<?php

require_once __DIR__. '/vendor/autoload.php';

$faker=Faker\Factory::create();

echo $faker->name();

?>