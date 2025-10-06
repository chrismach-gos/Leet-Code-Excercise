<?php
class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[]
     */
     function binarySearch($arr, $k) {
            $keys = array_keys($arr);
            $l = 0;
            $r = count($keys) - 1;
            $ans = -1;
            
            while($l <= $r) {
                $mid = intdiv($l + $r, 2);
                if($keys[$mid] >= $k){
                    $ans = $mid;
                    $r = $mid - 1;
                } else
                    $l = $mid + 1;
            }
            
            if($ans != -1) {
                $key = $keys[$ans];
                return $arr[$key];
            }
            
            return -1;
        }

    function findRightInterval($intervals) {
        $startList = [];
        foreach($intervals as $key => $value){
            $startList[$value[0]] = $key;
        }
        ksort($startList);

        $result = [];
        foreach($intervals as $i){
            $end = $i[1];
            $result[] = $this->binarySearch($startList, $end);
        }
        return $result;
    }
}
