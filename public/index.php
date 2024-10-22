<?php

/**
 * @var Doctrine\ORM\EntityManager $entityManager
 */
$entityManager = require_once __DIR__.'/../config/bootstrap.php';
require_once __DIR__.'/../vendor/autoload.php';

$route = $_GET["route"] ?? 'accueil';

switch ($route) {
    case 'accueil':
        $accueilControlleur = new \App\Controllers\AccueilController;
        $accueilControlleur->accueil();
        break;
    case 'create-account':
        $accueilControlleur = new \App\Controllers\CreateAccountController($entityManager);
        $accueilControlleur->create();
        break;
    default:
        echo "Page non trouvée";
        break;
}