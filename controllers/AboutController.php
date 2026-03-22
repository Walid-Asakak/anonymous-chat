<?php

namespace Controllers;

class AboutController {
    public function index() {
        $title = 'Tchat Anonyme | À Propos';
        $view = 'views/about/about.phtml';
        require 'views/layout.phtml';
    }
}