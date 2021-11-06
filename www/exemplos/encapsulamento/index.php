<?php

require_once('Conta.php');

try
{
    $conta = new Conta(123456, 100);
    
} catch(Exception $e) 
{
    echo 'Falhou ';
    echo '<br>';
    echo $e->getMessage();
}