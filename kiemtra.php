<!--
Câu 8 : Viết function giải phương trình bậc 2 
Câu 9 : Viết function in ra màn hình chữ nhật rỗng có kích thước 5x7 sử dụng dấu sao ( dùng vòng lặp )
Câu 10 : Viết function tính trung bình cộng của mảng
 -->

<?php
function giaiPhuongTrinhBac2($a, $b, $c) {
    if ($a == 0) { 
        if ($b == 0) {
            return ($c == 0) ? "Phương trình có vô số nghiệm" : "Phương trình vô nghiệm";
        }
        $x = -$c / $b;
        return "Phương trình bậc nhất có 1 nghiệm: x = " . $x;
    }

    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x1 = x2 = " . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    }
}

function inChuNhatRong($rows, $cols) {
    $out = "";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            if ($i == 0 || $i == $rows - 1 || $j == 0 || $j == $cols - 1) {
                $out .= "* ";
            } else {
                $out .= "  ";
            }
        }
        $out .= "\n";
    }
    return $out;
}

function tinhTrungBinh($arr) {
    if (count($arr) == 0) return 0;
    $nums = array_filter($arr, fn($x) => is_numeric($x));
    if (count($nums) == 0) return 0;
    return array_sum($nums) / count($nums);
}

// In ra màn hình kết quả các câu
echo "<h3>Câu 8</h3>";
echo giaiPhuongTrinhBac2(1, -3, 2); // x1=2, x2=1

echo "<h3>Câu 9</h3>";
echo "<pre>" . inChuNhatRong(5, 7) . "</pre>";

echo "<h3>Câu 10</h3>";
$mang = [2, 4, 6, 8, 10];
echo "Trung bình cộng = " . tinhTrungBinh($mang);
?>
