<?php
class Skills{
    public $_id;
    public $_denomination;
    public $_typeSkills;

    public function __construct($data)
    {
        $this->hidrate($data);        
    }

    public function hidrate(array $data)
    {
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

    public function setDenomination($denomination) {
        $this->_denomination = $denomination;
    }

    public function setTypeSkills($typeSkills) {
        $this->_typeSkills = $typeSkills;
    }


    //getters
    public function id() {
        return $this->_id;
    }

    public function denomination() {
        return $this->_denomination;
    }

    public function typeSkills() {
        return $this->_typeSkills;
    }
}