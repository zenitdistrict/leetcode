<?php

class Solution {

    /**
     * @param Integer $integer
     * @return Integer[]|String
     */
    function divisors($integer) {
        $a = [];
        for ($i = 2; $i < $integer; $i++) {
            if ($integer % $i == 0) {
                $a[] = $i;
            }
        }

        if ($a) {
            return $a;
        } else {
            return "$integer is prime";
        }
    }
}
