<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function printerError($s) {
        $alph = range('a', 'm');
        $count = 0;
        foreach(str_split($s) as $chr) {
            if (!in_array($chr, $alph)) {
                $count++;
            }
        }

        return $count . '/' . strlen($s);
    }
}
