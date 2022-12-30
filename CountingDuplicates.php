<?php

class Solution {

    /**
     * @param String $text
     * @return Integer
     */
    function duplicateCount($text) {
        $sum = 0;
        while(strlen($text)) {
            if (substr_count(strtolower($text), $text[0]) > 1) {
                $sum++;
            }

            $text = str_replace($text[0], '', $text);
        }

        return $sum;
    }
}
