<?php
class Member
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
    public $_profilPicture;

    public function __construct($data)
    {
        $this->setId($data["id"]);
        $this->setLastName($data["nom"]);
        $this->setFirstName($data["prenom"]);
        $this->setDateOfBirth($data["dateNaissance"]);
        $this->setProfession($data["profession"]);
        $this->setEmail($data["Email"]);
        $this->setFacebook($data["Facebook"]);
        $this->setGithub($data["GitHub"]);
        $this->setLinkedin($data["Linkedin"]);
        $this->setPhoneNumber($data["tel"]);
        $this->setProfilePicture($data["pfp"]);
    }

    //setters
    public function setId($id)
    {
        $id = (int)$id;
        if ($id > 0) $this->_id = $id;
    }

    public function setFirstName($firstName)
    {
        if (is_string($firstName))
            $this->_firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        if (is_string($lastName))
            $this->_lastName = $lastName;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->_dateOfBirth = $dateOfBirth;
    }

    public function setProfession($profession)
    {
        $this->_profession = $profession;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function setFacebook($facebook)
    {
        $this->_facebook = $facebook;
    }

    public function setGithub($github)
    {
        $this->_github = $github;
    }

    public function setLinkedin($linkedin)
    {
        $this->_linkedin = $linkedin;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->_phoneNumber = $phoneNumber;
    }

    public function setProfilePicture($pfp)
    {
        $this->_profilPicture = $pfp;
    }
}