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
        } else if($positiveWordsCounter == 1 || $positiveWordsCounter == 2) { // case correct
            $notification = "correct";
        } else if($positiveWordsCounter == 3 || $positiveWordsCounter == 4) { // case bon
            $notification = "bon";
        }

        return $notification;
    }

    public function neutral() {
        return "neutre";
    }

    public function correct() {
        return "correct";
    }

    public function bon() {
        return "bon";
    }

}