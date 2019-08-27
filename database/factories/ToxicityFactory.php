
<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Toxicity;
use Faker\Generator as Faker;

$factory->define(
    Toxicity::class,
    function (Faker $faker) {
        return [
            'main_group' => $faker-> randomElement(array('naturals', 'chemicals', 'phamaceuticals', 'other',)),
            'sub_group' => $faker-> randomElement(array('floras', 'faunas', 'microbials', 'fungals',)),
            'name' => 'toxicity name',
        ];
    }
);

$factory->state(
    Toxicity::class,
    'naturals',
    [
        'main_group' => 'naturals',
    ]
);

$factory->state(
    Toxicity::class,
    'chemicals',
    [
        'main_group' => 'chemicals',
    ]
);

$factory->state(
    Toxicity::class,
    'phamaceuticals',
    [
        'main_group' => 'phamaceuticals',
    ]
);

$factory->state(
    Toxicity::class,
    'other',
    [
        'main_group' => 'other',
    ]
);

$factory->state(
    Toxicity::class,
    'floras',
    function ($faker) {
        return
        [
            'sub_group' => 'floras',
            'name' => $faker-> randomElement(
                array(
                    'Aththana', 'Divikaduru','Diyakaduru',
                    'Endaru_Ingestion', 'Godakaduru','Habarala',
                    'Hondala', 'Endaru', 'Kaneru', 'Kepunkiriya', 'Niyagala'
                    )
            ),

        ];
    }
);

$factory->state(
    Toxicity::class,
    'faunas',
    function ($faker) {
        return
        [
            'sub_group' => 'faunas',
            'name' => $faker-> randomElement(
                array('Bee_Sting', 'Jellyfish',
                'Scorpion_Bite', 'Snake_Bite', 'Hornet_Sting',
                'Wasp_Sting', 'Black_Widow_Spider', 'Blister_Beetle',
                'Turtle_Fish', 'Centipede')
            ),
        ];
    }
);

$factory->state(
    Toxicity::class,
    'microbials',
    function ($faker) {
        return
        [
            'sub_group' => 'microbials',
            'name' => $faker-> randomElement(
                array('Botalism', 'Food Poisoning')
            ),
        ];
    }
);

$factory->state(
    Toxicity::class,
    'fungals',
    [
        'sub_group' => 'fungals',
        'name' => 'Mushroom',
    ]
);

