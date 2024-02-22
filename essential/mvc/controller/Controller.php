<?php

namespace controller;

use model\Data;
use view\View;

class Controller
{
    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function actionIndex()
    {
        $data = (new Data())->getData();
        return $this->view->render('index', ['data' => $data]);
    }
}