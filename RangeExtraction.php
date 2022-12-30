<?php

class Solution {

    /**
     * @param Integer[] $list
     * @return String
     */
    function extractRange(array $list)
    {
        $res = '';
        $buff = [];
        for ($i = 0; $i < count($list); $i++) {
            if (empty($buff)) {
                $buff[] = $list[$i];
            } else if ($list[$i] - $list[$i-1] == 1) {
                $buff[] = $list[$i];
            } else if (count($buff) > 2) {
                $res .= ',' . $buff[0] . '-' . end($buff);
                $buff = [$list[$i]];
            } else {
                $res .= ',' . implode(',', $buff);
                $buff = [$list[$i]];
            }
        }

        if (count($buff) > 2) {
            $res .= ',' . $buff[0] . '-' . end($buff);
        } else {
            $res .= ',' . implode(',', $buff);
        }

        $res = trim($res, ',');

        return $res;
    }
}
