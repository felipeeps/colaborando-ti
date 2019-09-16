<?php

$fakerBr = Faker\Factory::create('pt_BR');

$factory->define(App\Categories::class, function ($faker) use ($fakerBr) {
    return [
        'name' => $fakerBr->name
    ];
});

$factory->define(App\Products::class, function ($faker) use ($fakerBr) {
    return [
        'name' => $fakerBr->name,
        'amount' => str_random(10),
        
    ];
});