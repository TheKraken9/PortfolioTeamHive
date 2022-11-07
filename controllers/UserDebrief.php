<?php
    include("../inc/DataBaseConnect.php");
    function countMember(){
        $res=mysqli_query(getDataBase(),"select count(*) from membre");
        return mysqli_fetch_assoc($res);
    }

    function getFullName(){
        $res=mysqli_query(getDataBase(),"select nom,prenom,profession from membre" );
        $Data=array();
        while($data=mysqli_fetch_assoc($res)){
            $Data[]=$data;
        }
        return $Data;
    }
    function getRandomProject($id){
        // return the title and the description of a project depending on userid
        $res=mysqli_query(getDataBase(),"select titre,descript from projet where id=(select idprojet from membre_projet where idmembre=".$id." limit 1)");
        return mysqli_fetch_assoc($res);
    }
    $dt=getFullName();
    echo json_encode($dt);
?>