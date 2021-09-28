<?php

function carrega_pagina(){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    if (file_exists("{$pagina}.php")):
        require_once("{$pagina}.php");
    else:
        require_once('home.php');
    endif;
}

function gera_titulos(){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    switch ($pagina):
        case 'home':
            $titulo = 'Dan | Cursos Web';
            break;

        case 'cursos':
            $titulo = 'Cursos | Dan Web';
            break;

        case 'sobre':
            $titulo = 'Sobre | Dan Web';
            break;

        case 'contato':
            $titulo = 'Fale comigo | Dan Web';
            break;
        
        default:
            $titulo = 'Dan | Cursos Web';
            break;
    endswitch;
    return $titulo;
}