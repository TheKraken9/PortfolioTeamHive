function displayDebriefs(debriefList){
    var wrapper=document.getElementById("wrapper");
    for (let index = 0; index < debriefList.length; index++) {
        var col=document.createElement("div");
        col.className = (index != debriefList.length)?"col":"col last";
        var profil=document.createElement("div");
        profil.className = "profil";
        var h2=document.createElement("h2");
        h2.innerHTML = debriefList[index]['nom'] + " " +debriefList[index]['prenom'];
        var p=document.createElement("p");
        p.innerHTML = debriefList[index]['profession'];
       var href = document.createElement("a");
       href.className = "more";
       href.href = "#";
       href.setAttribute('onclick','sendData('+(index+1)+')');
       href.innerHTML = "read more";

        col.appendChild(profil);
        col.appendChild(h2);
        col.appendChild(p);
        col.appendChild(href);
        wrapper.appendChild(col);
    }
}