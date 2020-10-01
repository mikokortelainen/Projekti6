# Projekti6
Tehtävänä oli tehdä sivu missä voi ilmottautua keksimääsi tapahtumaan.
Kun lomake on lähetetty se lähettää siinä olevat tiedot databaseen.

Muokkaa `send.php`- tiedostosta tarvittavat asiat.



## SQL koodit databasen ja tablen tekemiseen

```
CREATE DATABASE ilmoitus;
```


´´´
CREATE TABLE tiedot
(
sukunimi varchar(255),
etunimi varchar(255),
osoite varchar(255),
postinumero varchar(255),
puhelin INT(255),
sposti varchar(255) PRIMARY KEY,
svuosi INT(255)
);
´´´
