<?php
class Router{
    public static function routeRequest(): void{
        require_once('./Config/config.php');

        $toCut = "/20211004/3wa-blog";
        //$request = substr($_SERVER['REQUEST_URI'], strlen($toCut));
        $request = $_SERVER['REDIRECT_URL'];
        //$request = substr($_SERVER['REDIRECT_URL'], strlen($toCut));


        var_dump($request);
        die;

        switch($request){
            case '/':
                require_once(ROOT . './Controller/index.php');
                break;

                

            case '/article':
                require_once(ROOT . './Controller/Articles/article.php');
                break;

            case '/articles':
            case '/articlelist':
                require_once(ROOT . './Controller/Articles/articlelist.php');
                break;

            case '/createarticle':
                require_once(ROOT . './Controller/Articles/createArticle.php');
                break;

            case '/deletearticle':
                require_once(ROOT . './Controller/Articles/deleteArticle.php');
                break;



            case '/category':
                require_once(ROOT . './Controller/Categories/category.php');
                break;

            case '/categories':
            case '/categorylist':
                require_once(ROOT . './Controller/Categories/categorylist.php');
                break;

            case '/createcategory':
                require_once(ROOT . './Controller/Categories/createCategory.php');
                break;

            case '/deletecategory':
                require_once(ROOT . './Controller/Categories/deleteCategory.php');
                break;



            case '/connectuser':
                require_once(ROOT . './Controller/Users/connectUser.php');
                break;

            case '/registeruser':
                require_once(ROOT . './Controller/Users/registerUser.php');
                break;
        }

    }
}