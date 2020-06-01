<?php

namespace ModuleBZ\SchemaOrg;

class Export {
    public function toMicrodata():string {
        $a = get_object_vars($this);
        $data = '';
        foreach ($a as $k=>$v){
            if($k=='type') continue;
            if($v) { $data .= $v->toMicrodata(); }
        }
        return '<span itemscope itemtype="http://schema.org/' . $this->type . '">'.$data.'</span>';
    }
    public function toRDFa():string {
        $a = get_object_vars($this);
        $data = '';
        foreach ($a as $k=>$v){
            if($k=='type') continue;
            if($v) { $data .= $v->toRDFa(); }
        }
        return '<span itemscope itemtype="http://schema.org/' . $this->type . '">'.$data.'</span>';
    }
    public function toJSON():array {
        $res['@type'] = $this->type;
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
}
