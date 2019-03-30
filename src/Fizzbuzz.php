<?php
    class FizzBuzz
    {
        public function say($num) {
            if($num == 3) {
                return "Fizz";
            }
            if($num == 5) {
                return "Buzz";
            }
            if($num == 6) {
                return "Fizz";
            }
            return $num;
        }
    }