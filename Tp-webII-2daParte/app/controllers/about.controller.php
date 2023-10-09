<?php
require_once './app/models/about.model.php';
require_once './app/views/about.view.php';

class AboutController {
    private $model;
    private $view;

    public function __construct() {
        $this->view = new AboutView();
        $this->model = new AboutModel();
    } 

    public function showAbout() {
        $calendarios = $this->model->getAbouts();
        $this->view->showAbout($calendarios);
    }
}