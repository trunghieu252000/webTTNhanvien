<?php
    if(isset($_GET['submit'])){
        include_once "ketnoiCSDL.php";
        $query111="select IDPB from phongban";
        $result=connect("dulieu",$query111);
        $result1=null;
        while($row=mysqli_fetch_array($result)){
            $idpb=$row["IDPB"];
            if(isset($_GET["$idpb"])){
                $id=$_GET["$idpb"];
                $query="delete from phongban where IDPB='$id'";
                $result1=connect("dulieu",$query);
                if($result1){
                    header("Location: http://localhost/codePHP/phpbasic/xemthongtinphongban1.php/");
                }
            }
        }
        if($result1){
            header("Location: http://localhost/codePHP/phpbasic/xemthongtinphongban1.php/");
        }
        else{
            echo "xóa thất bại";
        }
    }
?>