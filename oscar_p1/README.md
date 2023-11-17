# SIGNIN I SIGNUP AMB LARAVEL
**Nom: Oscar Pérez**

## Feina Individual

Crear les vistes i les seves rutes del **sign in** i **sign up**. Per això caldrà fer el següent:

- Crear les dues views corresponents (signin i signup).
- Crear les rutes (path) amb la següent nomenclatura a **web.php**.
/nomalumna/signin
/nomalumna/signup
Crear el controlador (de nom SignController) que, segons la ruta renderitzarà la view corresponent.
Enllaç entre views.


  - Si la consulta retorna un resultat:
    - Si el rol és *estudiant*; mostrarà per pantalla: el nom, cognom, email.
    - Si el rol és *professor*; mostrarà el nom i cognom del professor i mostrarà la informació de tots els usuaris de les BBDD.

  - En el cas de que no sigui correcte:
    - Tornarà a la pàgina de login i apareixerà un error de "Login incorrecte".

- Haureu de crear i fer servir una funció per fer la consulta de tots els usuaris quan el rol és professor.
- Les constants de la connexió s'haurà de fer servir a través d’un fitxer extern dbConf.php
- S’haurà de fer servir el try, catch en l’arxiu de connexió.
- Les vistes (del la pàgina login, la pàgina inserció de dades i la pàgina de mostra de dades) s’hauran de posar en una carpeta de nom vistes.




Crear les dues views corresponents (signin i signup).
Crear les rutes (path) amb la següent nomenclatura a web.php.
/nomalumna/signin
/nomalumna/signup
Crear el controlador (de nom SignController) que, segons la ruta renderitzarà la view corresponent.
Enllaç entre views.

Afegir paràmetres a signin i signup. Aquests paràmetres ens ajudaran a construir els títols de cada pàgina. 

signin => Títol Iniciar sessió de l’usuari, son 4 paraules, per tant, de la ruta s’hauran d’enviar 4 paràmetres (iniciar, sessió, de i l’usuari).
signup => Titol Creació d’usuari nou. son 3 paraules, per tant, de la ruta s’hauran d’enviar 3 paràmetres (creació, d’usuari i nou).