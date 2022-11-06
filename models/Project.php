<?php
class Project {
    public $_id;
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