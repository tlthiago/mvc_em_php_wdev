<?php 

namespace App\Controller\Pages;

use App\Utils\View;

/**
 * Classe para gerenciar as requisições que irão chegar na home do nosso site
 */
class Page {
    /**
     * Método responsável por renderizar o topo da página
     * @return string
     */
    private static function getHeader() {
        return view::render('pages/header');
    }

    /**
    * Método responsável por retornar o conteúdo (view) da nossa página genérica
    * @return string
    */
    public static function getPage($title, $content) {
        return view::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }

    /**
     * Método responsável por renderizar o rodapé da página
     * @return string
     */
    private static function getFooter() {
        return view::render('pages/footer');
    }
}