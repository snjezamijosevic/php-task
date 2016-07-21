# php-task
Aplikacija koja samo registriranim korisnicima daje mogućnost vidjeti neki tekst.
Korisnik se može registrirati klikom na gumb za registraciju (novi korisnik) i ispunjavanjem
forme. Njegovi se podaci upisuju u bazu (kod za bazu je mojaproba.sql). Prilikom registracije
dobije svoj ID s kojim se logira, a lozinka je ona koju je sam naveo u formi za registraciju.
Prilikom upisivanja u bazu, lozinka se kriptira (md5), te se tako unosi u bazu.

Logirani korisnik može vidjeti svoj profil (na kojem je tekst u onoj boji koju je naveo kao
svoju omiljenu boju), a boja pozadine profila je crna, te stranicu za registrirane korisnike
(na njoj je rečenica "It works!", te gumbi na profil i za odjavu).

stranica za prijavu je prijava.php.


