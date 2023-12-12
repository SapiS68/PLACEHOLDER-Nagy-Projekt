# Tesztjegyzőkönyv

Böngésző: Chrome Verzió: 119.0.6045.200

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Login hibakezelés | 2023.12.06 | A hiba üzenet jelenjen meg piros betűvel a form alatt. | Nem jelent meg hiba üzenet. | A form hibás mezők esetén nem jelenít meg hibát. |
| Menü pozícionálás | 2023.11.22. | A menü jelenjen meg a game és a register rész felett. | Megjelenik a menü azonban a layout alatt. | A viewba az elemek rossz sorrendben szerepelnek. |
| Menü átirányítás, rendszergazda jog | 2023.12.09. | A rendszergazda gombokat csak rendszergazda felhasználó látja. A gombok a megfelelő helyre irányítanak át. | A gombok nem funkcionálnak és minden gomb látható a sima usernek is. | A rendszergazda gombok nincsenek feltételhez kötve, hiányzik a href. |

Az Alfa tesztelés során felmerült hibát a Béta teszt során újra tesztelésre kerülnek.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Login hibakezelés. | 2023.12.07. | A hiba üzenet jelenjen meg piros betűvel a form alatt. | Megjelent a hibaüzenet a hibás felhasználónév jelszó esetén is. | Nincs hiba. |
| Menü pozícionálás. | 2023.11.23. | A menü jelenjen meg a game és a register rész felett. | Megjelenik a menü az oldal tetején. | Nincs hiba. |
| Menü átirányítás, rendszergazda jog. | 2023.12.10. | A rendszergazda gombokat csak rendszergazda felhasználó látja. A gombok a megfelelő helyre irányítanak át. | A rendszergazda gombok sima usernek nem láthatóak, az átirányítások megfelelően működnek. | Nincs hiba. |

A Béta teszt sikeresen zajlott. Az Alfa tesztben talált hibák javításra kerültek.

## Végleges teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Register majd login funkcionalitás. | 2022.12.11. | Új felhasználó sikeres regisztrálása esetén legyen automatikus átirányítás és kerüljön be az adatbázisba az új felhasználó. | Sikeres regisztrációnál automatikus az átirányítás, a felhasználó megjelenik az adatbázisban. | Nincs hiba. |
| Nincs játék nap. | 2022.12.11. | Amelyik dáture nincsen játék készítve, a no_game oldal jelenjen meg, és a sima / (home) is oda irányítson. | A tesztelés időpontjában a mai napra nincsen játék készítve, a home gomb és a / tag is automatikusan a no_game layoutra irányít át. | Nincs hiba. |
| Modify password oldal hibakezelés. | 2022.12.11. | Nem megegyező jelszó esetén, és a régi jelszó esetén is a hibás adatok jelezze. | Hibás régi jelszó megadásánál és a két új jelszó nem megegyezése esetén is jelzi a hibát. | Nincs hiba. |
| Add game rendszergazda oldal mezők funkcionalitása. | 2022.12.11. | 2 szekciónak kell lennie, egy kérdés feltöltő résznek amelyben szerepel 5 képfeltöltési lehetőség, 1 dátum és 1 név opció. Illetve egy játék feltöltő rész amelyben szerepel egy text mező és a kép feltöltő rész. | Az elvárásoknak megfelelő mezők jelennek meg a rendszergazdák számára, a mezőkbe tud tartalmat helyezni a felhasználó. | Nincs hiba. |

Végleges teszt hibamentesen zajlott.

Tesztelést végezte és írta: Törteli Márton

Befejezve: 2022.12.11.
