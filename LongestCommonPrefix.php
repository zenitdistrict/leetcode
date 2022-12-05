<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        sort($strs);
        $word = $strs[0];
        $prefix = '';

        foreach (str_split($word) as $key => $value) {
            foreach ($strs as $checkWord) {
                if ($checkWord[$key] && $checkWord[$key] !== $word[$key]) {
                    break 2;
                }
            }

            $prefix .= $value;
        }

        return $prefix;
    }
}

//Example:
$solution = new Solution();
$strs = ["flower","flow","flight", "fly"];
echo $solution->longestCommonPrefix($strs);
//Output: "fl"
