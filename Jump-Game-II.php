<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function jump($nums) {
        $end = 0;
        $jumps = 0;
        $farthest = 0;

        $n = count($nums);
        for($i = 0; $i < $n - 1; $i++) {
            $farthest = max($farthest, $i + $nums[$i]);
            if($i == $end){
                $end = $farthest;
                $jumps += 1;
            }
        }

        return $jumps;
    }
}
