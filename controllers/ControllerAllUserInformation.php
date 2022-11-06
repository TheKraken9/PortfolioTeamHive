<?php

$id = $_GET['id'];
class ControllerAllUserInformation {
    public $_userManager;

    public function __construct($url)
    {
        if(!isset($url) && count($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->getAllUserInformation($_GET['id']);
    }

    public function getAllUserInformation($id) {
        $this->_userManager = new ModelsManager();
        $user['member'] = $this->_userManager->getMembers($id);
        $user['experience'] = $this->_userManager->getExperience($id);
        $user['skills'] = $this->_userManager->getSkills($id);
        $user['parcours'] = $this->_userManager->getParcours($id);
        $user['project'] = $this->_userManager->getProject($id);

        echo json_encode($user);
    }
}