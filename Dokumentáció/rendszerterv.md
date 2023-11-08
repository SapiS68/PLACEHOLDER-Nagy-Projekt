# Rendszerterv
## 1. A rendszer célja
A rendszer célja hogy egy webes felületet biztosítson a témával kapcsolatos érdeklődők számára. Egy regisztrációt, belépést és profil módosítását tartalmazó felhasználó rendszert biztosítson, amelyben a jogok is beállítható. Naponta frissülő tartalommal szolgálja ki az oda látogatókat, amit a megfelelő jogosultsággal az adott felhasználó szerkeszthet, beállíthat. Biztosítsa a már nem aktuális tartalmak archiváltként való megtekintését minden oldalra látogató számára. Emellett fontos, hogy egy statisztika, toplista rendszer is áljon a rendelkezésére a felhasználóknak. A weboldal adatkezelése (pl: jelszavak) legyen biztonságos.
## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters: Verebélyi Valentin
   * Product owner: Dr. Tajti Tibor Gábor
   * Üzleti szereplő: Dr. Tajti Tibor Gábor
     
### 2.2 Projektmunkások és felelőségek:
   * Frontend: Törteli Márton
   * Backend: Balázs Gábor, Tóth Csanád, Kovács Bence
   * Tesztelés: Balázs Gábor, Tóth Csanád, Kovács Bence, Törteli Márton
     
### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             2 |                      2 |                0|                   2 |
|Weboldal                  |Frontend           |         2 |             4 |                      4 |                0 |                   4|
|Weboldal                |Adatbázis                 |         3|             4 |                      4 |                0 |                   4|
|Weboldal                 |Backend              |         3 |             6 |                     6 |                0 |                   6|
|Weboldal                |Tesztelés                               |         2|             2 |                      0 |               0|                   2|

### 2.4 Mérföldkövek:
   * Prototípus átadása

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők
A weboldalt egy internetes böngészőn keresztül lehet elérni. A felhasználóknak regisztrálniuk kell, hogy használhassák az oldalt.

### 3.2 Üzleti folyamatok
Bejelentkezés után a felhasználó megpróbálhatja megoldani a mai feladványt, megváltoztathatja a jelszavát, illetve megtekintheti az archívumot és a saját statisztikáit. Az adminok ezen kívűl még tudnak új kérdéseket feltenni, a játékok adatbázisát szerkeszteni, és rendszergazdai jogosultságot adni illetve elvenni más felhasználókntól.

   * Játék: ezen menüpont megnyomása után a felhasználó megpróbálhatja megoldani a mai nap feladatát, ha még nem próbálkozott. Ellenkező esetben megnézheti a feladványhoz tartozó statisztikákat.
   * Archívum: a felhasználó itt megnézheti a korábbi feladatok archívumát és a hozzájuk tartozó statisztikákat.
   * Statisztikák: itt található a felhasználó egyéni statisztikái, amit a korábbi feladatok alapján határoz meg az oldal.
   * Beállítások: eme funkción keresztül lehet a jelszót átállítani.
   * Kijelentkezés: a jelenlegi felhasználó kijelentkezik.
   * Admin - Rendszergazdakezelés: Rendszergazdai jogosultságokat lehet változtatni.
   * Admin - Kérdőív hozzáadása: az újabb kérdéseket itt lehet szerkeszteni és hozzáadni.
   * Admin - Játék hozzáadása: az játékok adatbázisához lehet itt nevet és képet beállítani.

## 4. Követelmények

### Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Felhasználókezelés | Egy felhasználónak legyen lehetősége regisztrálni, majd azzal bejelentkezni, abból kijelentkezni, illetve saját jelszavát tudja módosítani. |
| K2 | Hozzáférési szintek definiálása | Egy felhasználó csak akkor férhessen hozzá megadott oldalakhoz, ha ahhoz hozzáférése van. Például a játékoldalt csak bejelentkezéssel, az adminkezelést pedig csak rendszergazda jogosultsággal tudhassa egy felhasználó megtekinteni. |
| K3 | Játékkal való interakció | A felhasználónak legyen lehetősége egy, az aznapi kérdőívhez tartozó játékmenetet elindítani, befejezni, ha még aznap nem fejezett egyet be. |
| K4 | Játékmenet eredményeinek megtekintése | Egy lejátszott játékmenet során legyen megengedve a felhasználónak az ahhoz tartozó statisztikák megjelenítésére. |
| K5 | Előző játékmenetek megtekintése | Az archívumból a felhasználónak legyen lehetősége megtekinteni egy előző napi kérdőívnek az eredményeit, a K4-ben kifejtettekhez hasonlóan. |
| K6 | Személyhez tartozó statisztikák megjelenítése | Nyújtsunk lehetőséget a felhasználó felé, hogy az eddigi elért átlageredményeit meg tudja tekinteni. |
| K7 | Kérdőívek hozzáadása, módosítása | Egy rendszergazda számára legyen szerkeszthető a jövőben megjelenítendő kérdőívek rekordjai. |
| K8 | Felhasználói jogok kezelése | Egy rendszergazda tudja módosítani a tőle, illetve a tulajdonoson kívül más felhasználók jogait bővíteni, illetve csökkenteni. |

### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K9 | Egyszerű design | Az oldal felülete legyen könnyű a szemeknek, legyen átlátható, egyszerűen használható. Ne legyen túldíszített, a felületek csak enyhe színeket, képelemeket alkalmazzanak. |

### Támogatott eszközök

A használt keretrendszerek platformfüggetlensége végett akármilyen korszerű szervergépre feltelepíthetőek az alkalmazott szoftverek. Kliens esetén csak egy böngészőre van szükségünk, az oldal akármilyen rendszeren megtekinthető.

## 5. Funkcionális terv

### 5.1 Rendszerszereplők
   * Felhasználó
   * Adminisztrátor

### 5.2 Menühierarchiák
   * Felhasználó:
     * Archívum
     * Sztatisztika
     * Beállítások
     * Kijelentkezés
   * Adminisztrátor:
     * Minden, ami a felhasználónak lehetséges
     * Kérdőív módosítás
     * Rendszergazda kezelő

## 6. Fizikai környezet
   * A szoftver Windows platformon készül, viszont webes felületen működik.
   * Minden kliensen szükséges egy webkliens használata, mely képes a weboldalt megjeleníteni.
   * Nincsenek megvásárolt komponensek.
   * Fejlesztői eszközök:
     * Composer
     * XAMPP
     * Node.js

## 8. Architekturális terv

### Backend
Az adatbázis szerverhez a MariaDB Servert használjuk, amit a XAMPP-on keresztül futtatunk. A JavaScript futtatási környezetét a Node.js biztosítja. Az oldal kódolásához HTML-t, PHP-t és Laravelt használunk. 

### Frontend
A megjelenést CSS-sel, HTML-lel, PHP-val és Laravellel fromázzuk.

## 9. Adatbázis terv

![adatbázis](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/database.png)

## 10. Implementációs terv
   * Adatbázis rendszer SQL nyelvben íródik, XAMPP futtatásával.
   * A felhasználói felület, maga a weboldal, PHP és HTML segítségével épül fel.

## 11. Tesztterv

A tesztelések elengedhetetlenek egy projekt fejlesztése során. Céljuk, hogy a váratlan eredményeket - másnéven 'bugokat' - észrevegyük, illetve orvosoljuk, ezért fontos, hogy tesztelésnél minden lehetséges esetet ellenőrizzünk. Ezeket a teszteket minden csapattárs végrehajtja, majd az észrevételeit egy-egy fájlba dokumentálják.

### Tesztesetek

 | Teszteset | Elvárt eredmény | 
 |-----------|-----------------| 
 | **BEJELENTKEZÉS**: Hitelesítési adatok helytelenül való megadása | Az oldal hibaüzenetet jelez a felhasználó felé, hogy a megadott felhasználónév és/vagy jelszó helytelenül lett megadva. |
 | **BEJELENTKEZÉS**: Hitelesítési adatok helyes megadása | Az oldalnak át kell irányítódnia a játékoldalra, a fenti menüsor jobb oldalán a megadott felhasználó nevének kell megjelenni. Ha a felhasználó rendszergazdai jogosultságokkal rendelkezik, bal oldalt meg kell jelennie a hozzá tartozó oldalak (kérdőívhozzáadás, rendszergazdakezelés) ikonjainak is. |
 | **BEJELENTKEZÉS**: Oldal elérése, már bejelentkezett felhasználónál | Az oldalnak át kell irányítódnia a játékoldalra, és hibaüzenetként ki kell írnia, hogy már be van lépve egy felhasználó. |
 | **REGISZTRÁCIÓ**: Rövid, hosszú, vagy helytelen karaktereket tartalmazó felhasználónév megadása | Hibaüzenetet kell jelezni a felhasználó felé, hogy a felhasználónév nem felel meg a követelményeknek. |
 | **REGISZTRÁCIÓ**: Nem egyező jelszavak megadása | Hibaüzenetet kell jelezni, hogy a jelszó és a jelszóellenőrző mezők tartalma eltér egymástól. |
 | **REGISZTRÁCIÓ**: Formahelyességtől eltérő e-mail cím megadása | Hibaüzenetet kell jelezni a felhasználó felé, hogy az e-mail címnek valósnak kell lennie. |
 | **REGISZTRÁCIÓ**: Üres mezővel/mezőkkel való regisztrálási próbálkozás | Jelezni kell a felhasználó felé, hogy a mezők egyike se lehet kitöltetlen. |
 | **REGISZTRÁCIÓ**: Regisztráció helyes adatokkal, már létező felhasználónévvel/e-mail címmel | Az oldalnak jeleznie kell, hogy az adott felhasználónévvel és/vagy e-mail címmel már regisztráltak a korábbiakban. |
 | **REGISZTRÁCIÓ**: Regisztráció helyes adatokkal | Az oldalnak át kell irányítódnia a bejelentkezési oldalra, amelyben üzenet formájában megerősítődik a sikeres regisztrációs kísérlet. |
 | **BELSŐ OLDALAK**: Oldalak elérése, sikeres bejelentkezés nélkül | Az oldalnak át kell irányítódnia a bejelentkezéshez, ahol tudatjuk a felhasználóval, hogy az oldal eléréséhez először be kell jelentkeznie. |
 | **ADMIN OLDALAK**: Oldalak elérése, jogosultságok megléte nélkül | Az oldalnak át kell irányítódnia a bejelentkezéshez, ahol tudatjuk a felhasználóval, hogy az oldalhoz nincsen hozzáférése. |
 | **MENÜSOR**: Logóra való rákattintás | Az oldalnak át kell irányítódnia a játékoldalra, ahol a mai játékmenet, vagy annak az eredménye jelenik meg. |
 | **MENÜSOR**: Naptár ikonra való rákattintás | Az oldalnak át kell irányítódnia az archívum oldalra. |
 | **MENÜSOR**: Oszlopdiagram ikonra való rákattintás | Az oldalnak át kell irányítódnia a felhasználói statisztika oldalra. |
 | **MENÜSOR**: Adatbázis ikonra való rákattintás | Az oldalnak meg kell próbálnia átirányítódni a kérdőívmódosító oldalra. |
 | **MENÜSOR**: Személy ikonra való rákattintás | Az oldalnak meg kell próbálnia átirányítódni a rendszergazdakezelő oldalra. |
 | **MENÜSOR**: Fogaskerék ikonra való rákattintás | Az oldalnak meg át kell irányítódnia a jelszómódosító oldalra. |
 | **MENÜSOR**: Ajtó ikonra való rákattintás | A hitelesítő adatokat el kell dobnia az oldalnak (vagyis ki kell jelentkeznie), majd át kell irányítódnia a bejelentkezés oldalra. |
 | **JÁTÉKOLDAL**: Játékoldalra való átirányítás, befejezetlen játékmenet esetén | Az oldalnak meg kell jelenítenie az eddigi képernyőképeket, a tipp beírására szolgáló szövegmezőt, illetve az eddigi próbálkozások listáját, a hátramaradt próbálkozások kiírásával együtt. |
 | **JÁTÉKOLDAL**: Játékoldalra való átirányítás, befejezett játékmenet esetén | Az oldalnak meg kell jelenítenie a játékmenethez tartozó globális, illetve - ha a felhasználó részt vett a játékmenetben - a felhasználói statisztikát is. |
 | **JÁTÉKOLDAL**: Helytelen tipp megadása, a próbálkozáslimit átlépése nélkül | A képernyőképek számának eggyel bővülnie kell, a próbálkozáslistában a meg kell jelennie a legutóbbi tippnek, illetve a hátramaradt próbálkozások számát is jelezni kell a felhasználó felé. |
 | **JÁTÉKOLDAL**: Helytelen tipp megadása, a próbálkozáslimit átlépésével | Az oldalnak frissítődnie kell, ilyenkor ki kell írnia a játékmenethez tartozó statisztikákat. |
 | **JÁTÉKOLDAL**: Helyes tipp megadása | Az oldalnak frissítődnie kell, ilyenkor ki kell írnia a játékmenethez tartozó statisztikákat. |
 | **ARCHÍVUM**: Dátumra való kattintás | Az oldalnak át kell irányítódnia a játékoldalra, ahol az adott dátum eredményeinek kell megjelennie. |
 | **ARCHÍVUM**: Dátumra való kattintás | Az oldalnak át kell irányítódnia a játékoldalra, ahol az adott dátum eredményeinek kell megjelennie. |
 | **JELSZÓMÓDOSÍTÁS**: Üres mezőkkel való próbálkozás | Az oldalnak hibaüzenetet kell jeleznie, hogy a mezők egyike sem lehet üres. |
 | **JELSZÓMÓDOSÍTÁS**: Helytelen régi jelszó megadása | Az oldalnak hibaüzenetet kell jeleznie, hogy a megadott régi jelszó és a jelenlegi jelszó nem egyezik egymással. |
 | **JELSZÓMÓDOSÍTÁS**: Helyes régi jelszó megadása | Az adatbázisban tárolt jelszónak frissülnie kell, majd az oldalnak át kell irányítódnia a játékoldalra, jelezve a felhasználónak, hogy a jelszómódosítás sikeresen megtörtént. |
 | **JELSZÓMÓDOSÍTÁS**: Helytelen régi jelszó megadása | Az oldalnak hibaüzenetet kell jeleznie, hogy a megadott régi jelszó és a jelenlegi jelszó nem egyezik egymással. |
 | **KÉRDŐÍVMÓDOSÍTÁS**: Adatok lekérése, helytelen dátummal | A megadott adatoknak változatlannak kell maradnia, és jelezni kell a felhasználó felé, hogy az adott dátumon nem léteznek. |
 | **KÉRDŐÍVMÓDOSÍTÁS**: Adatok lekérése, helyes dátummal | A megadott adatoknak meg kell változniuk az adatbázisban tároltak alaján, a képmezőknek kattintáskor az eddig tárolt képeket új fülön meg kell tudniuk nyitni. |
 | **KÉRDŐÍVMÓDOSÍTÁS**: Adatok beküldése, mai vagy azelőtti dátummal | Az adatbázis tartalmának változatlannak kell maradnia, hibaként jelezni kell a felhasználónak, hogy az épp lezajló/már lezajlott naphoz nem tud kérdőívet hozzáadni/módosítani. |
 | **KÉRDŐÍVMÓDOSÍTÁS**: Adatok beküldése, ütköző dátummal | A felhasználó számára meg kell jelennie egy megerősítőablaknak, hogy az adott dátumhoz tartozó kérdőívet felül szeretné-e írni. |
 | **KÉRDŐÍVMÓDOSÍTÁS**: Megerősítés elutasítása | Az adatbázis tartalmának változatlannak kell maradnia, illetve a mezőkben megadott adatoknak is. |
 | **KÉRDŐÍVMÓDOSÍTÁS**: Megerősítés elfogadása | Az adatbázis tartalmának frissülnie kell, illetve magának az oldalnak is. |
 | **KÉRDŐÍVMÓDOSÍTÁS**: Adatok beküldése, dátumütközés nélkül | Az adatbázis tartalmának egy rekorddal bővülnie kell, illetve az oldalnak frissülnie kell. |
 | **RENDSZERGAZDAKEZELÉS**: Nem létező felhasználó hozzáadása | A felhasználó felé jelzést kell küldeni, hogy az adott felhasználónév nincs az adatbázisban. |
 | **RENDSZERGAZDAKEZELÉS**: Létező, adminisztrációs jogokkal rendelkező felhasználó hozzáadása | A felhasználó felé jelzést kell küldeni, hogy az adott felhasználónak már rendelkezik rendszergazdai jogosultságokkal. |
 | **RENDSZERGAZDAKEZELÉS**: Létező, adminisztrációs jogokkal nem rendelkezó felhasználó hozzáadása | A szövegmező alatti rendszergazdai mezőnek bővülnie kell, az adatbázis tartalmának frissülésével. |
 | **RENDSZERGAZDAKEZELÉS**: Rendszergazdai jogosultság eltávolítása | A rendszergazda listájának fogyatkoznia kell eggyel, az adatbázis tartalmának frissülésével. |

### A tesztelési jegyzőkönyv kitöltésére egy sablon:

**Tesztelő:** Vezetéknév Keresztnév

**Tesztelés dátuma:** Év.Hónap.Nap

Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
----------|--------------|---------------|----------|-----------
#01 | Bejelentkezés, helytelen adatokkal | Az oldalnak hibaüzenetet kell jeleznie, hogy a megadott felhasználónév és/vagy jelszó helytelenül lett megadva | Az oldal hibaüzenetet jelenített meg | Nem találtam problémát.
#02 | Bejelentkezés, helyes adatokkal | Az oldalnak át kell irányítódnia a játékoldalra, a menüsor jobb oldalán a beírt felhasználó nevének kell megjelennie | Bejelentkezés esetén nem tér át a játék oldalára automatikusan | **Javítandó**: Sikeres bejelentkezés át kell irányulni a főoldalra.
... | ... | ... | ... | ...

## 12. Telepítési terv

Fizikai telepítési terv: Az oldal eléréséhez internet kapcsolatra van szükség.

Szoftver telepítési terv: Egy az eszközre telepített, támogatott internetes böngésző.

## 13. Karbantartási terv

Minden esetben fontos ellenőrizni az alábbiakat:
- A szervergép fut, a külvilág hozzá tud a rajta futó oldalhoz férni
- Az oldal-adatbázis kommunikáció hibátlanul működik, a módosítások az adatbázisban elmentődnek
- A szerver-kliens kommunikáció nem lassú, gyorsan tud reagálni a szerver a kliens interakcióira, illetve a szerver a megfelelő visszajelzést küldi vissza

Figyelmet kell biztosítani a kérdőívek folyamatos feltöltésére is. A játékmenetek készítése nem történik automatikusan, így ezt a feladatot rendszergazdáknak kell elvégezniük. Minél kevesebb kérdőívet teszünk fel egyszerre a rendszerbe, annál gyakrabban kell ezt elvégezni.

Figyelembe kell venni a felhasználó által jött visszajelzést is az oldallal kapcsolatban.
Ha hibát talált, mielőbb orvosolni kell, lehet az:
*	Működéssel kapcsolatos
*	Kinézet, dizájnnal kapcsolatos

Adjunk lehetőséget a felhasználóknak ötletek adására is, amellyel bővíthetjük a weboldal funkcióit. Ezeket implementáljuk be minél hamarabb, hogy a felhasználók a lehető leggyorsabban férjenek hozzá az új élményekhez.
