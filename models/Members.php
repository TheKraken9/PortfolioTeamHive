<?php
class Members
{
    public $_id;
    public $_firstName;
    public $_lastName;
    public $_dateOfBirth;
    public $_profession;
    public $_email;
    public $_facebook;
    public $_github;
    public $_linkedin;
    public $_phoneNumber;

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
        $id = (int)$id;
        if($id > 0) $this->_id = $id;
    }

    public function setFirstName($firstName) {
        if(is_string($firstName))
        $this->_firstName = $firstName;
    }

    public function setLastName($lastName) {
        if(is_string($lastName))
        $this->_lastName = $lastName;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->_dateOfBirth = $dateOfBirth;
    }

    public function setProfession($profession) {
        $this->_profession = $profession;
    }

    public function setEmail($email) {
        $this->_email = $email;
    }

    public function setFacebook($facebook) {
        $this->_facebook = $facebook;
    }

    public function setGithub($github) {
        $this->_github = $github;
    }

    public function setLinkedin($linkedin) {
        $this->_linkedin = $linkedin;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->_phoneNumber = $phoneNumber;
    }


    
    //getters
    public function id() {
        return $this->_id;
    }

    public function firstName() {
        return $this->_firstName;
    }

    public function lastName() {
        return $this->_lastName;
    }

    public function dateOfBirth() {
        return $this->_dateOfBirth;
    }

    public function profession() {
        return $this->_profession;
    }

    public function email() {
        return $this->_email;
    }

    public function facebook() {
        return $this->_facebook;
    }

    public function github() {
        return $this->_github;
    }

    public function linkedin() {
        return $this->_linkedin;
    }

    public function phoneNumber() {
        return $this->_phoneNumber;
    }
}