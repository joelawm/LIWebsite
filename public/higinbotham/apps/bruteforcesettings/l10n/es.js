OC.L10N.register(
    "bruteforcesettings",
    {
    "Brute-force settings" : "Configuracion para ataques de fuerza bruta",
    "Whitelist IPs" : "Lista blanca de IPs",
    "Brute Force Protection is meant to protect Nextcloud servers from attempts to\nguess user passwords in various ways. Besides the obvious \"*let's try a big\nlist of commonly used passwords*\" attack, it also makes it harder to use\nslightly more sophisticated attacks via the reset password form or trying to\nfind app password tokens.\n\nIf triggered, brute force protection makes requests coming from an IP on a\nbruteforce protected controller with the same API slower for a 24 hour period.\n\nWith this app, the admin can exempt an IP address or range from this\nprotection which can be useful for testing purposes or when there are false\npositives due to a lot of users on one IP address." : "La protección contra fuerza bruta está diseñada para proteger a los servidores NextCloud de intentos de\nobtener las contraseñas de usuario de varias maneras. Además del ataque más obvio \"*vamos a probar una gran\n lista de contraseñas frecuentes*\", también dificulta el uso de ataques más sofisticados como los que son vía el formulario de restablecimiento de la contraseña o probando a\nencontrar los tokens de contraseña de la aplicación.\n\nSi se activa, la protección hace que las solicitudes que provengan de esa IP se redirijan\na un controlador protegido contra fuerza bruta con la misma API pero ralentizada durante un periodo de 24 horas.\n\nCon esta app, el administrador puede eximir una IP o un rango de ellas de esta\nprotección, puede ser útil para fines de prueba o cuando haya falsos\npositivos debido a una gran cantidad de usuarios en una misma dirección IP.",
    "Brute-force IP whitelist" : "Lista blanca de IPs para ataques de fuerza bruta",
    "To whitelist IP ranges from the brute-force protection specify them below. Note that any whitelisted IP can perform authentication attempts without any throttling. For security reasons, it is recommended to whitelist as few hosts as possible or ideally even none at all." : "Para incluir rangos de IP en la lista blanca de la protección de fuerza bruta, especifícales debajo. Nota que cualquier IP en la lista blanca puede realizar intentos de autenticación sin ningún freno. Por razones de seguridad, se recomienda incluir en la lista blanca tan pocos servidores como sea posible o incluso, idealmente, ninguno.",
    "Add new whitelist" : "Añadir nueva lista blanca",
    "Add" : "Añadir",
    "Delete" : "Eliminar"
},
"nplurals=2; plural=(n != 1);");
