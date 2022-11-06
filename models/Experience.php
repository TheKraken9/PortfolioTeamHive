<?php
class Experience{
    public $_id;
    public $_idMember;
    public $_started;
    public $_ended;
    public $_title;
    public $_description;
    public $_techno;

    
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

    public function setTitle($title) {
        $this->_title = $title;
    }

    public function setDescription($description) {
        $this->_description = $description;
    }

    public function setTechno($techno) {
        $this->_techno = $techno;
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

    public function title() {
        return $this->_title;
    }

    public function description() {
        return $this->_description;
    }

    public function techno() {
        return $this->_techno;
    }

}