<?php

namespace ModuleBZ\SchemaOrg;

class Export {
    protected $type;
    public function getType(){
        if($this->type) return $this->type;
        $class = explode("\\",get_class($this));
        return $this->type = array_pop($class);
    }
    public function toMicrodata():string {
        $a = get_object_vars($this);
        $data = '';
        foreach ($a as $k=>$v){
            if($k=='type') continue;
            if($v) { $data .= $v->toMicrodata(); }
        }
        return '<span itemscope itemtype="http://schema.org/' . $this->getType() . '">'.$data.'</span>';
    }
    public function toRDFa():string {
        $a = get_object_vars($this);
        $data = '';
        foreach ($a as $k=>$v){
            if($k=='type') continue;
            if($v) { $data .= $v->toRDFa(); }
        }
        return '<span vocab="http://schema.org/" typeof="' . $this->getType() . '">'.$data.'</span>';
    }
    public function toJSON():array {
        $res['@type'] = $this->getType();
        $a = get_object_vars($this);
        foreach ($a as $k=>$v){
            if($k=='type') continue;
            if(method_exists(get_class($v),'toJSON')) {
                if($v!==null) {
                    $res[$k] = $v->toJSON();
                }
            } else {
                if($v!==null) {
                    $res[$k] = (string)$v;
                }
            }
        }
        return $res;
    }
    public function toJSON_LD():string{
        $json['@context'] ='http://schema.org';
        $json += $this->toJSON();
        return '<script type="application/ld+json">'.json_encode($json).'</script>';
    }
    public function __toString() {
        return htmlspecialchars($this->toMicrodata());
    }
}
