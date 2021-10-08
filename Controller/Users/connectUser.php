<?php
require_once('../../Config/config.php');

require_once(ROOT . "/Model/Repository/UserRepository.php");
//require_once(ROOT . "/View/Legacy/connectUserView.php");
require_once(ROOT . "/Service/PasswordHasherStrong.php");


if(!empty($_POST) && !empty($_POST["username"]) && !empty($_POST["pw"])){
    $userRepo = new UserRepository();
    if($userRepo->find($_POST["username"], $_POST["pw"])){
        echo('<h2>identifiants corrects !</h2>'); // affichage dans le controller parce que je suis fatigué
    } else echo('<h2>identifiants incorrects.</h2>');
};

echo $twig->render('connectUser.html.twig');