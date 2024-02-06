<?php

    try
    {
        $conn = new PDO('mysql:host=localhost;dbname=db_crud_poo_basic', 'root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado";
    }

    catch(PDOException $error)
    {
        echo "Erro: " . $error->getMessage();
    }