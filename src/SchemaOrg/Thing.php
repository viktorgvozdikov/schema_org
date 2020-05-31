<?php

namespace ModuleBZ\SchemaOrg;

use ModuleBZ\SchemaOrg\DataType\Text;
use ModuleBZ\SchemaOrg\DataType\URL;

class Thing {

    protected $type = 'Thing';

    /** @var $additionalType URL */
    protected $additionalType;

    /** @var Text $name */
    protected $name;

    /**
     * @param string $text;
     * @return Thing
     */
    public function setName($text): Thing {
        $this->name = new Text('name',$text);
        return $this;
    }


    function _toMicrodata():string{return '';}
    function _toRDFa():string{return '';}

    public function toMicrodata():string {
        return
        '<span itemscope itemtype="http://schema.org/' . $this->type . '">'
            .($this->name?$this->name->toMicrodata():'')
            .$this->_toMicrodata()
        .'</span>';
    }
    public function toRDFa():string {
        return
            '<span vocab="http://schema.org/" typeof="'.$this->type.'">'
            .($this->name?$this->name->toRDFa():'')
            .'</span>';
    }
    public function toJSON():array {
        $res['@type'] = $this->type;
        if($c = $this->name) $res['name'] = (string)$c;
        return $res;
    }
    public function toJSON_LD():string{
        $json['@context'] ='http://schema.org';
        $json += $this->toJSON();
        return '<script type="application/ld+json">'.json_encode($json).'</script>';
    }
}
