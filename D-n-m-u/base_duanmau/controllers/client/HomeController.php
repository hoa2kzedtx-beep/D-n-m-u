<?php
class HomeController
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new Product();
    }
    public function index()
    {
        $view = 'home';
        $top4Lastest = $this->productModel->top4Lastest();
        $top4View = $this->productModel->top4View();
        // var_dump($top4Lastest);
        require_once PATH_VIEW_MAIN_CLIENT;
    }
}