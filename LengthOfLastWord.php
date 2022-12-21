<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        return strlen(array_pop(explode(' ', trim($s))));
    }
}
