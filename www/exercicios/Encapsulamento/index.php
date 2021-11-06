<?php

require_once('Pessoa.php');

$php = new Pessoa('Renan', '12312312305', 17, new DateTime('2000-01-01'));
print_r($php->alistamento());
