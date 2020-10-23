<?php

namespace ishop\base;

abstract class Controller {

    public $route;
    public $model;
    public $view;
    public $controller;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = ['title' => '', 'description' => '', 'keywords' => ''];

    public function __construct( $route ) {

        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
    }

    public function getView() {
        $viewJbject = new View( $this->route, $this->layout, $this->view, $this->meta );
        $viewJbject->render( $this->data );
    }

    public function set( $data ) {
        $this->data = $data;
    }

    public function setMeta( $title = '', $description = '', $keywords = '' ) {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;
    }
}