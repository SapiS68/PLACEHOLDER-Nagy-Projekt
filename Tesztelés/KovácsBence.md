# Tesztjegyzőkönyv

Teszteléseket végezte: Kovács Bence

Operációs rendszer: OS (Brave v1.61.101)

Ebben a dokumentumban lesz felsorolva az elvégzett tesztek elvárásai és eredményei, illetve időpontjai (Alfa, Béta és Végleges verzió).

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| #01 | 2023.11.14. | Bejelentkezés hibakezelés kiíratása. | A hibák megjelennek, egyszerre több helyen is. | A formázás nem tökéletes. |
| #02 | 2023.11.25. | Jelszómódosítás. | Jelszó módosítás frissül az adatbázisban is, megfelelően visszaküldd adatot a felhasználónak. | Nem találtam problémát. |
| #03 | 2023.11.25. | Auto-complete tesztelése. | Kiíródik az adatbázisban a beírt névhez legközelebbi találatok. | Kissé inreszponzív, viszont helyesen működik. |

Az Alfa tesztelés során a vizsgált elemek között volt ami nem megfelelően működött, ez a későbbiek során javításra szorul.

Következő tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.
## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| #01 | 2023.12.10. | Felhasználói adatok lekérése. | Hiba oldalt jelenít meg, nem jó a lekérés. | Hibás lekérés, mivel nem jó a query. |
| #02 | 2023.12.11. | Játék cover feltöltése. | Minden képet sikeresen lement lokálisan. | Nem találtam hibát. |
| #03 | 2023.12.11. | Játék cover újra megadása. | A megadott képeket felül írja, a többit megtartja. | Nem találtam hibát. |

A Béta teszt során akadtan hibák, mely(ek) javításra szorulnak.

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerültek.

## Végleges teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| #01 | 2023.12.13. | Helytelen felhasználó megadása rendszergazdakezelő oldalon. | Weboldal megfelelően lekezeli a hibát, nem dob át a hibakezelő oldalra. | Nem találtam problémát. |
| #02 | 2023.12.13. | Admin megadása rendszergazdakezelő oldalon. | Weboldal lekezeli a hibát, nem adja hozzá megint az admint. | Nem találtam problémát. |
| #03 | 2023.12.13. | Saját felhasználó törlése rendszergazdakezelő oldalon. | Weboldal lekezeli a hibát, nem tudod saját magadat törölni. | Nem találtam problémát. |
| #04 | 2023.12.13. | Menüsor működése. | Menüsorban szereplő összes gomb, menüopció működőképes. | Nem találtam problémát. |

A Végleges teszt lezajlott és minden funkció rendesen működik, esztétikailag is megfelelő a program.

Átadásra készen áll a megrendelőnek.

Tesztelést végezte és írta: Kovács Bence

Befejezve: 2023.12.13.
