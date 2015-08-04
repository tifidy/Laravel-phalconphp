<?php

Assets::collection("header")
->addCss("public/assets/bootstrap/css/bootstrap.css")
//->addCss("public/assets/bootstrap/css/bootstrap.css")
;

Assets::collection("footer")
->addJs("public/assets/libs/jquery.min.js")
->addJs("public/assets/bootstrap/js/bootstrap.js");


\Blade::getEngine()->share("assets", $application->getDI()->get("assets"));



Route::add("/", [
	'namespace' => 'Resources',
	"controller" => "index",
	"action" => "index"
]);

Route::add("/a", [
	'namespace' => 'Resources',
	"controller" => "index",
	"action" => "a"
])->setName("abc");;

Route::add("/b", [
	'namespace' => 'Resources',
	"controller" => "index",
	"action" => "b"
]);

Route::add("/b", [
	'namespace' => 'Resources',
	"controller" => "index",
	"action" => "b"
]);


Route::addPost("/", [
	'namespace' => 'Controllers',
	"controller" => "Login",
	"action" => "postLogin"
]);






Route::notFound(array(
	"namespace" => "Controllers",
    "controller" => "Error",
    "action"     => "route404"
));
