<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $parentheses = [
            ']' => '[',
            ')' => '(',
            '}' => '{'
        ];

        $p = str_split($s);
        $buff = [];

        foreach ($p as $brace) {
            if (in_array($brace, $parentheses)) {
                $buff[] = $brace;
            } elseif (array_pop($buff) != $parentheses[$brace]) {
                return false;
            }
        }

        return !count($buff);
    }
}
