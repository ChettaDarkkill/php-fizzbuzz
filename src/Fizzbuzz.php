<?php
    class FizzBuzz
    {
        public function say($num) {
            $str = "";
            $f = $num % 3;
            while($f == 0) {
                $str = $str."Fizz";
                break;
            }
            $b = $num % 5;
            while($b == 0) {
                $str = $str."Buzz";
                break;
            }
            while(strlen($str) == 0) {
                return $num;
                break;
            }
            return $str;
        }
    }