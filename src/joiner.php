<?php 
namespace Src;
class Joiner
{
    public static $JoinFile = null;
    public static function JoinInternal($path)
    {
        self::$JoinFile = self::Path_filter($path);
        return require (self::$JoinFile.".php");
    }

    protected static function Path_filter($path) {
        $path = str_replace(' ', '-',$path);  $path = preg_replace('/[^A-Za-z0-9\-]/', '', $path);     
        return preg_replace('/-+/', '-', $path); 
    }
    
    public static function CreateClass($title)
    {
        $class = new \ReflectionClass(get_called_class());
        return $class;
    }
}


if(count(get_included_files()) == 1)
{ 
    
    header('Location: /404');
    die();
    
}else{
    define('SECURE_ACCESS', true);
}
