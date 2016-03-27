<?php
use \Phalcon\Mvc\Router;
		$router = new Router();
        $router->add("/{categoryalias}", "Index::index");
        $router->add("/{categoryalias}/{newsalias}", "Index::detail");
        //

        //
        $router->add("/admin", "Admin::index");
        $router->add("/admin/", "Admin::index");
        $router->add("/admin/index", "Admin::index");
        $router->add("/admin/import", "Admin::import");
        $router->add("/admin/import/", "Admin::import");
        //
        $router->add("/dashboard", "Dashboard::index");
        $router->add("/dashboard/", "Dashboard::index");
        $router->add("/dashboard/index", "Dashboard::index");
        $router->add("/dashboard/add", "Dashboard::add");
        $router->add("/dashboard/add/", "Dashboard::add");
        $router->add("/dashboard/update", "Dashboard::update");
        $router->add("/dashboard/update/", "Dashboard::update");
        //
        $router->add("/advertise", "Advertise::index");
        $router->add("/advertise/", "Advertise::index");
        $router->add("/advertise/index", "Advertise::index");
        $router->add("/advertise/add", "Advertise::add");
        $router->add("/advertise/add/", "Advertise::add");
        $router->add("/advertise/update", "Advertise::update");
        $router->add("/advertise/update/", "Advertise::update");
        //
        $router->add("/category", "Category::index");
        $router->add("/category/", "Category::index");
        $router->add("/category/index", "Category::index");
        $router->add("/category/add", "Category::add");
        $router->add("/category/add/", "Category::add");
        $router->add("/category/update", "Category::update");
        $router->add("/category/update/", "Category::update");
        //
        $router->add("/feedback", "Feedback::index");
        $router->add("/feedback/", "Feedback::index");
        $router->add("/feedback/index", "Feedback::index");
        $router->add("/feedback/add", "Feedback::add");
        $router->add("/feedback/add/", "Feedback::add");
        $router->add("/feedback/update", "Feedback::update");
        $router->add("/feedback/update/", "Feedback::update");
        //
        $router->add("/news", "News::index");
        $router->add("/news/", "News::index");
        $router->add("/news/index", "News::index");
        $router->add("/news/add", "News::add");
        $router->add("/news/add/", "News::add");
        $router->add("/news/update", "News::update");
        $router->add("/news/update/", "News::update");
        //
        $router->add("/user", "User::index");
        $router->add("/user/", "User::index");
        $router->add("/user/index", "User::index");
        $router->add("/user/add", "User::add");
        $router->add("/user/add/", "User::add");
        $router->add("/user/update", "User::update");
        $router->add("/user/update/", "User::update");
        //
        $router->add("/", "Index::index");
        $router->add("/admin/logout", "Admin::logout");
        $router->add("/admin/logout/", "Admin::logout");


        //$router->setDefaults( array('controller' => 'index','action' => 'index'));