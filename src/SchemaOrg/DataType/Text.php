<?php

namespace ModuleBZ\SchemaOrg\DataType;

class Text {

    protected $name;
    protected $text;

    /**
     * Text constructor.
     * @param $name
     * @param $text
     */
    public function __construct($name, $text)
    {
        $this->name = $name;
        $this->text = $text;
    }

    public function __toString() {
        return $this->text;
    }

    public function toMicrodata():string {
        return '<meta itemprop="'.$this->name.'" content="'.$this->text.'"/>';
    }
    public function toRDFa():string {
        return '<meta property="name" content="'.$this->text.'"/>';
    }

}
