<?php 

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

/**
 * Classe para gerenciar as requisições que irão chegar na home do nosso site
 */
class Home extends Page {
    /**
    * Método responsável por retornar o conteúdo (view) da nossa home
    * @return string
    */
    public static function getHome() {
        // Organização
        $obOrganiation = new Organization;

        // VIEW DA HOME
        $content = view::render('pages/home', [
            'name' => $obOrganiation->name,
            'description' => $obOrganiation->description,
            'site' => $obOrganiation->site
        ]);

        // RETORNA A VIEW DA PÁGINA
        return parent::getPage('WDEV - Canal - Home', $content);
    }
}