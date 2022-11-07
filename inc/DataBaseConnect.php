<?php
function getDataBase()
{
    static $bdd = null;
    if ($bdd == null) {
        $bdd = mysqli_connect("localhost", "root", "", "portfolio");
    }
    return $bdd;
}
mysqli_set_charset(getDataBase(), "utf8");
?>