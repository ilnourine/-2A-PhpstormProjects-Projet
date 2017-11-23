<?php

/**
 * Created by PhpStorm.
 * User: ilnourine
 * Date: 22/11/17
 * Time: 16:02
 */
class controleur
{
    function __construc() {
        global $rep,$vues;

        session_start();

        $dvueErreur = array() ;

        try {
            $action = $_REQUEST['action'];

            switch($action) {

                case NULL:
                    $this->Reinit();
                    break;

                case "clickTitreFrancais":
                    $this->clickTitreFrancais($dvueErreur)
                    break;
                default:
                    $dvueErreur[] = "Erreur d'appel php ";
                    require($rep . $vue['vuephp1']);
                    break;

            }
            catch (PDOException $e){
                $dVueEreur[] =	"Erreur inattendue!!! ";
                require ($rep.$vues['erreur']);
            }
        exit(0);
        }

        function Reinit() {
            global $rep,$vues;
            require($rep.$vues['Pagedacceuil']);

        }
        function clickerTitreFrancais() {
            global $rep,$vues;
            $bookGataway = new BookGateway();
            $data=$bookGataway->triNews("in");
            require $rep.$vues['vuephp1'];
        }

        function clickerTitreInter() {
            global $rep,$vues;
            $bookGataway = new BookGateway();
            $data=$bookGataway->triNews("fr");
            require $rep.$vues['vuephp1'];
        }

        function clickerChaqueVue() {
            global $rep,$vues;
            $bookGataway = new BookGateway();
            $data=$bookGataway->affichNews("fr");
            require $rep.$vues['vuephp1'];

        }
        function



    }

}