// index.php file  
include_once("controller/Controller.php");  

$controller = new Controller();  
$controller->invoke();  

include_once("model/Model.php");
class Controller {
public $model;

public function __construct()
{
$this->model = new Model();
}

public function invoke()
{
if (!isset($_GET['book']))
{
// no special book is requested, we'll show a list of all available books
$books = $this->model->getBookList();
include 'view/booklist.php';
}
else
{
// show the requested book
$book = $this->model->getBook($_GET['book']);
include 'view/viewbook.php';
}
}
}
<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

$url = $_GET['url'];

require_once(ROOT . DS . 'library' . DS . 'bootstrap.php');
