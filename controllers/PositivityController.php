<?php

class PositivityController{

    public function __construct() {

    }

    public function run(){

        # Un contrôleur se termine en écrivant une vue

        require_once(VIEW_PATH . 'positivity.php');
    }

    public function neutral() {
        return "neutre";
    }
}