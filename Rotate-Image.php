<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $n = count($matrix);

        for($i = 0; $i < $n; $i++) {
            for($j = $i+1; $j < $n; $j++) {
                $tmp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$j][$i];
                $matrix[$j][$i] = $tmp;
            }
        }

        for($i = 0; $i < $n; $i++) {
            $l = 0; $r = $n - 1;
            while($l < $r) {
                $tmp = $matrix[$i][$l];
                $matrix[$i][$l] = $matrix[$i][$r];
                $matrix[$i][$r] = $tmp;

                $l++;$r--;
            }
        }

        return $matrix;
    }
}
