# Rendszerterv
## 1. A rendszer célja

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

### 3.2 Üzleti folyamatok

## 4. Követelmények

### Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | ... | ... |

### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K4 | ... | ... |

### Támogatott eszközök

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
   * A szoftver Windows platformon készül, viszont wbes felületen működik.
   * Minden kliensen szükséges egy webkliens használata, mely képes a weboldalt megjeleníteni.
   * Nincsenek megvásárolt komponensek.
   * Fejlesztői eszközök:
     * Composer
     * XAMPP
     * NodeJS

## 8. Architekturális terv

### Webszerver

### Adatbázis rendszer

### A program elérése, kezelése

## 9. Adatbázis terv

## 10. Implementációs terv

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

Fizikai telepítési terv: 

Szoftver telepítési terv: 

## 13. Karbantartási terv

Fontos ellenőrizni:
...

Figyelembe kell venni a felhasználó által jött visszajelzést is a programmal kapcsolatban.
Ha hibát talált, mielőbb orvosolni kell, lehet az:
*	Működéssel kapcsolatos
*	Kinézet, dizájnnal kapcsolatos
