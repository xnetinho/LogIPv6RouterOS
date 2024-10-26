<?php
/* Your security token  https://senhasegura.remontti.com.br/*/
$token = getenv('TOKEN') ?: 'xxxxxxxxxxxxxxxxxxxx';

/* Set langage */
// Portugês Brasil: pt-br
// English:  en
$lang = getenv('LANG') ?: 'pt-br';

/* Db conect */
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'logs6';
$db_password = getenv('DB_PASSWORD') ?: 'passwd_db';
$db_name = getenv('DB_NAME') ?: 'logs6';