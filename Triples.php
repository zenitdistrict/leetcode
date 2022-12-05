<?php

//#15
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $result = [];

//        for ($i = 0; $i <= count($nums) - 3; $i++) {
//            for ($j = $i + 1; $j <= count($nums) - 2; $j++) {
//                for ($k = $j + 1; $k <= count($nums) - 1; $k++) {
//                    if ($nums[$i] + $nums[$j] + $nums[$k] === 0) {
//                        $element = [$nums[$i], $nums[$j], $nums[$k]];
//                        sort($element);
//                        $result[] = $element;
//                    }
//                }
//            }
//        }

        sort($nums);
        $i = 0;
        $j = count($nums) - 1;
        while ($j - $i > 1) {
            $shortArray = array_slice($nums, $i + 1, $j - ($i + 1));
            if ($nums[$i] + $nums[$j] == 0) {
                $search = 0;
            } else {
                $search = -($nums[$i] + $nums[$j]);
            }
            if (in_array($search, $shortArray)) {
                $element = [$nums[$i], $search, $nums[$j]];
                sort($element);
                $result[] = $element;
            }

            $i++;

            $shortArray = array_slice($nums, $i + 1, $j - ($i + 1));
            if ($nums[$i] + $nums[$j] == 0) {
                $search = 0;
            } else {
                $search = -($nums[$i] + $nums[$j]);
            }
            if (in_array($search, $shortArray)) {
                $element = [$nums[$i], $search, $nums[$j]];
                sort($element);
                $result[] = $element;
            }

            $j--;


        }

        return array_map("unserialize", array_unique(array_map("serialize", $result)));
    }
}

//TODO: working not correct
$solution = new Solution();
$nums = [-1,0,1,2,-1,-4];
$nums = [0,0,0];
$nums = [-2,0,1,1,2];
var_dump($solution->threeSum($nums));
