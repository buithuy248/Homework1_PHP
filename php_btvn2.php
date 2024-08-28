<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 2</title>
</head>
<body> 
<?php
$x = 'bui thi thuy 248';
#1. 
    echo '1. Độ dài các ký tự trong chuỗi: ' .strlen($x) .'<br>';
#2. 
    echo '2. Độ dài số từ trong chuỗi: ' .str_word_count($x) .'<br>';
#3. 
    echo '3.Đảo ngược chuỗi: ' .strrev($x).'<br>';
#4. 
    echo '4. Vị trí ký tự của kết quả khớp đầu tiên: ' .strpos($x, "thuy") .'<br>';
#5. 
    echo '5. Kết quả thay thế "248" bằng "907" trong chuỗi: ' .str_replace('248', '907', $x) .'<br>';
#6.
    function bat_dau_bang($chuoi, $chuoi_con) {
        return strncmp($chuoi, $chuoi_con, strlen($chuoi_con)) === 0;
    }
    $chuoi_tim = "thuy";
    if (bat_dau_bang($x, $chuoi_tim)) {
        echo "6. '$x' bắt đầu bằng '$chuoi_tim'" .'<br>';}
        else {
        echo "6. '$x' không bắt đầu bằng '$chuoi_tim'" .'<br>';}
#7. 
    echo '7. Chuyển đổi một chuỗi thành chữ hoa: ' .strtoupper ($x) .'<br>';
#8. 
    echo '8. Chuyển đổi một chuỗi thành chữ thường: ' .strtolower ('BUI THI THUY') .'<br>';
#9. 
    echo '9. Viết hoa chữ cái đầu của chuỗi: ' .ucwords($x) .'<br>';
#10.
$y ="  bui thuy  ";
    echo '10. Loại bỏ khoảng trắng ở đầu và cuối chuỗi: ' .trim($y) .'<br>';
#11. 
    echo '11. Loại bỏ kí tự đầu tiên của chuỗi: ' .ltrim($x, "b") .'<br>';
#12. 
    echo '12. Loại bỏ kí tự cuối cùng của chuỗi: ' .rtrim($x, "8") .'<br>';
#13. 
$z = "bui, thi, thuy, 248";
    $tach = explode(",", $z);
    echo '13. Tách một chuỗi thành một mảng các phần tử: ';
    print_r ($tach);
    echo"<br>";
#14. 
$a = "bui"; 
$b = "thi";
$c = "thuy";
$d = "248";
$mang = array ($a, $b, $c, $d);
    $noi = implode(" ", $mang);
    echo '14. Nối các phần tử của một mảng thành một chuỗi: ';
    print_r ($noi);
    echo '<br>';
#15. 
    echo '15. Thêm một chuỗi vào đầu hoặc cuối của một chuỗi: ' .str_pad ($x,20, "*", STR_PAD_RIGHT) .'<br>';
#16. 
function ket_thuc_bang($chuoi, $chuoi_con) {
    $ket_qua = strrchr($chuoi, $chuoi_con);
    return $ket_qua === $chuoi_con;
}
$chuoi_tim1 = "248";

if (ket_thuc_bang($x, $chuoi_tim1)) {
    echo "16. $x kết thúc bằng $chuoi_tim1" .'<br>';
} else {
    echo "16. $x không kết thúc bằng '$chuoi_tim1'" .'<br>';
}
#17. 
function chua_chuoi_con($chuoi, $chuoi_con) {
    return strstr($chuoi, $chuoi_con) !== false;
  }
  $chuoi_tim2 = "turi";
  
  if (chua_chuoi_con($x, $chuoi_tim2)) {
    echo "17. Chuỗi '$x' có chứa chuỗi '$chuoi_tim2'" .'<br>';
  } else {
    echo "17. Chuỗi '$x' không chứa chuỗi '$chuoi_tim2'" .'<br>';
  }
#18. 
$m = '@# bui thi thuy 248 #@';
echo '18. Thay thế các ký tự không phải số hoặc chữ trong chuỗi: ' .preg_replace ('/[^a-zA-Z0-9]/','_', $m) .'<br>';
#19. 
$n = 248;
if (is_int ($n)) {
    echo "19. '$n' là số nguyên" .'<br>';}
    else {
        echo "19. '$n' không phải là số nguyên" .'<br>';}
#20.
$p = 'boctru2408@gmail';
if (filter_var ($p, FILTER_VALIDATE_EMAIL)) {
    echo "20. '$p' là một email hợp lệ" .'<br>';}
    else {
        echo "20. '$p' không phải là một email hợp lệ" .'<br>';}
?>
</body>
</html>