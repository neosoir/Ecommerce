<?php

class TemplateController {

    /**
     * Principal view of template
     *
     * @return html
     */
    public function index() {

        include "views/template.php";

    }

    /**
     * Domain of site
     *
     * @return string
     */
    public static function path() {

        if ( !empty( $_SERVER['HTTPS'] ) && ( "on" == $_SERVER['HTTPS'] ) ) 
            return "https://" . $_SERVER['SERVER_NAME'] . "/ecommerce/web/";

        else
            return "http://" . $_SERVER['SERVER_NAME'] . "/ecommerce/web/";

    }

}