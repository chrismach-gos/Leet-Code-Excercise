<?php
class Solution {
    private $dp = [];
    private $boxes = [];

    function removeBoxes($boxes) {
        $this->boxes = $boxes;
        $n = count($boxes);
        return $this->dfs(0, $n - 1, 0);
    }

    private function dfs($l, $r, $k) {
        if ($l > $r) return 0;
        $key = "$l,$r,$k";
        if (isset($this->dp[$key])) return $this->dp[$key];

        // Gom các hộp cùng màu ở cuối
        while ($r > $l && $this->boxes[$r] == $this->boxes[$r - 1]) {
            $r--;
            $k++;
        }

        // Xóa luôn nhóm cuối
        $res = $this->dfs($l, $r - 1, 0) + ($k + 1) * ($k + 1);

        // Thử gom thêm hộp cùng màu
        for ($i = $l; $i < $r; $i++) {
            if ($this->boxes[$i] == $this->boxes[$r]) {
                $res = max(
                    $res,
                    $this->dfs($l, $i, $k + 1) + $this->dfs($i + 1, $r - 1, 0)
                );
            }
        }

        return $this->dp[$key] = $res;
    }
}
