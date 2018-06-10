<?php

function fnconnect($servidor,$base,$usuario=null,$password=null)
{
    $odsn="sqlsrv:server=$servidor;Database = $base";

    try
    {
        if ($usuario!=null && $password!=null)
        {$ocnx = new PDO($dsn, $usuario,$password);}
        else
        {$ocnx = new PDO($odsn);}
        $ocnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $oex)
    {
        throw new Exception("Error: No puede conectarse con la base de datos");
    }
    return $ocnx;
}

// Ejecuta una sentencia de actualización, parametrizada (o no) (incluidos SP)
// solo parámetros de entrada

function fnexec($cnx,$sentencia,$args=null)
{
    $ofilas=null;
    try
    {
        $ocmd=$cnx->prepare($sentencia);
        if ($args!=null && is_array($args) && substr_count($sentencia,'?')==count($args))
        {
            $ofilas=$ocmd->execute($args);
        }
        else
        {
            $ofilas=$ocmd->execute();
        }
    }
    catch (Exception $oex)
    {
        throw new Exception("Error: Imposible realizar la operación deseada");
    }
    return $ofilas;
}

// Ejecución de una sentencia que devuelve filas, parametrizada (o no) (incluidos SP)
// solo parámetros de entrada

function fnquery($cnx,$sentencia,$args=null)
{
    try
    {
        $ocmd=$cnx->prepare($sentencia);
        if ($args!=null && is_array($args) && substr_count($sentencia,'?')==count($args))
        {
            $ocmd->execute($args);
        }
        else
        {
            $ocmd->execute();
        }
    }
    catch (Exception $oex)
    {
        throw new Exception("Error: Imposible obtener los datos solicitados");
    }
    return $ocmd;
}

// Ejecuta una sentencia que devuelve un valor único, parametrizada (o no) (incluidos SP)
// solo parámetros de entrada

function fnexecScalar($cnx,$sentencia,$args=null)
{
    $ovalor=null;
    try
    {
        $ocmd=$cnx->prepare($sentencia);
        if ($args!=null && is_array($args) && substr_count($sentencia,'?')==count($args))
        {
            $ocmd->execute($args);
        }
        else
        {
            $ocmd->execute();
        }
    }
    catch (Exception $oex)
    {
        throw new Exception("Error: Imposible obtener el valor deseado");
    }
    return $ocmd->fetchColumn();
}

// Ejecuta un conjunto de ordenes de actualización parametrizadas (o no) bajo una transacción
// Solo parámetros de entrada

function fnexecTran($cnx,$comandos)
{
    $ook=true;
    try
    {
        $cnx->beginTransaction();
        foreach($comandos as $comando)
        {

            if (!is_array($comando)) // Caso: sentencia normal sin parámetros
            {
                fnexec($cnx,$comando);
            }
            else
            {
                fnexec($cnx,key($comando),current($comando));
            }

        }
        $cnx->commit();
    }
    catch (Exception $oex)
    {
        $cnx->rollback();
        $ook=false;
    }
    return $ook;
}

?>