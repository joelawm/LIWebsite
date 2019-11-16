OC.L10N.register(
    "bruteforcesettings",
    {
    "Brute-force settings" : "Brute-force beállítások",
    "Whitelist IPs" : "Engedélyezett IP címek",
    "Brute Force Protection is meant to protect Nextcloud servers from attempts to\nguess user passwords in various ways. Besides the obvious \"*let's try a big\nlist of commonly used passwords*\" attack, it also makes it harder to use\nslightly more sophisticated attacks via the reset password form or trying to\nfind app password tokens.\n\nIf triggered, brute force protection makes requests coming from an IP on a\nbruteforce protected controller with the same API slower for a 24 hour period.\n\nWith this app, the admin can exempt an IP address or range from this\nprotection which can be useful for testing purposes or when there are false\npositives due to a lot of users on one IP address." : "A brute force védelem célja, hogy megvédje a Nextcloud szervereket a felhasználói jelszavak kitalálásának különböző módjaitól.\nA \"*próbáljunk ki egy listát a leggyakrabban használt jelszavakkal*\" támadás mellett nehezebbé teszi a kifinomultabb támadási módszerek kihasználásának lehetőségét a jelszóvisszaállító űrlap, valamint az alkalmazás jelszó tokenek keresése által.\n\nAmikor működésbe lép, a brute force védelem az adott IP címről érkező kéréseket egy brute force védelemmel ellátott vezérlőre irányítja át ugyanazon az API-n keresztül, amely így lassabb működést eredményez 24 órán keresztül.\n\nEzzel az alkalmazással a rendszergazda kivételi körbe is helyezhet egy IP címet, vagy IP tartományt, amely hasznos lehet a különböző tesztelési célokra, vagy amennyiben az azonos IP címet használó több felhasználó miatt hamis pozitív eredmény születik.",
    "Brute-force IP whitelist" : "Brute-force engedélyezett IP címek",
    "To whitelist IP ranges from the brute-force protection specify them below. Note that any whitelisted IP can perform authentication attempts without any throttling. For security reasons, it is recommended to whitelist as few hosts as possible or ideally even none at all." : "Itt adhatja meg a brote-force támadás elleni védelem alóli kivételezett IP címek listáját. Vegye figyelembe, hogy bármely ilyen IP cím azonosítási kérelme védelmi késleltetés nélkül végrehajtódik. Biztonsági okokból csak a legindokoltabb vagy leginkább egy végpontot sem szabad kivételnek megadni.",
    "Add new whitelist" : "Új engedélyezett lista hozzáadása",
    "Add" : "Hozzáadás",
    "Delete" : "Törlés"
},
"nplurals=2; plural=(n != 1);");
