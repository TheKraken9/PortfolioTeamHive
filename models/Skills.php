<?php
class Skills
{
    public $_id;
    public $_denomination;
    public $_typeSkills;
    public $_level;

    public function __construct($data)
    {
        $this->setId($data["id"]);
        $this->setDenomination($data["denomination"]);
        $this->setTypeSkills($data["typeSkill"]);
        $this->setSkillsLevel($data["percentage"]);
    }

    //setters
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setDenomination($denomination)
    {
        $this->_denomination = $denomination;
    }

    public function setTypeSkills($typeSkills)
    {
        $this->_typeSkills = $typeSkills;
    }

    public function setSkillsLevel($SkillsLevel)
    {
        $this->_level = $SkillsLevel;
    }
}