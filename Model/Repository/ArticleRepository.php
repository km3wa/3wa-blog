<?php
require_once(ROOT . './Model/Database/MysqlDatabaseConnection.php');
require_once(ROOT . './Model/Factory/articleFactory.php');
require_once(ROOT . './Model/Repository/PublicationRepository.php');

class articleRepository extends PublicationRepository
{
    private $articleFactory;

    public function __construct(){
        parent::__construct();
        $this->publicationType = "article";
        $this->articleFactory = new ArticleFactory;
    }

    public function findOne(int $id) : article{
        $articleDb = parent::fetchOne($id, $this->publicationType);
        return $this->articleFactory->makeArticleFromDb($articleDb);
    }

    // refacto en clean code
    public function findAll(): array
    {
        $articlesDb = parent::fetchAll($this->publicationType);        
        return $this->articleFactory->makeArticleListFromDb($articlesDb);
    }

    public function findLasts(int $nbarticles) : array{
        $articlesDb = parent::fetchLasts($nbarticles, $this->publicationType);
        return $this->articleFactory->makeArticleListFromDb($articlesDb);
    }

    /*public function deleteArticle (int $id){
        parent::deletePublication($id, $this->publicationType);
    }*/
    public function deleteArticle(Article $article)
    {
        parent::deletePublication($article);
    }
}
