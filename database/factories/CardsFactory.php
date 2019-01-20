<?php

use Faker\Generator as Faker;

function getTitle($faker) {
    //"Visa Infinite Сбербанк Первый"
    $type1 = ['Visa ', 'MasterCard '] ;
    $type2 = ['Infinite ', 'Gold ', 'Silver '] ;
    $type3 = ['Первый', 'Второй', 'Третий'] ;
    return $faker->randomElement($type1).$faker->randomElement($type2).'Сбербанк '.$faker->randomElement($type3) ;
}

function getDescription($faker) {
    $paragraphs = $faker->paragraphs($faker->numberBetween(1,4)) ;
    return join("\n", $paragraphs) ;
}

function getFakeDate($faker) {
    return $faker->dateTimeBetween('+1 years', '+5 years')->format('d-m-Y') ;
}

$factory->define(App\Card::class, function (Faker $faker) {
    $currencyArr = ["USD", "RUR", "EUR"] ;

    return [
        'currency' => $faker->randomElement($currencyArr),
        'cardNumber' => (string)$faker->unique()->randomNumber(4, true),
        "title" => getTitle($faker),
        'amount' => (string)$faker->numberBetween(1000,10000000),
        "description" => getDescription($faker),
        "dueDate" => getFakeDate($faker),
        "id" => $faker->uuid
    ];
});
