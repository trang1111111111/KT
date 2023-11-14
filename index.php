<?php
/* Phần 1: Trắc Nghiệm 
1. Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
2. A
3. A
4. B
5. B

*/
echo "Phần tự luận <br>";
echo "Câu 1. <b> Viết một chương trình PHP để hiển thị dãy số Fibonacci. 
Yêu cầu:
Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử. </b><br>";
function generateFibonacci($n){
    if ($n < 0){
        return -1;
    } elseif ($n == 0 || $n == 1){
        return $n;
    } else {
        return generateFibonacci($n -1) + generateFibonacci($n -2);
    }
}

echo "10 số đầu tiên của dãy số fibonacci là: ";
for ($i = 0; $i < 10 ;$i++){
    echo generateFibonacci ( $i ) ." ";
}

echo "<br>";

echo "Câu 2. <b> Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. 
Yêu cầu:
Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
Hiển thị thông tin của tất cả học sinh trong mảng.
Viết hàm để tìm học sinh có điểm cao nhất (grade) </b><br>";
function hoc_sinh_diem_cao_nhat($hocSinhs) {
    $diem_cao_nhat = 0;
    $hoc_sinh_diem_cao_nhat = null;
    foreach ($hocSinhs as $hocSinh) {
        if ($hocSinh['grade'] > $diem_cao_nhat) {
            $diem_cao_nhat = $hocSinh['grade'];
            $hoc_sinh_diem_cao_nhat = $hocSinh;
        }
    } 
    return $hoc_sinh_diem_cao_nhat;
}

$hocSinhs = array(
    array('id' => 1,'name' => 'Nguyễn Hải Lâm','age' => 20,'grade' => 8.5 ),
    array( 'id' => 2,'name' => 'Nguyễn Thị Ngọc Dung','age' => 21,'grade' => 8.56 ),
    array('id' => 3,'name' => 'Tô Thị Ngọc Ánh','age' => 21,'grade' => 8.5)
);

echo "<br> Thông tin của tất cả học sinh trong lớp: <br>";
foreach ($hocSinhs as $hocSinh) {
    echo "ID: " . $hocSinh['id'] . "<br>";
    echo "Họ tên: " . $hocSinh['name'] . "<br>";
    echo "Tuổi: " . $hocSinh['age'] . "<br>";
    echo "Điểm: " . $hocSinh['grade'] . "<br><br>";
}

$hocSinhDiemCaoNhat = hoc_sinh_diem_cao_nhat($hocSinhs);
echo "Học sinh có điểm cao nhất là: <br>";
echo "ID: " . $hocSinhDiemCaoNhat['id'] . "<br>";
echo "Họ tên: " . $hocSinhDiemCaoNhat['name'] . "<br>";
echo "Tuổi: " . $hocSinhDiemCaoNhat['age'] . "<br>";
echo "Điểm: " . $hocSinhDiemCaoNhat['grade'] . "<br>";




























?>