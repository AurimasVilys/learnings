<?php

require __DIR__ . '/vendor/autoload.php';

$handlerChainBuilder = new \AurimasVilys\CarDealership\Builder\HandlerChainBuilder();
$vehicleDealership = new \AurimasVilys\CarDealership\Dealership($handlerChainBuilder);
$vehicleDealership->serve();
