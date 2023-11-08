# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása
A framed.wtf oldalon található minta alapjára készül a weboldal. Az oldal célja játékos, filmek címét kell kitalálni egy megadott számú képkivágás alapján. Az előzőleg kiválaszott filmek megtekinthetőek egy archívumban, melyek lineárisan vannak sorszámozva. Minden felhasználó megtekintheti saját statisztikáit, mely a helyes találatok számát, találati arányt, és egyéb információkat jelenítenek meg. Nincsenek regisztrált felhasználók, így globális ranglista sincs, mely hiányában a pontszámok összehasonlítása nem lehetséges.

## 2. Vágyálomrendszer leírása
Az elkészíteni kívánt oldal célja a fent olvasható minta alapját kiegészíteni regisztrált felhasználókkal és globális statisztikával. Az oldal tartalma regisztráció után érhető el. Videójátékokat kell kitalálni képkivágások alapján, a játék végén pedig statisztika készül teljesítményünkről. Az előző játékok egy archívumban visszanézhetőek, mivel minden nap új játékot kell kitalálni. Az adminisztrátorok képesek egyes komponenseket szerkeszteni.

## 3. Jelenlegi üzleti folyamatok modellje
Napjainkban az átlag figyelmi idő fokozatosan csökken, illetve egyre több időt töltünk az interneten, amit szinte bárhol, bármikot elérhetünk, ezen felül rengeteget kell dolgoznunk. Ebből adódan elég gyakori, hogy munka közbeni szünetben vagy szabadidőnkben valamilyen rövid, időpocsékoló folyamatot végzünk.

## 4. Igényelt üzleti folyamatok modellje
![folyamatmodell](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/folyamatmodell.png)

## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Jogosultság | Regisztráció | A felhasználó beregisztrálhat e-mail cím, felhasználónév és jelszó megadása után. Ha az e-mail cím vagy a felhasználónév használatban van már, akkor a felhasználó egy hibaüzenetet kap. |
| K2 | Jogosultság | Bejelentkezés | A felhasználó bejeltkezhet e-mail cím vagy felhasználónév és a jelszó megadásával. Ha valamelyiket hibásan adja meg, akkor a felhasználó egy hibaüzenetet kap. |
| K3 | Jogosultság | Jogosultsági szintek | -Owner: admin, akinek a jogosultságát nem lehet módosítani. -Admin: új feladványok készítése, játék adatbázis szerkesztése, rendszergazdai jogosultság kezelés -Felhasználó: Napi feladvány megoldása, archivum és statisztikák megtekintése, beállítások módosítása |
| K4 | Modifikáció | Felhasználói beállítások | A felhasználó át tudja állítani a jelszavát. |
| K5 | Modifikáció | Rendszergazdai jogosultság állítása | Az adminok át tudják állítani, hogy ki lehet még admin. |
| K6 | Modifikáció | Új kérdőív | Admin új feladványt készíthet, illetve egy már létezőt módosíthat. |
| K7 | Modifikáció | Játékok adatbázisa | Admin új játékot vehet fel az adatbázisba, vagy pedig szerkeszthet egy már létező játékot. |
| K8 | Modifikáció | Új jelszó kérése | Amennyiben a felhasználó elfelejtette a jelszavát, akkor az e-mail címére egy automatizált üzenetet küld a rendszer egy új jelszóval. |
| K9 | Statisztika | Egyéni statisztika | A már kitöltött kérdőívek alapján a rendszer közli a felhasználóval a korábbi teljesítményét. |
| K10 | Statisztika | Napi statisztika | A játék befejeztével a rendszer közli a felhasználóval, hogy aznap korábban milyen teljesítményt értek el más felhasználók. |
| K11 | Archívum | Archívum megtekintése | A felhasználó megtekintheti a korábbi kérdéseket és a hozzájuk kapcsolódó statisztikát. |
| K12 | Archívum | Archiválás | Az idő lejártával a rendszer automatikusan archiválja az aznapi feladványt és a statisztikát. |
| K13 | Felület | Játékfelület | A felhasználó a napi feladatot kitalálhatja, illetve megtekintheti a hozzátartozó statisztikát a próbálkozása után. |

## 6. Használati esetek

- **Újonnan érkezők, nem bejelentkezett felhasználók**: El tudja érni a regisztrációs, illetve a bejelentkezési oldalt, ahol új fiókot tud létrehozni, vagy meglévővel tud belépni.
- **Bejelentkezett felhasználók**: Naponként egy játékmenetet tud lejátszani, illetve meg tudja tekinteni a saját és globális statisztikáit, illetve az előzőleg lejátszódott játékmenetekhez kapcsolatos információkat (képek, statisztikák stb.).
- **Rendszergazdák**: Átlagos felhasználók funkcionalitásain kívül következő napokra tudnak létrehozni/módosítani kitalálandókat, illetve más felhasználók jogosultságait tudják szerkeszteni.

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

K1, K2: A weboldalnak ez a kezdőlapja. Ahhoz, hogy az oldal többi részét a felhasználó elérhesse, be kell jelentkeznie. Ha még nincs fiókja, akkor bejelentkezés előtt még regisztrálnia is kell.
K3, K5: A rendszergazdai jogosultságok működéséhez szükséges.
K4, K8: A jelszavak kezeléséhez kell, illetve biztonságosabbá is teszi az oldalt.
K6, K7: Ezek a felületek az adminok számára láthatóak. Ezen menüpontok használatával képesek új feladványokat adni.
K9: A felhasználó megtekintheti a profilja oldalán.
K11, K12: A felhasználó egyéni statisztikáinak a számításához van.
K10, K13: A játékhoz vannak. A játékos a felületet használja, hogy megnézze a napi feladatot, illetve, hogy válaszoljon rá, majd utána megtekintheti a napi statisztikát.

## 8. Képernyőtervek

### Regisztrációs oldal
![regisztráció](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/register.png)

### Bejelentkezési oldal
![bejelentkezés](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/login.png)

### Folyamatban lévő játék
![játék folyamatban](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/game.png)

### Lejátszott játékmenet megtekintése
![lejátszott játék](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/gamewon.png)

### Statisztika oldal
![statisztikák](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/stats.png)

### Archívum oldal
![archívum](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/archive.png)

### Jelszómódosító oldal
![jelszó módosítása](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/edituser.png)

### ADMIN - kérdőívhozzáadó/módosító oldal
![kérdőív hozzáadása/módosítása](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/editprompt.png)

### ADMIN - rendszergazdakezelő oldal
![rendszergazdák kezelése](https://github.com/SapiS68/PLACEHOLDER-Nagy-Projekt/blob/main/Dokument%C3%A1ci%C3%B3/imgs/editadmin.png)

## 9. Forgatókönyvek

### Regisztrációs oldal
Minden bejelentkezetlen felhasználónak megjelenik először a regisztrációs fül, amelyben megjelenik:
- bal oldalt
  - a weboldal logója
  - információk a következőkről:
    - a játék rövid bemutatása
    - szabályok leírása
    - statisztika a regisztrált felhasználók számáról
  - képek magáról a játékról
- jobb oldalt pedig
  - 4db szövegmező a következőkhöz:
    - felhasználónév
    - e-mail cím
    - kívánt jelszó (2db)
      - ebből egy az egyezés ellenőrzésére szolgál
  - regisztrációs gomb
  - bejelentkezési oldalra mutató hivatkozás

Mikor az új felhasználó egy fiókot regisztrál magának, először minden szövegmezőbe írnia kell, mielőtt a regisztrálás megtörténhetne. Ezen mezőkhöz tartoznak egyéb megkötések is, amelyek a következők:
- a felhasználónévhez szánt mező kizárólag számokat, az angol ábécé kis- és nagybetűit, illetve alulvonást tartalmazhat. Ennek hossza maximum 16 karakter lehet, illetve legalább 4 karaktert tartalmaznia kell.
- az e-mail cím mező meg kell felelnie az e-mail címek felépítésének: felhasználónév, egy @, majd utána a domain neve (pl. example@domain.com)
- a két jelszómező tartalmának egyeznie kell

Miután minden megkötésnek megfelelnek a beírtak, a regisztrációs gomb interaktálhatóvá válik. Abban az esetben, ha a felhasználónév vagy az e-mail cím használatban van, jelez a felhasználó felé. Más esetben az oldal átírányítódik a bejelentkezési oldalra. Az utóbbi bekövetkezik abban az esetben is, amikor a felhasználó az oldalon lévő hiperhivatkozásra rákattint.

### Bejelentkezési oldal
Ennek az oldalnak a tartalma - egymás alá elhelyezve - maga a logó, illetve egy konténer, amely a következőket tartalmazza:
- felhasználónév szövegmező
- jelszó szövegmező
- bejelentkezés gomb
- hiperhivatkozás a regisztrációs oldalra

Az oldalon lévő gombra kattintás során, ha a szövegmezők bármelyike üres, vagy a felhasználónév és jelszó kombinácója érvénytelen, egy hibaüzenet jelenik meg a konténer alatt, amelyek az X gombra kattintás során eltüntehetőek. Hibamentes bejelentkezési kísérlet esetén a felhasználó átirányítódik a játékoldalra.

### Felső menüsor
A projekthez tartozó minden oldalon (a bejelentkezési és regisztrációs oldalakon kívül) megjelenik felül egy menüsor. Ez javarészt hivatkozásokat tartalmaz más oldalakra; bal oldalt a játékkal kapcsolatos hivatkozások, jobb oldalt pedig a felhasználókezeléshez tartozóak jelennek meg. A menüsor tartalma a következő:
- bal oldal:
  - **az oldal logója**: rákattintva a mai naphoz tartozó játék jelenik meg
  - **naptár ikon**: átirányít az archívum oldalára
  - **statisztika ikon**: átirányít a statisztikai oldalra, ahol a felhasználó meg tudja tekinteni az eddigi eredményeit
  - **adatbázis ikon**: a kérdőívmódosító oldalra irányít át (csak rendszergazda felhasználóknál jelenik meg)
  - **személy ikon**: átirányít a rendszergazdakezelő oldalra (csak rendszergazda felhasználóknál jelenik meg)
- jobb oldal:
  - **felhasználó szöveg**: itt a bejelentkezett felhasználó neve jelenik meg
  - **fogaskerék ikon**: átirányít a jelszómódosító oldalra
  - **ajtó ikon**: erre kattintva a felhasználó kijelentkezik, ilyenkor átirányítódik a bejelentkezési oldalra

Azokhoz az oldalakhoz, ahol ez a felső menüsor megjelenik, bejelentkezetlen felhasználó nem férhet hozzá. Próbálkozás esetén ilyenkor visszairányítódik a bejelentkezési oldalra.

### Játékoldal
Bejelentkezés után a felhasználót egyből ez az oldal fogadja. Attól függően, hogy a játékos már lejátszotta a menetét vagy sem, a kinézete megváltozik.

#### Folyamatban lévő játékmenet esetén
Ekkor a felület 3 részre bontható. Bal oldalt lapozható képek, illetve a tippre szolgáló szövegmező jelenik meg. Jobb oldalt pedig a hátralévő próbálkozások száma, illetve az eddigi beírt tippek jelennek meg, idő szerint rendezve.

A játékmenet indulása során először egy kép jelenik meg a felhasználó számára. A kép alá tudja a játékos beírni és beküldeni a tippjét. Ilyenkor, ha a felhasználó nem találta még el a kitalálandó játék nevét, a játékmenet tovább folytatódik, és a képek száma bővül eggyel. Ezen képek közül váltogatni lehet, amely a bal oldalon lévő gombok segítségével érhető el.

Ha a játékos eltalálta a játéknak a címét, vagy pedig átlépett a próbálkozások számán, az oldal tartalma frissül, kiírva a mai nap kérdéséhez tartozó statisztikákat.

#### Lejátszott / archívumban visszanézett játékmenet esetén
Ekkor az oldal 2 külön konténerre bontható, amelyek egymás mellett jelennek meg, bal és jobb oldalt.
- A bal oldali konténerben megjelenik a játék borítója, illetve annak a címe, egymás alatt sorrendben.
- A jobb oldali konténerben pedig a hozzátartozó képernyőképek, illetve a játékmenet statisztikái jelennek meg, amelyek a következők:
  - **Próbálkozások statisztikája**: Itt sávdiagrammban jelennek meg próbálkozások szerint a játékmenetben résztvevők száma. Ha a bejelentkezett felhasználó is részt vett a játékmenetben, a hozzátartozó sáv elkülöníthető színnel emelődik ki.
  - **Átlagos idő**: Itt a játékmenet elkezdése és befejezése közti átlagos időtartam jelenik meg.
  - **Saját idő**: Itt a felhasználó ideje jelenik meg, feltéve, hogy ő részt vett a megtekintett játékmenetben.

Archívumból kiválasztott játékmenet esetén mindig ez az oldal jelenik meg.

### Statisztika oldal
Itt a játékos az eddigi átlagos eredményeit tudja megtekinteni. A felhasználó számára kiírodik:
- a játékmenetek száma,
- az ebből nyert játékok száma,
- a kettő közötti nyerési arány,
- a próbálkozások statisztikája, sávdiagramban megjelenítve,
- az átlagos próbálkozásszám, illetve
- az átlagosan eltelt idő

### Archívum oldal
Az oldalon egy konténer jelenik meg, amely táblázatos formában tartalmaz gombokat. Ezek a gombok azokat a dátumokat tartalmazzák, amelyekhez tartozik egy lejárt idejű kérdőív. Ezekre a felhasználó rá tud kattintani, amely során az oldal átirányítódik az adott dátumhoz tartozó játékmenet statisztikáihoz.

Fontos, hogy itt csak a mostani nap előtti kérdőívek jelennek meg. Abban az esetben, ha a felhasználó próbál megtekinteni egy olyan dátumot, ahol
- nincs kérdőív,
- a kérdőív még folyamatban van, vagy
- a kérdőív egy jövőbeni dátumhoz tartozik,

akkor irányítódjon át a játékoldalra.

### Jelszómódosító oldal
Ezen az oldalon megjelenik:
- a jelenlegi felhasználó neve és e-mail címe
- két szövegmező, amelyben a felhasználó megadja:
  - a jelenlegi, megváltoztatandó jelszavát
  - az új jelszót
- egy módosításra szolgáló gomb

Miután a felhasználó a módosítás gombra nyom, elkezdődik a jelszómódosítási folyamat. Abban az esetben, ha a régi jelszó nem egyezik, dobjon ki hibaüzenetet, ellenkező esetben pedig irányítsa vissza a főoldalra.

Belső működésnél fontos, hogy ellenőrzéskor/végrehajtáskor a felhasználónév és e-mail cím ne a megjelenített mezőkből legyenek kiolvasva, hiszen azok könnyen módosíthatók.

### Kérdőívhozzáadó oldal
Ezen az oldalon egy rendszergazda hozzáadni, vagy akár módosítani tud egy adott naphoz tartozó kérdőívet. Az ehhez tartozó adatok a következők:
- a kérdőív dátuma (dátumbevitel mező)
- a játék neve (szövegmező)
- a játék borítója (fájlfeltöltő mező)
- 5 darab képernyőkép (fájlfeltöltő mezők)

A dátum mezője mellett megjelenik egy adatlekérdező gomb is, amely az adott dátumhoz tartozó játék információit helyettesíti be a mezőkbe (ha már van). Ilyenkor a fájlmezők mellett egy új gomb is megjelenik, amely egy új fülön megnyitja az előzőleg feltöltött képeket. Amikor a felhasználó kész van a kitöltéssel, a mezők alatti "feltöltés" gombbal fel tudja tölteni az adatokat az adatbázisba.

Ha a mezők bármelyike üres (pl. nincs kiválasztva kép, hiányzik a cím, stb.), akkor a feltöltési folyamat nem elvégezhető, feltéve, hogy az adott dátumhoz még nem tartozik játék az adatbázisban. Kérdőív szerkesztése esetén a képek kihagyhatóak, ha azok valamelyikén nem akarunk végezni módosítást.

Ha az adott dátumra már tartozik játék (vagyis, ha szerkeszteni akarunk), feltöltésnél megjelenik egy ablak, ahol a felhasználónak meg kell erősítenie az előző adatok felülírását. Ha a dátum a mai napot, vagy egy azt megelőző napot jelöl, a felhasználó felé egy hibaüzenetet kell dobni.

Fontos, hogy ehhez az oldalhoz (illetve az ez után következőhöz) kizárólag adminisztrátorok férhetnek hozzá. Ha a felhasználó jogosulatlanul próbál hozzáférni, jelentkeztesse ki, majd írjon hibaüzenetet.

### Rendszergazdakezelő oldal

Ezen az oldalon megjelenik egy szövegmező, illetve egy gomb. Ezek alatt pedig megjelenítődnek azok a felhasználók, akik rendelkeznek már rendszergazdai jogosultságokkal.

Hozzáadás esetén a rendszergazdának a mezőbe kell írnia a kívánt felhasználó nevét, majd rá kell nyomni a mellette lévő "hozzáadás" gombra. Ha az adott felhasználó már rendelkezik jogosultsággal, írjon ki egy üzenetet, egyéb esetben pedig tegye a listába.

Jogosultság elvonása esetén pedig a kívánt felhasználó melletti X gombra kell kattintani. Ez a gomb nem jelenik meg, ha a felhasználó neve egyezik a bejelentkezett felhasználójával, vagy az adott rendszergazda tulajdonos jogosultsággal rendelkezik.

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| K4 | ... | ... |

## 11 Fogalomszótár
