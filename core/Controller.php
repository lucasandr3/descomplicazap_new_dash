<?php
namespace Core;

use Support\Authenticate;

class Controller {

	public function view($viewName, $viewData = array()) {
		extract($viewData);
		require 'themes/theme'.THEME.'/'.$viewName.'.php';
	}

	public function render($viewName, $viewData = array()) {
		 require 'themes/layout'.LAYOUT.'/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'themes/theme'.THEME.'/'.$viewName.'.php';
	}

    public function redirect($route, $message = null)
    {
        header("Location: ".$_ENV['APP_URL'].$route);
    }

    public function request()
    {
        $request = ['request' => (object)$_REQUEST];
        $user = ['usuario' => (object)Authenticate::getUser()];

        $obj_merged = (object)array_merge((array)$request, (array)$user);

        return $obj_merged;
    }

    public function reqGet()
    {
        return $obj = (object)$_GET; //change array to stdClass object
    }

}