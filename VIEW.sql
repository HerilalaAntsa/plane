CREATE OR REPLACE VIEW listappel AS
SELECT a.idappel, a.idclient, a.dateappel, a.appelentrant, a.dureeappel,
       a.action, a.dateaction, a.commentaireaction,
       concat(concat(c.nomclient, ' '),c.prenomclient) as fullname, ag.*,
FROM appel a
JOIN CLIENT c ON a.IDCLIENT = c.IDCLIENT
JOIN AGENT ag ON a.IDAGENT = ag.IDAGENT
ORDER BY a.dateappel DESC;

CREATE OR REPLACE VIEW listappel2 AS
SELECT a.idappel, a.idclient, a.dateappel, a.appelentrant, a.dureeappel,
       a.action, a.dateaction, a.commentaireaction,
       concat(concat(c.nomclient, ' '),c.prenomclient) as fullname, ag.*,concat(concat(ag.nom, ' '),ag.prenom) as fullnameagent,
FROM appel a
JOIN CLIENT c ON a.IDCLIENT = c.IDCLIENT
JOIN AGENT ag ON a.IDAGENT = ag.IDAGENT
ORDER BY a.dateappel DESC;

CREATE OR REPLACE VIEW listappelentrant AS
SELECT a.idappel, a.idclient, a.dateappel, a.appelentrant, a.dureeappel,
       a.action, a.dateaction, a.commentaireaction,
       concat(concat(c.nomclient, ' '),c.prenomclient) as fullname, ag.*
FROM appel a
JOIN CLIENT c ON a.IDCLIENT = c.IDCLIENT
JOIN AGENT ag ON a.IDAGENT = ag.IDAGENT
WHERE a.APPELENTRANT = TRUE
ORDER BY a.dateappel DESC;

CREATE OR REPLACE VIEW listappelsortant AS
SELECT a.idappel, a.idclient, a.dateappel, a.appelentrant, a.dureeappel,
       a.action, a.dateaction, a.commentaireaction,
       concat(concat(c.nomclient, ' '),c.prenomclient) as fullname, ag.*
FROM appel a
JOIN CLIENT c ON a.IDCLIENT = c.IDCLIENT
JOIN AGENT ag ON a.IDAGENT = ag.IDAGENT
WHERE a.APPELENTRANT = FALSE
ORDER BY a.dateappel DESC;

CREATE VIEW statistique AS
SELECT COUNT(ap.*) as quantitetotale,
	rv.quantite as rendezvous,
	r.quantite as rappeler,
	p.quantite as pasinteresse,
	a.idagent, concat(concat(a.nom, ' '),a.prenom) as fullname
FROM agent a
LEFT JOIN appel ap ON ap.idagent = a.idagent
LEFT JOIN rendezvous rv ON rv.idagent = a.idagent
LEFT JOIN rappeler r ON r.idagent = a.idagent
LEFT JOIN pasinteresse p ON p.idagent = a.idagent
GROUP BY a.idagent, a.nom, a.prenom,rendezvous,rappeler,pasinteresse;

CREATE VIEW rendezvous AS
SELECT idagent, COUNT(*) AS quantite FROM listappel WHERE action = 'rendez-vous'
GROUP BY idagent;

CREATE VIEW rappeler AS
SELECT idagent, COUNT(*) AS quantite FROM listappel WHERE action = 'rappeler'
GROUP BY idagent;

CREATE VIEW pasinteresse AS
SELECT idagent, COUNT(*) AS quantite FROM listappel WHERE action = 'pas interesse'
GROUP BY idagent;

CREATE OR REPLACE VIEW listagent AS
SELECT a.* , COALESCE(c.idclient>0, false) as enligne, l.dateappel,
l.fullname, l.ago, concat(concat(a.nom, ' '),a.prenom) as fullnameagent FROM agent a
LEFT JOIN client c ON c.isoccupe = concat(concat(a.nom, ' '),a.prenom)
LEFT JOIN lastappel l ON a.idagent = l.idagent

CREATE OR REPLACE VIEW lastappel AS
SELECT  a.idagent ,a.fullname, a.dateappel, age(now(),a.dateappel) as ago FROM listappel a
INNER JOIN (SELECT MAX(dateappel) as dateappel,idagent FROM listappel
GROUP BY idagent) m ON m.idagent = a.idagent AND m.dateappel = a.dateappel