<?php
namespace Devtest;

class Hellospaceo {
    public static function form($action,$parameters){
        extract($parameters);
        include 'views/form.php';
    }

    public function sum(){
        $a = 10;
        $b = 20;
        $c = $a + $b;

        echo "SUM : ".$c;
    }

    public function increasing_star($num) {
        for($i = 0;$i <= $num;$i++) {
            for($j = 0;$j <= $i;$j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    public function decreasing_star($num) {
        for($i = $num;$i > 0;$i--) {
            for($j = $i;$j > 0; $j--) {
                echo "*";
            }
            echo "<br>";
        }
    }

    public function increasing_number($num) {
        for($i = 0;$i <= $num;$i++) {
            for($j = 0;$j <= $i;$j++) {
                echo $j;
            }
            echo "<br>";
        }
    }
    
    public function decreasing_number($num) {
        for($i = $num;$i >= 1;$i--) {
            for($j = $i;$j >= 1; $j--) {
                echo $i - $j;
            }
            echo "<br>";
        }
    }
}