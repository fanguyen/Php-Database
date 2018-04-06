<?php

try {
        return new PDO(
        'sqlsrv:Server=INFO-SIMPLET;Database=Classique_web_2017',
        'ETD',
        'ETD');
    }
    catch (PDOexception $exception){
        echo 'erreur :'.$exception ->getMessage()."\n";
        exit(1);
    }
