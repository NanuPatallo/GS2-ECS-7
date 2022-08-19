<?php

header('Content-Type: application/json');

require_once 'modelo/datosOperacion.php';
require_once 'modelo/persona.php';
require_once 'modelo/oportunidad.php';
require_once 'modelo/respuestaOportunidad.php';

$datoOP = new DatosOperacion();
$datoOP->montoSolicitado = 50000;
$datoOP->linea = "504";
$datoOP->cantCuotas = 12;
$datoOP->tasaEfMensual = 2.9589;
$datoOP->cuotaProm = 53505.08;
$datoOP->tasaNominalAnual = 36;
$datoOP->costoFinancieroTotal = 56.55;

$pers = new Persona();
$pers->nombre = "pedro rodriguez";
$pers->sexo = "F";
$pers->doc = "123123";
$pers->email = "aaaa@aaaa.com.ar";
$pers->celular = "123456";
$pers->telAlternativo = "123456";

$oport = new Oportunidad();
$oport->persona = $pers;
$oport->datosOperacion = $datoOP;
$oport->smsConsultaId = "17654293-27258197726";
$oport->idValidatorId = 893;
$oport->motorSolaFirmaId = 8870;

$resp = new RespuestaOportunidad();
$resp->oportunidad = $oport;
$resp->IsOk = true;

echo json_encode([$resp]);
