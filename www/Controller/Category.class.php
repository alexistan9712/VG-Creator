<?php

namespace App\Controller;

use App\Model\Category as CategoryModel;
use App\Core\CleanWords;
use App\Core\FlashMessage;
use App\Core\Security;
use App\Core\Sql;
use App\Core\Verificator;
use App\Core\View;
use App\Core\PaginatedQuery;
use App\Model\User as UserModel;
use App\Core\QueryBuilder;
use App\Core\Handler;


class Category
{

    public function show()
    {
        $category = new CategoryModel();
        $categories = $category->getCategoriesBySite($_SESSION['id_site']);
        $view = new View("categories", "back");
        $view->assign("categories", $categories);
    }

    public function createCategory()
    {
        var_dump($_SESSION);
        // var_dump($_POST);
        // $result = Verificator::checkForm($category->getAddCategorieFrom(), $_POST);

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (!empty($_POST) && Security::checkCsrfToken($_POST['csrf_token'])) {
            unset($_POST['csrf_token']);

            $category = new CategoryModel();
            if($category->isUniqueCategory($_POST['name'])){
                header("Location: /dashboard/categories");
                return;
            }
            $category->setName($_POST['name']);
            $category->setIdSite($_SESSION['id_site']);
            $category->save();
            var_dump($_POST);

            // $category = new CategoryModel($_POST['name'],$_SESSION['id_site'] );
            // var_dump($category->save());
            header("Location: /dashboard/categories");
        } 
    }


    public function editCategory()
    {
        $category = new CategoryModel();
        $view = new View("categories", "back");
        $view->assign("categories", $category);

        $category->setId($_POST['id']);
        $category->setName($_POST['name']);
        $category->setIdSite($_POST['id_site']);
        $category->save();
    }

    public function deleteCategory($id)
    {
        parse_str(file_get_contents('php://input'), $_DELETE);
        var_dump($_DELETE);
        $category = new CategoryModel();
        $category = $category->getCategoryById($id);
        $category->delete();
        FlashMessage::setFlash("success", "La catégorie " . $category->getName() . " a été supprimée");
        header("Refresh: 3; /dashboard/categories");
    }
}