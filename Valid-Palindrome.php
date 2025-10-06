<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = preg_replace("/[^a-zA-Z0-9]/", "",$s);
        $s = strtolower($s);
        
        $i = 0;
        $j = strlen($s) - 1;
        while($i < $j){
            if($s[$i] != $s[$j]) return false;
            
            $i++;
            $j--;
        }
        return true;
    }
}
