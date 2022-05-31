<?php

namespace App\Controller;

use App\Core\View;
use App\Core\Sql;
class Main {

    public function home()
    {
        $view = new View("front_website");
    }

    public function template()
    {
        
        $view = new View("front_template");
    }

    public function initContent(){
        $view = new View("front_template");
        $url_parse = explode("/", $_GET['url']);
        $author = $url_parse[0];
        $site_title = $url_parse[1];

        $find_author = $this->findAuthorByName($author);
        if (!isset($find_author)) {
            //$view->render("404");
            header("Location: /404");
        }

        var_dump($author);
    }

    public function findAuthorByName($author){
        $builder = BUILDER;
        $queryBuilder = new $builder();
        $request = $queryBuilder
            ->select('esgi_sites', ['id'])
            ->where('name', $author)
            ->getQuery();
        $result = Sql::getInstance()->query($request)->fetchAll();
        return $result;
    }



}