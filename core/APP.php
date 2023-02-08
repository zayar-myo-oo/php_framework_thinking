<?php
namespace core;
class APP
{
protected static $data=[];

public static function bind($key,$value){
    static::$data[$key]=$value;
}
public static function get($key){
    return static::$data[$key];
}

}