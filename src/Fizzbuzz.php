<?php
    class FizzBuzz
    {
        public function say($num) {
            $arr = [
                0 => $num,
                4 => "Fizz",
                5 => "Buzz",
                9 => "FizzBuzz",
            ];

            $f1 = $num % 3;
            $b1 = $num % 5;

            $f2 = str_replace(0, "Fizz", $f1);
            $b2 = str_replace(0, "Buzzz", $b1);

            $fb1 =  $f2.$b2;

            $fb = str_replace($f1, "", $fb1);
            $fb = str_replace($b1, "", $fb);
            return $arr[strlen($fb)];
        }
    }