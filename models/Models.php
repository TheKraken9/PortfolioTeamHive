<?php
abstract class Models {

    $_host = 'localhost';
    $_dbname = 'portfolio';
    $_user = 'postgres';
    $_passord = 'root';

    private static $_bdd;

    private static function setBdd()
    {
        $pg = "pgsql:host=$_host;port=5432;dbname=$_dbname;user=$_user;password=$_password";
        try {
            self::$_bdd = new PDO($pg);
            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected function getBdd()
    {
        if(self::$_bdd == null)
        {
            self::setBdd();
        }
        return self::$_bdd;
    }

    protected function getAll($table, $obj, $id)
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM ' . $table . ' WHERE id=' . $id);
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

}