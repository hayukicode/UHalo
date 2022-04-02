<?php


namespace Core;


abstract class BaseController
{

    protected $view;
    protected $auth;
    private $view_path;
    private $layoutPath;
    private $titlepage = null;
    private $pageTitle = null;
    public function __construct()
    { 
        $this->view = new \stdClass(); 
    }

    protected function renderView($view, $layoutPath = null)
    {
        $this->view_path = $view;
        $this->layoutPath = $layoutPath;
        if ($layoutPath) {
            return $this->layout();
        } else {
            return $this->content_view();
        }
    }

    protected function content_view()
    {
        if (file_exists(__DIR__ . "/../app/views/{$this->view_path}.php")) {
            return  require_once __DIR__  . "/../app/views/{$this->view_path}.php";
        } else {
        }
    }

    protected function layout()
    {
        if (file_exists(__DIR__ . "/../app/views/{$this->layoutPath}.php")) {
            return  require_once __DIR__  . "/../app/views/{$this->layoutPath}.php";
        } else {
            echo 'O Caminho do Layout não existe.';
        }
    }

    protected function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }

    protected function getTitlePage($sep = null)
    {
        if ($sep && !is_null($this->pageTitle)) {
            return $this->pageTitle . ' ' . $sep . ' ';
        } else {
            return $this->pageTitle;
        }
    }


    public function forbiden()
    {
        return Redirects::route('/');
    }
}
