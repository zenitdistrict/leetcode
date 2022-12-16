<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $low = 0;
        $high = count($nums) - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);

            if($nums[$mid] == $target) {
                return $mid;
            }

            if ($target < $nums[$mid]) {
                $high = $mid -1;
            }
            else {
                $low = $mid + 1;
            }
        }

        return $low;
    }
}
