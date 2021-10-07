<?php

require_once(ROOT . "/Model/Entity/Article.php");

class ArticleScoreCalculator
{
    public function calculateScore(Article $article, array $articleScoresCalculators): float
    {
        $articleScore = 0;

        foreach($articleScoresCalculators as $articleScoreCalculator) {
            $articleScore += $articleScoreCalculator->calculateScore($article);
        }

        return $articleScore / count($articleScoresCalculators);
    }
}

