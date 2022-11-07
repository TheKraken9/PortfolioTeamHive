<?php
class Parcours
{
    public $_id;
    public $_started;
    public $_ended;
    public $_idMember;
    public $_university;
    public $_degree;


    public function __construct($data)
    {
        $this->setId($data["id"]);
        $this->setStart($data["debut"]);
        $this->setEnded($data["fin"]);
        $this->setIdMember($data["idmembre"]);
        $this->setUniversity($data["ecole"]);
        $this->setDegree($data["diplome"]);
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

    public function setUniversity($university)
    {
        $this->_university = $university;
    }

    public function setDegree($degree)
    {
        $this->_degree = $degree;
    }
}