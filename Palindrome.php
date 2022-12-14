<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $temp = $x;
        $new = 0;
        while (floor($temp)) {
            $d = $temp % 10;
            $new = $new * 10 + $d;
            $temp = $temp/10;
        }
        if ($new == $x){
            return true;
        }
        else{
            return false;
        }
    }
}
