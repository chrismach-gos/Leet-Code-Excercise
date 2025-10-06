<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums) {
        $n = count($nums);
        
        if($n == 0) return 0;
        if($n == 1) return $nums[0];

        $prev2 = $nums[0];
        $prev1 = max($nums[0], $nums[1]);

        for($i = 2; $i < $n; $i++) {
            $curr = max($prev1, $nums[$i] + $prev2);
            $prev2 = $prev1;
            $prev1 = $curr;
        }
        return $prev1;
    }
}
