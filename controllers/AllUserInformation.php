<?php
include("../inc/DataBaseConnect.php");
include("../models/Member.php");
include("../models/Experience.php");
include("../models/Parcours.php");
include("../models/Project.php");
include("../models/Skills.php");

function getMemberByID($id)
{
    $req = "SELECT * FROM Membre WHERE id=" . $id;
    $rslt = mysqli_query(getDataBase(), $req);
    return new Member(mysqli_fetch_assoc($rslt));
}

function getMemberExperience($idmember)
{
    $xp = array();
    $req = "SELECT * FROM Experience WHERE idmembre=" . $idmember;
    $rslt = mysqli_query(getDataBase(), $req);
    while ($data = mysqli_fetch_assoc($rslt)) {
        $xp[] = new Experience($data);
    }
    return $xp;
}

function getMemberParcours($idmember)
{
    $parcours = array();
    $req = "SELECT * FROM parcours WHERE idmembre=" . $idmember;
    $rslt = mysqli_query(getDataBase(), $req);
    while ($data = mysqli_fetch_assoc($rslt)) {
        $parcours[] = new Parcours($data);
    }
    return $parcours;
}

function getMemberProjects($idmember)
{
    $projects = array();
    $req = "SELECT Projet.* FROM Projet JOIN membre_projet ON Projet.id = membre_projet.idprojet WHERE idmembre=" . $idmember;
    $rslt = mysqli_query(getDataBase(), $req);
    while ($data = mysqli_fetch_assoc($rslt)) {
        $projects[] = new Project($data);
    }
    return $projects;
}

function getMemberSkills($idmember)
{
    $skills = array();
    $req = "SELECT Skills.*,  membre_skills.percentage FROM Skills JOIN membre_skills ON Skills.id = membre_skills.idSkills WHERE idmembre=" . $idmember;
    $rslt = mysqli_query(getDataBase(), $req);
    while ($data = mysqli_fetch_assoc($rslt)) {
        $skills[] = new Skills($data);
    }
    return $skills;
}

$user = array(
    "user" => getMemberByID($_GET['id']),
    "exp" => getMemberExperience($_GET['id']),
    "parcours" => getMemberParcours($_GET['id']),
    "projects" => getMemberProjects($_GET['id']),
    "skills" => getMemberSkills($_GET['id'])
);

echo json_encode($user);