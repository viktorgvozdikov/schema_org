<?php

namespace ModuleBZ\SchemaOrg;

use ModuleBZ\SchemaOrg\DataType\URL;

class Product extends Thing {

    protected $type = 'Product';


    public function _toMicrodata(): string {
        return '';
    }

    public function toJSON():array {
        $res = parent::toJSON();
        return $res;
    }
}
