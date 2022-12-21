<?php

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $result = "";
        $s = 0;

        $i = strlen($a) - 1;
        $j = strlen($b) - 1;
        while ($i >= 0 || $j >= 0 || $s == 1)
        {
            $s += (($i >= 0)? ord($a[$i]) -
                ord('0'): 0);
            $s += (($j >= 0)? ord($b[$j]) -
                ord('0'): 0);

            $result = chr($s % 2 + ord('0')) . $result;

            $s = (int)($s / 2);

            $i--; $j--;
        }

        return $result;
    }
}
