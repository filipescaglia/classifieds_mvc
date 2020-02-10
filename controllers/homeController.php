<?php

class homeController extends controller {

    public function index() {
        $dados = array(
            'qt' => 5,
            'nome' => 'Filipe',
            'idade' => 21
        );

        $this->loadTemplate('home', $dados);
    }

}