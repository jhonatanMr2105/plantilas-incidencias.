<?php

use test\Mockery\TestIncreasedVisibilityParent;

Route::get('/', function () {
    return view('welcome');
});

//post
//

route::get('about', function () { // route get sirve par definir funciones
   // $empresa = "Miskilingo"; //lo que se quiere que aparecera en pantalla
    // return view('about',['empresa' => $empresa]); // con esta linea aparecesa en pantalla el msj asignado al abrirla
    return view('about');
});

route::get('acercade',function(){
    //$empresa = " Miskito";
    //return view('acercade',['empresa' => $empresa]);
    return view('acercade');
});

route::get('blogmiskito',function(){
    //$empresa = "Aprendiendo Misquito";
    //return view('blogmiskito',['empresa' => $empresa]);
    return view('blogmiskito');
});

route::get('imagenes',function(){
    //$empresa = "cultura Miskita";
    //return view('imagenes',['empresa' => $empresa]);
    return view('imagenes');
});
