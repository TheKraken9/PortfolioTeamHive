<?php
class ModelsManager extends Models {
    public function getMembers($id) {
        return $this->getAll('Membre','Members', $id);
    }

    public function getExperience($id) {
        return $this->getAll('Experience','Experience', $id);
    }

    public function getSkills($id) {
        return $this->getAll('Skills','Skills', $id);
    }

    public function getParcours($id) {
        return $this->getAll('parcours','Parcours', $id);
    }

    public function getProject($id) {
        return $this->getAll('Projet','Project', $id);
    }
}