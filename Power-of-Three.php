<?php
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        if($n < 1) return false;
        while($n > 1) {
            if($n % 3 != 0) return false;
            $n /= 3;
        }
        return true;
    }
}
