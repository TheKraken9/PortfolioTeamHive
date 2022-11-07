<?php
class Project
{
    public $_id;
    public $_title;
    public $_description;
    public $_techno;

    public function __construct($data)
    {
        $this->setId($data["id"]);
        $this->setTitle($data["titre"]);
        $this->setDescription($data["descript"]);
        $this->setTechno($data["Techno"]);
    }

    //setters
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function setTechno($techno)
    {
        $this->_techno = $techno;
    }
}