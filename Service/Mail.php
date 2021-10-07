<?php

trait Mail{
    function sendMail($email){
        mail($email, "Bienvenue à mon blog", "vous vous êtes inscrit !! bienvenue à 3wa-blog");
    }
};