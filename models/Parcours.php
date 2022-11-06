<?php
class Parcours{
    public $_id;
    public $_started;
    public $_ended;
    public $_idMember;
    public $_university;
    public $_degree;


    public function __construct($data)
    {
        $this->hidrate($data);
    }

    public function hidrate(array $data) {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method))
                $this->$method($value);
        }
    }

    //setters
    public function setId($id) {
        $this->_id = $id;
    }

    public function setStart($started) {
        $this->_started = $started;
    }

    public function setEnded($ended) {
        $this->_ended = $ended;
    }

    public function setIdMember($idMember) {
        $this->_idMember =$idMember;
    }

    public function setUniversity($university) {
        $this->_university = $university;
    }

    public function setDegree($degree) {
        $this->_degree = $degree;
    }


    //getters
    public function id() {
        return $this->_id;
    }

    public function started() {
        return $this->_started;
    }

    public function ended() {
        return $this->_ended;
    }

    public function idMember() {
        return $this->_idMember;
    }

    public function university() {
        return $this->_university;
    }

    public function degree() {
        return $this->_degree;
    }


}