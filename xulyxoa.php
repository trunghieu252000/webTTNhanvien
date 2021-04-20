<?php

    if(isset($_GET['submit'])){
        include_once "ketnoiCSDL.php";
        $query111="select IDNV from nhanvien";
        $result=connect("dulieu",$query111);
        $result1=null;
        $id=2;
        while($row=mysqli_fetch_array($result)){
            $idnv=$row["IDNV"];
            if(isset($_GET["$idnv"])){
                $id=$_GET["$idnv"];
               // echo $id;
                $query="delete from nhanvien where IDNV=$id";
                $result1=connect("dulieu",$query);
                // if($result1){
                //     header("Location: http://localhost/codePHP/phpbasic/xemthongtinNV.php/");
                // }
            }
        }
        if($result1){
            header("Location: http://localhost/codePHP/phpbasic/xemthongtinNV.php/");
        }
        else{
            echo "xóa thất bại";
        }
    }
?>