<?php

require 'vendor/autoload.php';

use Myproject\controllers\AnimalsController;
use Myproject\controllers\CarsController;
use Myproject\controllers\FishController;
use Myproject\models\Animals;
use Myproject\models\Fish;
use Myproject\models\Cars;
use Myproject\models\SmallAnimals;
use Myproject\Container;

class Database
{

}

$response = ''; //render('views/landing.view.php');
if (array_key_exists('page', $_GET)) {
    $requestedPage = $_GET['page'];

    $dependencies = [
        'model.animals' => new Animals(),
        'model.animals.small' => new SmallAnimals(),
        'model.cars' => new Cars(),
        'model.fish' => new Fish(),
        'resource.views' => __DIR__ . '/app/views/'
    ];

    $container = new Container($dependencies);

    $animals = new AnimalsController($container);
    $cars = new CarsController($container);
    $fish = new FishController($container);

    $pages = [
        'animals' => [$animals, 'animalsAction'],
        'small-animals' => [$animals, 'smallAnimalsAction'],
        'cars' => [$cars, 'carsAction'],
        'fish' => [$fish, 'fishAction'],

    ];

    if (array_key_exists($requestedPage, $pages)) {
        $response = call_user_func($pages[$requestedPage]);
    } else {
        //http_response_code(404);
        header('HTTP/1.1 404 Not Found');
    }
}

include __DIR__ . '/app/view.php';