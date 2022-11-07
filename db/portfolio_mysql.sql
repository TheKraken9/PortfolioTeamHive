create database portfolio;
use portfolio;



create table Membre(
	id int primary key auto_increment,
	nom varchar(50) not null,
    prenom varchar(75),
    dateNaissance date not null,
    profession varchar(75),
    Email varchar(75),
    Facebook varchar(75),
    GitHub varchar(75),
    Linkedin varchar(75),
    tel varchar(13),
    pfp varchar(100),
    check(dateNaissance <= (select curdate()))
);

-- Alain --
insert into Membre values(
    null, 
    'Rakotondranaivo', 
    'Alain', 
    '2004-05-31',
    'IT student',
    'alainricor@gmail.com',
    'https://www.facebook.com/profile.php?id=100038283579599',
    'https://github.com/w41k4z',
    'https://www.linkedin.com/in/alain-rico-rakotondranaivo-518101241/',
    '0325506338',
    'Alain.jpg'
);

-- Ellias --
insert into Membre values(
    null, 
    'Harivony', 
    'Ellias', 
    '2002-12-10',
    'IT student',
    'harivonyellias@yahoo.com',
    'https://www.facebook.com/manoa.rakotomavo.1',
    'https://github.com/HarivonyEllias',
    'https://www.linkedin.com/in/harivony-ellias-9a1911244/',
    '0333797650',
    'Ellias.jpg'
);

-- Yasser --
insert into Membre values(
    null,
    'Andriamiarisoa', 
    'Yasser', 
    '2001-08-15',
    'Etudiant en developpement Logiciel',
    'andriamiarisoa.yasser@gmail.com',
    'https://www.facebook.com/yasser.andriamiarisoa/',
    'https://github.com/Andriamiarisoa',
    'https://www.linkedin.com/in/yasser-andriamiarisoa-a7a475238/',
    '',
    ''
);


create table Skills(
    id int primary key auto_increment,
    denomination varchar(25),
    typeSkill int,
    check(typeSkill >= 0)
);
insert into Skills values(
    null,
    'JAVA', 
    0
);
insert into Skills values(
    null,
    'PHP', 
    0
);
insert into Skills values(
    null,
    'C/C++', 
    0
);
insert into Skills values(
    null,
    'Python', 
    0
);
insert into Skills values(
    null,
    'Javascript', 
    0
);
insert into Skills values(
    null,
    'REACT', 
    0
);
insert into Skills values(
    null,
    'Codeigniter', 
    0
);
insert into Skills values(
    null,
    'Dart', 
    0
);
insert into Skills values(
    null,
    'Flutter', 
    0
);

insert into Skills values(
    null,
    'francais', 
    1
);
insert into Skills values(
    null,
    'english', 
    1
);

create table membre_skills(
    idmembre int  not null references membre(id),
    idSkills int  not null references Skills(id),
    percentage int,
    check(percentage <= 100 AND percentage > 0)
);

-- Alain --
insert into membre_skills values(
    1,
    1,
    87
);
insert into membre_skills values(
    1,
    2,
    60
);
insert into membre_skills values(
    1,
    3,
    70
);
insert into membre_skills values(
    1,
    4,
    50
);
insert into membre_skills values(
    1,
    5,
    75
);
insert into membre_skills values(
    1,
    6,
    45
);
insert into membre_skills values(
    1,
    8,
    66
);
insert into membre_skills values(
    1,
    9,
    66
);
insert into membre_skills values(
    1,
    10,
    90
);
insert into membre_skills values(
    1,
    11,
    92
);

create table parcours(
    id int primary key auto_increment,
    debut date,
    fin date ,
    idmembre int not null references membre(id),
    ecole varchar(50),
    diplome varchar(50)
);

-- Alain --

insert into parcours values(
    null,
    '2014-10-09', 
    '2021-09-03',
    1,
    'La Reussite Anosimpatrana',
    'Baccalauréat D'
);

-- Ellias --

insert into parcours values(
    null,
    '2016-10-10', 
    '2020-03-24',
    2,
    'LSFXA',
    'Baccalauréat D'
);

insert into parcours(id,debut,idmembre,ecole,diplome) values(
    null,
    '2022-10-19',
    1,
    'IT University Andoharanofotsy',
    ''
);


create table Experience(
    id int primary key auto_increment, 
    idmembre int  not null references membre(id),
    debut date,
    fin date,
    titre varchar(50),
    descript text,
    Techno varchar(100)
);

create table Projet(
    id int primary key auto_increment,
    titre varchar(50),
    descript text,
    Techno varchar(100)
);

insert into Projet values(
    null,
    'portfolioTechzara',
    'Creation of an administrable portfolio for the team HIVE participating the Techzara weekly challenge',
    'HTML5/CSS3/JS/PHP/MYSQL/AJAX/BOOTSTRAP/JQUERY/SASS'
);

insert into Projet values(
    null,
    'Billiard',
    'A 2D pool game with implementation of a championship',
    'JAVA/POSTGRES/ORACLE'
);

insert into Projet values(
    null,
    'Mini social media',
    'A little social media where we can post, react, comment, send message and search friend',
    'HTML5/CSS3/PHP/MYSQL'
);

insert into Projet values(
    null,
    'Store management',
    'An application that manage the products, clients and members of a store. Administration panel implemented to for CRUD options and a sales follow-up per week with an auto-facturation after every transaction',
    'HTML5/CSS3/PHP/MYSQL'
);

insert into Projet values(
    null,
    'SGBD',
    'An application of storing data(all CRUD option implemented) like ORACLE...',
    'JAVA'
);

insert into Projet values(
    null,
    'SocketSGBD',
    'Création d un systeme de gestion de base de donné simplifier en utilisant une technologie basée sur Socket',
    'JAVA'
);
insert into Projet values(
    null,
    'ChessSwing',
    'Création d un table de jeu d echec opposant 2 joueurs et tenant en compte des règles du jeu',
    'JAVA/SWING/POSTGRESQL/ORACLE'
);
insert into Projet values(
    null,
    'Bibliothèque',
    'Création d un systeme de gestion de bibliothèque utilisant la technologie web et suivant l architecture MVC',
    'HTML5/CSS3/BOOTSRAP3/JAVA EE/Servlet/POSTGRESQL'
);
insert into Projet values(
    null,
    'Gestion RH',
    'developpement du module de gestion RH d un systeme de gestion d entreprise avancé utilisant la technologie web et suivant l architecture MVC',
    'PHP/CODEIGNITER/POSTGRESQL/HTML5/CSS3/BOOTSTRAP4'
);

create table membre_projet(
    idmembre int  not null references membre(id),
    idprojet int  not null references projet(id)
);

-- Alain --

insert into membre_projet values(
    1,
    1
);

insert into membre_projet values(
    1,
    2
);
insert into membre_projet values(
    1,
    3
);
insert into membre_projet values(
    1,
    4
);
insert into membre_projet values(
    1,
    5
);

-- Ellias --
insert into membre_projet values(
    2,
    1
);
insert into membre_projet values(
    2,
    2
);
insert into membre_projet values(
    2,
    3
);
insert into membre_projet values(
    2,
    5
);


