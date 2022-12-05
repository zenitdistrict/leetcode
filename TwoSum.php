<?php

//#1
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $nums2 = $nums;
        sort($nums2);
        $i = 0;
        $j = count($nums2) - 1;

        while ($i < $j) {
            if ($nums2[$i] + $nums2[$j] === $target) {
                $result = [];
                if ($nums2[$i] == $nums2[$j]) {
                    $key = array_search($nums2[$i], $nums);
                    $result[] = $key;
                    $nums[$key]++;
                    $result[] = array_search($nums2[$j], $nums);
                    return $result;
                }

                return [array_search($nums2[$i], $nums), array_search($nums2[$j], $nums)];
            }

            if ($nums2[$i] + $nums2[$j] > $target) {
                $j--;
            } elseif ($nums2[$i] + $nums2[$j] < $target) {
                $i++;
            }
        }
    }
}

//Example:
$solution = new Solution();
$nums = [3,2,4];
var_dump($solution->twoSum($nums, 6));
//Output: [1, 2]
