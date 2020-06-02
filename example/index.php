<?php
//*
// Показывать ли все ошибки
error_reporting(E_ALL);
ini_set('display_errors',true);
/*/
ini_set('display_errors','Off');
/**/
use ModuleBZ\SchemaOrg\Thing;

include_once "../vendor/autoload.php";

$things = [];
$things[] = (new \ModuleBZ\SchemaOrg\Thing())
    ->setName('Имя 1')
;
$things[] = (new \ModuleBZ\SchemaOrg\Thing\Product())
    ->setName('Имя 2')
;

$things[] = (new ModuleBZ\SchemaOrg\Thing\Organization\LocalBusiness())
    ->setName('Имя 2')
;


function getForm($code){
    return '<form method="post" target="_blank" action="https://search.google.com/structured-data/testing-tool"><input type="submit" value="Показать разметку"><textarea name="code" style="display:none">&lt;html&gt;&lt;head&gt;'.htmlspecialchars($code).'&lt;/head&gt;&lt;body&gt;&lt;/body&gt;&lt;/html&gt;</textarea></form>';
}

foreach ($things as $thing) {
    echo '<pre>';
    echo htmlspecialchars($x = $thing->toMicrodata());
    echo '</pre>';
    echo getForm($x);
    echo '<pre>';
    echo htmlspecialchars($x = $thing->toRDFa());
    echo '</pre>';
    echo getForm($x);
    echo '<pre>';
    echo htmlspecialchars($x = $thing->toJSON_LD());
    echo '</pre>';
    echo getForm($x);
}


