<?php

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("Source\App");

$router->group(null);
$router->get("/", "Web:home");
$router->get("/{filter}", "Web:home");

$router->group("blog");
$router->get("/", "Web:blog");
$router->get("/{post_uri}", "Web:post");
$router->get("/categoria/{cat_uri}", "Web:category");

$router->group("contato");
$router->get("/", "Web:contact");
$router->post("/", "Web:contact");
$router->get("/{sector}", "Web:contact");

$router->group("admin");
$router->get("/", "Admin:home");

$router->group("ooops");
$router->get("/{erro}", "Web:error");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/ooops/" . $router->error());
}