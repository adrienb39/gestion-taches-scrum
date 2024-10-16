<?php

namespace App\UserStory;

use App\Entity\User;
use Doctrine\ORM\EntityManager;

class CreateAccount
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        // L'entityManager est injecté par dépendance
        $this->entityManager = $entityManager;
    }

    // Cette méthode permettra d'exécuter la User Story
    public function execute(string $pseudo, string $email, string $password): User {
        // Vérifier que les données sont présentes
        // Si tel n'est pas le cas, lancer une exception

        // Vérifier si l'email est valide
        // Si tel n'est pas le cas, lancer une exception

        // Vérifier si le pseudo est entre 2 et 50 caractères
        // Si tel n'est pas le cas, lancer une exception

        // Vérifier si le mot de passe est sécurisé
        // Si tel n'est pas le cas, lancer une exception

        // Vérifier l'unicité de l'email
        // Si tel n'est pas le cas, lancer une exception

        // Insérer les données dans la base de données
        // 1. Hash le mot de passe
        $password = password_hash($password, PASSWORD_DEFAULT);

        // 2. Créer une instance de la classe User
        $user = new User();
        $user->setPseudo($pseudo);
        $user->setEmail($email);
        $user->setPassword($password);

        // 3. Persist l'instance en utilisant l'entityManager
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        // Envoi du mail de confirmation
        echo "Un mail de confirmation a été envoyé à l'utilisateur";

        return $user;
    }
}