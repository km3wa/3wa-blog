<?php

require_once(ROOT . "/Model/Entity/Article.php");

class PublicationAgeScoreCalculator{
    function calculateScore(Article $article) : float{
        $articleScore = 0;
        
        $articleDate = $article->getCreatedAt();
        $dateNow = new \DateTime('NOW');

        $daysSincePublication = $dateNow->diff($articleDate)->format("%a");

        if ($daysSincePublication < 2) {
            $articleScore += 3;
        } elseif ($daysSincePublication < 5 &&
            $daysSincePublication > 2
        ) {
            $articleScore += 2;
        } elseif ($daysSincePublication < 7 &&
            $daysSincePublication > 5
        ) {
            $articleScore += 1;
        }

        return $articleScore;
    }
}
