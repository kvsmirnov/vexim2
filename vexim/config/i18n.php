<?php

$language = 'en_US';
putenv ("LANG=$language");
setlocale(LC_ALL, "$language.UTF-8");
bindtextdomain('messages', './locale');
bind_textdomain_codeset('messages', 'UTF-8');
textdomain('messages');

?>
