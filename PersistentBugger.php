<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function persistence($num)
    {
        if ($num < 10) {
            return 0;
        }

        $num = str_split($num);
        $count = 1;

        while (array_product($num) > 9) {
            $num = str_split(array_product($num));
            $count++;
        }

        return $count;
    }
}
