<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        return str_split($this->findSum(implode($digits), 1));
    }

    function findSum($str1, $str2)
    {
        // Before proceeding further, make sure length
        // of str2 is larger.
        if (strlen($str1) > strlen($str2)) {
            $t=$str1;
            $str1=$str2;
            $str2=$t;
        }

        // Take an empty string for storing result
        $str = "";

        // Calculate length of both string
        $n1 = strlen($str1);
        $n2 = strlen($str2);

        // Reverse both of strings
        $str1 = strrev($str1);
        $str2 = strrev($str2);

        $carry = 0;
        for ($i=0; $i<$n1; $i++)
        {
            // Do school mathematics, compute sum of
            // current digits and carry
            $sum = ((ord($str1[$i])-48)+((ord($str2[$i])-48)+$carry));
            $str.=chr($sum%10 + 48);

            // Calculate carry for next step
            $carry = (int)($sum/10);
        }

        // Add remaining digits of larger number
        for ($i=$n1; $i<$n2; $i++)
        {
            $sum = ((ord($str2[$i])-48)+$carry);
            $str.=chr($sum%10 + 48);
            $carry = (int)($sum/10);
        }

        // Add remaining carry
        if ($carry)
            $str.=chr($carry+48);

        // reverse resultant string
        $str=strrev($str);

        return $str;
    }
}
