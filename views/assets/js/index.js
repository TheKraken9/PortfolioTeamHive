var user = JSON.parse(localStorage.getItem("allUserInformation"));
//var user = JSON.parse('{"user":{"_id":1,"_firstName":"Alain","_lastName":"Rakotondranaivo","_dateOfBirth":"2004-05-31","_profession":"IT student","_email":"alainricor@gmail.com","_facebook":"https:\/\/www.facebook.com\/profile.php?id=100038283579599","_github":"https:\/\/github.com\/w41k4z","_linkedin":"https:\/\/www.linkedin.com\/in\/alain-rico-rakotondranaivo-518101241\/","_phoneNumber":"0325506338","_profilPicture":"Alain.jpg"},"exp":[],"parcours":[{"_id":"1","_started":"2014-10-09","_ended":"2021-09-03","_idMember":"1","_university":"La Reussite Anosimpatrana","_degree":"Baccalaur\u00e9at D"},{"_id":"2","_started":"2022-10-19","_ended":null,"_idMember":"1","_university":"IT University Andoharanofotsy","_degree":""}],"projects":[{"_id":"1","_title":"portfolioTechzara","_description":"Creation of an administrable portfolio for the team HIVE participating the Techzara weekly challenge","_techno":"HTML5\/CSS3\/JS\/PHP\/MYSQL\/AJAX\/BOOTSTRAP\/JQUERY\/SASS"},{"_id":"2","_title":"Billiard","_description":"A 2D pool game with implementation of a championship","_techno":"JAVA\/POSTGRES\/ORACLE"},{"_id":"3","_title":"Mini social media","_description":"A little social media where we can post, react, comment, send message and search friend","_techno":"HTML5\/CSS3\/PHP\/MYSQL"},{"_id":"4","_title":"Store management","_description":"An application that manage the products, clients and members of a store. Administration panel implemented to for CRUD options and a sales follow-up per week with an auto-facturation after every transaction","_techno":"HTML5\/CSS3\/PHP\/MYSQL"},{"_id":"5","_title":"SGBD","_description":"An application of storing data(all CRUD option implemented) like ORACLE...","_techno":"JAVA"}],"skills":[{"_id":"1","_denomination":"JAVA","_typeSkills":"0","_level":"87"},{"_id":"2","_denomination":"PHP","_typeSkills":"0","_level":"60"},{"_id":"3","_denomination":"C\/C++","_typeSkills":"0","_level":"70"},{"_id":"4","_denomination":"Python","_typeSkills":"0","_level":"50"},{"_id":"5","_denomination":"Javascript","_typeSkills":"0","_level":"75"},{"_id":"6","_denomination":"REACT","_typeSkills":"0","_level":"45"},{"_id":"8","_denomination":"Dart","_typeSkills":"0","_level":"66"},{"_id":"9","_denomination":"Flutter","_typeSkills":"0","_level":"66"},{"_id":"10","_denomination":"francais","_typeSkills":"1","_level":"90"},{"_id":"11","_denomination":"english","_typeSkills":"1","_level":"92"}]}');
if (user == null) window.location.href = "../pages/Team.html";
window.addEventListener("load", () => {
    initUser();
});

function initUser() {
    setHrefValue("userFacebook", user.user._facebook);
    setHrefValue("userGitHub", user.user._github);
    setHrefValue("userLinkedIn", user.user._linkedin);
    setValue("userName", user.user._firstName + " " + user.user._lastName);
    setValue("userProfession", user.user._profession);
    setValue("userProfession_Location", user.user._profession + " Located In Our Lovely Earth");
    setValue("userBirthDay", user.user._dateOfBirth);
    setValue("userMail", user.user._email);
    setValue("userNumber", user.user._phoneNumber);
    let img = "../assets/imgs/" + user.user._profilPicture;
    document.getElementById("userPfp").src = img;
    
    setUserProjects();
    setUserParcours();
    setUserSkills(0);
    setUserSkills(1);
}

function setValue(className, value) {
    for (let i = 0; i < document.getElementsByClassName(className).length; i++) {
        document.getElementsByClassName(className)[i].innerHTML = value;      
    }
}

function setHrefValue(className, value) {
    for (let i = 0; i < document.getElementsByClassName(className).length; i++) {
        document.getElementsByClassName(className)[i].href = value;      
    }
}

function setUserParcours() {
    for (let i = 0; i < user.parcours.length; i++) {
        let h6 = document.createElement("h6");
        h6.innerHTML = user.parcours[i]._started + " / " + user.parcours[i]._started;
        let p1 = document.createElement("P");
        p1.innerHTML = user.parcours[i]._degree;
        let p2 = document.createElement("P");
        p2.className = "subtitle";
        p2.innerHTML = user.parcours[i]._university;

        document.getElementById("parcours").appendChild(h6);
        document.getElementById("parcours").appendChild(p1);
        document.getElementById("parcours").appendChild(p2);
        if(i != user.parcours.length - 1) document.getElementById("parcours").appendChild(document.createElement("hr"));
    }
}

function setUserSkills(type) {
    for (let i = 0; i < user.skills.length; i++) {
        if (user.skills[i]._typeSkills == type) {
            let h6 = document.createElement("h6");
            h6.innerHTML = user.skills[i]._denomination;
            let div = document.createElement("div");
            div.className = "progress mb-3";
            let divChild = document.createElement("div");
            divChild.className = "progress-bar bg-danger";
            divChild.role = "progressbar";
            divChild.style.width = user.skills[i]._level + "%";
            div.appendChild(divChild);

            let target = "skills " + type;
            document.getElementById(target).appendChild(h6);
            document.getElementById(target).appendChild(div);
        }
    }
}

function setUserProjects() {
    for (let i = 0; i < user.projects.length; i++) {
        let div = document.createElement("div");
        div.className = "col-md-4 col-sm-6";
        let div1 = document.createElement("div");
        div1.className = "card mb-5";

        let div11 = document.createElement("div");
        div11.className = "card-header has-icon";
        let ii = document.createElement("i");
        ii.className = "ti-write text-danger";
        div11.appendChild(ii);

        let div12 = document.createElement("div");
        div12.className = "card-body px-4 py-3";
        let h5 = document.createElement("h5");
        h5.className = "mb-3 card-title text-dark";
        h5.innerHTML = user.projects[i]._title;
        let P = document.createElement("P");
        P.className = "subtitle";
        P.innerHTML = user.projects[i]._description;
        let tech = document.createElement("p");
        tech.innerHTML = "Techno: " + user.projects[i]._techno
        div12.appendChild(h5);
        div12.appendChild(P);
        div12.appendChild(tech);

        div1.appendChild(div11);
        div1.appendChild(div12);

        div.appendChild(div1);

        document.getElementById("projects").appendChild(div);
    }   
}