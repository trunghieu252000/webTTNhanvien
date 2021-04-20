<?php
    if(isset($_GET['submit'])){
        include_once "ketnoiCSDL.php";
        $idpb=$_GET["IDPB"];
        $hoten=$_GET["Hoten"];
        $msnv=$_GET["IDNV"];
        $diachi=$_GET["Diachi"];
        if($msnv==null){
           // header("Location: http://localhost/codePHP/chenthongtin.php/");
            echo"<script language='javascript'>
                alert('Hãy nhập đầy đủ thông tin');
                </script>";          
        }
        else{
            $query="insert into nhanvien values($msnv,'$hoten',$idpb,'$diachi')";
            $result=connect("dulieu",$query);
            if($result){
                echo"<script language='javascript'>
                alert('Thêm thành công!!!');
                </script>";
                header("Location: http://localhost/codePHP/phpbasic/xemthongtinNV.php/");
            }
            else{
                echo "thêm thất bại";
            }
        }
        
    }
?>