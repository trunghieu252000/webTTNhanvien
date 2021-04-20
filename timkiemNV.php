<?php
include_once "ketnoiCSDL.php";
echo "<h1> Tim Kiem Thong Tin Nhan Vien</h1>";
echo "<form action='/codePHP/phpbasic/timkiemNV.php' method='POST'>";

echo "<input type='radio' id='r1' value='IDNV' name='radio'>";
echo "<label for='r1'> IDNV</label>";

echo "<input type='radio' id='r2' value='Hoten' name='radio'>";
echo "<label for='r2'>Họ Tên</label>";

echo "<input type='radio' id='r3' value='Diachi' name='radio'>";
echo "<label for='r3'>Địa Chỉ</label>";
echo "<br><br>";

echo "<label for='timkiem'> Nhập Thông Tin Tìm Kiếm </label>";
echo "<input type='text' id='timkiem' name='input'>";
echo "<input type='submit' value='Tìm kiếm'";
echo "</from>";

echo "<table border='1' width='100%'>";
echo "<caption><h3>Xem Thông Tin Nhân Viên</h3></caption>";
echo "<tr> <th>IDNV</th> <th>Họ tên</th> <th>IDPB</th> <th>Địa chỉ</th> </tr>";

if (isset($_REQUEST['input']) && isset($_REQUEST['radio'])) {
    $radio = $_REQUEST['radio'];
    $input = $_REQUEST['input'];
    $query = "select * from nhanvien where $radio='$input'";
    $result = connect("dulieu", $query);
    if($result==null){
        echo "<br>Khong co";
    }
    while ($row = mysqli_fetch_array($result)) {
        $idnv = $row["IDNV"];
        $hoten = $row["Hoten"];
        $idpb = $row["IDPB"];
        $diachi = $row["Diachi"];
        echo "<tr> <th>$idnv</th> <th>$hoten</th> <th>$idpb</th> <th>$diachi</th></tr>";
    }
}
