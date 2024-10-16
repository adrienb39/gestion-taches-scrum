<?php

use App\Entity\User;
use App\UserStory\CreateAccount;

/**
 * @var Doctrine\ORM\EntityManager $entityManager
 */
$entityManager = require_once __DIR__.'/../config/bootstrap.php';
require_once __DIR__.'/../vendor/autoload.php';

$user = new CreateAccount($entityManager);
$user->execute("test", "oezmshfmeh564@hzeiuhf.com", "jtroigmdfgjhioerlmhsg554848A");
$user = $entityManager->getRepository(User::class)->findAll();