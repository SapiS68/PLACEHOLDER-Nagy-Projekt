# Tesztjegyzőkönyv

Teszteléseket végezte: Balázs Gábor

Operációs rendszer: Windows 11 Home (10.0.22621)
Böngésző: Google Chrome (120.0.6099.71)

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Friss játékmenet indítása | 2023.12.10. | Az oldalnak meg kell jelenítenie az eddigi képernyőképeket, a tipp beírására szolgáló szövegmezőt, illetve az eddigi próbálkozások listáját, a hátramaradt próbálkozások kiírásával, illetve a játékmenet elindításával együtt. | Az oldal kiadja a megadottakat, a játékmenet elindul az időzítővel együtt. | Nem találtam hibát. |
| Helytelen tipp megadása, a próbálkozáslimit átlépése nélkül | 2023.12.10. | A képernyőképek számának eggyel bővülnie kell, a próbálkozáslistában a meg kell jelennie a legutóbbi tippnek, illetve a hátramaradt próbálkozások számát is jelezni kell a felhasználó felé. | Funkcionálisan minden működik, a hátramaradt próbaszámot n. próbának jelzi. | Esztétikai hiba a hátramaradt próbák kiírásánál. |
| Helytelen tipp megadása, a próbálkozáslimit átlépésével | 2023.12.10. | Az oldalnak frissítődnie kell, ilyenkor ki kell írnia a játékmenethez tartozó statisztikákat. | Átirányít a statisztika oldalra, a statisztikák nem íródnak ki. | Az eredmények nem jelennek meg. |
| Helyes tipp megadása | 2023.12.10. | 	Az oldalnak frissítődnie kell, ilyenkor ki kell írnia a játékmenethez tartozó statisztikákat. | Átirányít a statisztika oldalra, a statisztikák nem íródnak ki. | Az eredmények nem jelennek meg. |

Az Alfa tesztelés során a vizsgált elemek között volt ami nem megfelelően működött, ez a későbbiek során javításra szorul.

Következő tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.
## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Friss játékmenet indítása | 2023.12.12. | Az oldalnak meg kell jelenítenie az eddigi képernyőképeket, a tipp beírására szolgáló szövegmezőt, illetve az eddigi próbálkozások listáját, a hátramaradt próbálkozások kiírásával, illetve a játékmenet elindításával együtt. | Az oldal kiadja a megadottakat, a játékmenet elindul az időzítővel együtt. | Nem találtam hibát. |
| Helytelen tipp megadása, a próbálkozáslimit átlépésével | 2023.12.12. |Az oldalnak frissítődnie kell, ilyenkor ki kell írnia a játékmenethez tartozó statisztikákat. | Átirányít a kérdőívhez tartozó statisztikai oldalra. | Nem találtam hibát. |
| Játékoldalra való átirányítás, befejezett játékmenet esetén | 2023.12.12. | Az oldalnak meg kell jelenítenie a játékmenethez tartozó globális, illetve - ha a felhasználó részt vett a játékmenetben - a felhasználói statisztikát is. | Megjelent a játékmenet statisztikája, leírja mind a felhasználóhoz tartozó, illetve az átlag játékmenet statisztikáit. | Nem találtam hibát. |
| Helyes tipp megadása | 2023.12.12. | 	Az oldalnak frissítődnie kell, ilyenkor ki kell írnia a játékmenethez tartozó statisztikákat. | Átirányít a kérdőívhez tartozó statisztikai oldalra. | Nem találtam hibát. |

Az Alfa tesztelés során a vizsgált elemek mind hibátlanul működtek mindenféle fennakadások nélkül.

## Végleges teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Friss játékmenet indítása | 2023.12.13. | Az oldalnak meg kell jelenítenie az eddigi képernyőképeket, a tipp beírására szolgáló szövegmezőt, illetve az eddigi próbálkozások listáját, a hátramaradt próbálkozások kiírásával, illetve a játékmenet elindításával együtt. | Az oldal kiadja a megadottakat, a játékmenet elindul az időzítővel együtt. | Nem találtam hibát. |
| Helytelen tipp megadása, a próbálkozáslimit átlépése nélkül | 2023.12.13. | A képernyőképek számának eggyel bővülnie kell, a próbálkozáslistában a meg kell jelennie a legutóbbi tippnek, illetve a hátramaradt próbálkozások számát is jelezni kell a felhasználó felé. | A legutóbbi tipp megjelenik, a próbálkozás száma eggyel csökken, a képek száma pedig eggyel nő. | Nem találtam hibát. |
| Helytelen tipp megadása, a próbálkozáslimit átlépésével | 2023.12.13. |Az oldalnak frissítődnie kell, ilyenkor ki kell írnia a játékmenethez tartozó statisztikákat. | Átirányít a kérdőívhez tartozó statisztikai oldalra. | Nem találtam hibát. |
| Játékoldalra való átirányítás, befejezett játékmenet esetén | 2023.12.13. | Az oldalnak meg kell jelenítenie a játékmenethez tartozó globális, illetve - ha a felhasználó részt vett a játékmenetben - a felhasználói statisztikát is. | Megjelent a játékmenet statisztikája, leírja mind a felhasználóhoz tartozó, illetve az átlag játékmenet statisztikáit. | Nem találtam hibát. |
| Helyes tipp megadása | 2023.12.13. | 	Az oldalnak frissítődnie kell, ilyenkor ki kell írnia a játékmenethez tartozó statisztikákat. | Átirányít a kérdőívhez tartozó statisztikai oldalra. | Nem találtam hibát. |
| Dátumra való kattintás, archívumon belül | 2023.12.13. | 	Az oldalnak át kell irányítódnia a játékoldalra, ahol az adott dátum eredményeinek kell megjelennie. | Átirányítódik az adott napi kérdőívre, kiírja annak az eredményeit. | Nem találtam hibát. |

A Végleges teszt lezajlott és minden funkció rendesen működik, esztétikailag is megfelelő a program.

Átadásra készen áll a megrendelőnek.

Befejezve: 2023.12.13.