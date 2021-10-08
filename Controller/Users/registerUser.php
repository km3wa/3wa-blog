<?php
require_once('../../Config/config.php');

require_once(ROOT . "/Model/Factory/UserFactory.php");
//require_once(ROOT . "/View/Legacy/registerUserView.php");
require_once(ROOT . "/Model/EntityManager.php");
require_once(ROOT . "/Service/PasswordHasherStrong.php");

if(!empty($_POST) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["pw"])){
    $userFactory = new UserFactory(new PasswordHasherStrong());
    $user = $userFactory->createUser($_POST["username"], $_POST["email"], $_POST["pw"]);

    $entityManager = new EntityManager();
    $entityManager->persistUser($user);
}

echo $twig->render('registerUser.html.twig');
