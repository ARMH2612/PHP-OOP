<?php

    class Weather {
        public static $tempCondition = ['cold','mild','warm'];

        public static function celsiusToFahrenheit($c){
            return $c*9/5+32;
        }

        public static function determineTempCondition($f){
            if($f<40){
                return self::$tempCondition[0];// cold
            }elseif($f< 70){
                return self::$tempCondition[1];// // mild
            }else{
                return self::$tempCondition[2]; // warm
            }
        }
    }

    print_r(Weather::$tempCondition);
    echo '<br />' . Weather::celsiusToFahrenheit(28). "<br />";
    echo '<br />' . Weather::determineTempCondition(80). "<br />";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP OOP Tuts</title>
</head>
<body>
    
</body>
</html>