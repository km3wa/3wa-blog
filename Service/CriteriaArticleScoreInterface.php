<?php
interface CriteriaArticleScoreInterface{
    public function calculateScore(Article $article) : float;
}