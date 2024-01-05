<?php

// autoload

require '../vendor/autoload.php';

use Controllers\AddPost;
use Controllers\AdminPage;
use Controllers\ArticleController;
use Controllers\EditPost;
use Controllers\Home;
use Controllers\PostsList;
use Controllers\Login;
use Controllers\Post;
use Controllers\Error;
use Controllers\Signup;
use Controllers\SignupController;
use Models\Article;

$action = $_GET['action'] ?? '';


switch ($action) {
    case '':
        $controller = new Home;
        $controller->home();
        break;
    case 'postsList':
        $controller = new PostsList;
        $controller->postsList();
        break;
    case 'login':
        $controller = new Login;
        $controller->login();
        break;
    case 'signup':
        $controller = new Signup;
        $controller->signup();
        break;
    case 'signup-submit':
        $controller = new SignupController;
        $controller->signupSubmit();
        break;
    case 'adminPage':
        $controller = new AdminPage;
        $controller->adminPage();
        break;
    case 'post':
        $controller = new Post;
        $controller->post();
        break;
    case 'editPost':
        $controller = new EditPost;
        $controller->editPost();
        break;
    case 'addPost':
        $controller = new ArticleController();
        $controller->addPost();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        $controller = new Error;
        $controller->error404();
        break;
}
