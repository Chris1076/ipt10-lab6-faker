<?php
class FileAccessor{
    public static $variabble;

    public static function getFile(){
        $file = fopen("persons.csv", "r");
        return $file;
        fclose($file);
    }
    public static function getFile_append(){
        $file = fopen("persons.csv", "a");
        return $file;
        fclose($file);
    }

    public static function appendFile($file, $entry){
        fputcsv($file, $entry);
        fclose($file);
    }
    public static function writeFile(){

    }
}
?>