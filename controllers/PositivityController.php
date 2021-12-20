<?php

class PositivityController {

    public function __construct() {

    }

    public function run(){

        # Un contrôleur se termine en écrivant une vue

        require_once(VIEW_PATH . 'positivity.php');
    }

    public function countPositiveWords($message):string {
        $tablePositiveWords = array('bon','super','cool','genial','extraordinaire','fantastique',
            'incroyable','parfait','parfaite','beau');

        $var = explode(" ", $message);

        $notification = " ";
        $positiveWordsCounter = 0;

        for ($i = 0; $i < sizeof($var); $i++) {
            for ($j = 0; $j < sizeof($tablePositiveWords); $j++) {
                if ($var[$i] == $tablePositiveWords[$j]) {
                    $positiveWordsCounter++;
                }
            }
        }

        if($positiveWordsCounter == 0) { // case neutre
            $notification = "neutre";
        }

        return $notification;
    }

    public function correct() {
        return "correct";
    }

}