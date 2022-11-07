<?php
class Experience
{
    public $_id;
    public $_idMember;
    public $_started;
    public $_ended;
    public $_title;
    public $_description;
    public $_techno;


    public function __construct($data)
    {
        $this->setId($data["id"]);
        $this->setIdMember($data["idmembre"]);
        $this->setStart($data["debut"]);
        $this->setEnded($data["fin"]);
        $this->setTitle($data["titre"]);
        $this->setDescription($data["descript"]);
        $this->setTechno($data["Techno"]);
    }

    //setters
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setStart($started)
    {
        $this->_started = $started;
    }

    public function setEnded($ended)
    {
        $this->_ended = $ended;
    }

    public function setIdMember($idMember)
    {
        $this->_idMember = $idMember;
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