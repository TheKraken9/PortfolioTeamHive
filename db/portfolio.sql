create database portfolio;
\c portfolio



create table Membre(
	id int primary key,
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
    check(dateNaissance <= current_date)
);

create sequence Membre_id;

insert into Membre values(
    nextval('Membre_id'), 
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
    id int primary key,
    denomination varchar(25),
    typeSkill int,
    check(typeSkill >= 0)
);
create sequence Skills_id;
insert into Skills values(
    nextval('Skills_id'), 
    'JAVA', 
    0
);
insert into Skills values(
    nextval('Skills_id'), 
    'PHP', 
    0
);
insert into Skills values(
    nextval('Skills_id'), 
    'C/C++', 
    0
);
insert into Skills values(
    nextval('Skills_id'), 
    'Python', 
    0
);
insert into Skills values(
    nextval('Skills_id'), 
    'Javascript', 
    0
);
insert into Skills values(
    nextval('Skills_id'), 
    'REACT', 
    0
);
insert into Skills values(
    nextval('Skills_id'), 
    'Codeigniter', 
    0
);
insert into Skills values(
    nextval('Skills_id'), 
    'francais', 
    1
);
insert into Skills values(
    nextval('Skills_id'), 
    'english', 
    1
);

create table membre_skills(
    idmembre int  not null references membre(id),
    idSkills int  not null references Skills(id),
    percentage int,
    check(percentage <= 100 AND percentage > 0)
);
insert into membre_skills values(
    1,
    1,
    67
);
insert into membre_skills values(
    1,
    2,
    78,
);
insert into membre_skills values(
    1,
    3,
    54
);
insert into membre_skills values(
    1,
    4,
    99
);
insert into membre_skills values(
    1,
    5,
    70
);
insert into membre_skills values(
    1,
    6,
    50
);
insert into membre_skills values(
    1,
    7,
    66
);
insert into membre_skills values(
    1,
    8,
    21
);
insert into membre_skills values(
    1,
    9,
    16
);

create table parcours(
    id int primary key,
    debut date,
    fin date default current_date,
    idmembre int not null references membre(id),
    ecole varchar(50),
    diplome varchar(50)
);
create sequence parcours_id;
insert into parcours values(
    nextval('parcours_id'), 
    '2011-10-09', 
    '2018-09-03',
    1,
    'Institution Sainte Famille Mahamasina',
    'Baccalauréat C'
);
insert into parcours values(
    nextval('parcours_id'), 
    '2019-02-01', 
    '2020-10-03',
    1,
    'MIPC,Fac Science,Ankatso',
    ''
);

insert into parcours(id,debut,idmembre,ecole,diplome) values(
    nextval('parcours_id'), 
    '2020-10-03',
    1,
    'IT University Andoharanofotsy',
    ''
);


create table Experience(
    id int primary key,
    idmembre int  not null references membre(id),
    debut date,
    fin date,
    titre varchar(50),
    descript text,
    Techno varchar(100)
);
create sequence Experience_id;

create table Projet(
    id int primary key,
    titre varchar(50),
    descript text,
    Techno varchar(100)
);
create sequence Projet_id;
insert into Projet values(
    nextval('Projet_id'), 
    'portfolioTechzara',
    'Création d un portfolio administrable pour la team HIVE participant au weekly challenge de techzara',
    'HTML5/CSS3/PHP/POSTGRESQL'
);

insert into Projet values(
    nextval('Projet_id'), 
    'SocketSGBD',
    'Création d un systeme de gestion de base de donné simplifier en utilisant une technologie basée sur Socket',
    'JAVA'
);
insert into Projet values(
    nextval('Projet_id'), 
    'ChessSwing',
    'Création d un table de jeu d echec opposant 2 joueurs et tenant en compte des règles du jeu',
    'JAVA/SWING/POSTGRESQL/ORACLE'
);
insert into Projet values(
    nextval('Projet_id'), 
    'Bibliothèque',
    'Création d un systeme de gestion de bibliothèque utilisant la technologie web et suivant l architecture MVC',
    'HTML5/CSS3/BOOTSRAP3/JAVA EE/Servlet/POSTGRESQL'
);
insert into Projet values(
    nextval('Projet_id'), 
    'Gestion RH',
    'developpement du module de gestion RH d un systeme de gestion d entreprise avancé utilisant la technologie web et suivant l architecture MVC',
    'PHP/CODEIGNITER/POSTGRESQL/HTML5/CSS3/BOOTSTRAP4'
);

create table membre_projet(
    idmembre int  not null references membre(id),
    idprojet int  not null references projet(id)
);
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