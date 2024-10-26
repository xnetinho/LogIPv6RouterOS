<?php
/* Your security token  https://senhasegura.remontti.com.br/*/
$token = getenv('TOKEN') ?: '5QBKlrNabpFyC7dqu8wTdYie1Rneenev';

/* Set langage */
// Português Brasil: pt-br
// English:  en
$lang = getenv('LANG') ?: 'pt-br';

/* Db conect */
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'logs6';
$db_password = getenv('DB_PASSWORD') ?: 'passwd_db';
$db_name = getenv('DB_NAME') ?: 'logs6';

var_dump(getenv('TOKEN'));
var_dump($_ENV['TOKEN'] ?? 'Não definido em $_ENV');
var_dump($_SERVER['TOKEN'] ?? 'Não definido em $_SERVER');