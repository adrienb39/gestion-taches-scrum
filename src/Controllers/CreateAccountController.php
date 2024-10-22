<?php

namespace App\Controllers;

use App\UserStory\CreateAccount;
use Doctrine\ORM\EntityManager;

class CreateAccountController {
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pseudo = $_POST["pseudo_user"];
            $email = $_POST["email_user"];
            $password = $_POST["password_user"];

            try {
                $createAccount = new CreateAccount($this->entityManager);
                $user = $createAccount->execute($pseudo, $email, $password);
            } catch (\Exception $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }
        require __DIR__ ."/../../views/account/create.php";
    }
}