<?php
    class FizzBuzz
    {
        public function say($num) {
            return $this->fizz($num).$this->buzz($num).$this->word($num);
        }

        public function word($num){
            $word = [true => "", false => $num];
            return $word[$this->isFizz($num) || $this->isBuzz($num)];
        }

        public function buzz($num) {
            $word = [true => "Buzz", false => ""];
            return $word[$this->isBuzz($num)];
        }

        public function isBuzz($num) {
            return $num % 5 == 0;
        }

        public function fizz($num) {
            $word = [true => "Fizz", false => ""];
            return $word[$this->isFizz($num)];
        }

        public function isFizz($num) {
            return $num % 3 == 0;
        }
    }