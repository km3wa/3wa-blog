<?php
require_once('../Config/config.php');

require_once(ROOT . "/Model/Repository/ArticleRepository.php");
require_once(ROOT . "/Service/ArticleScoreCalculator.php");
require_once(ROOT . "/Service/ArticleLengthScoreCalculator.php");
require_once(ROOT . "/Service/PublicationAgeScoreCalculator.php");

$id = $_GET['id'];

if ($id) {
    $articleRepository = new ArticleRepository();
    $article = $articleRepository->findOne($id);

    $scoresCalculatorsClasses = [];
    $scoresCalculatorsClasses[] = new ArticleLengthScoreCalculator();
    $scoresCalculatorsClasses[] = new PublicationAgeScoreCalculator();

    $articleScoreCalculator = new ArticleScoreCalculator();
    $articleScore = $articleScoreCalculator->calculateScore($article, $scoresCalculatorsClasses);

    require_once(ROOT . '/View/articleView.php');
}