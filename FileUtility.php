<?php
session_start();
class FileAccessor{
    public static $variabble;

    public static function getFile(){
        $file = fopen("persons.csv", "r");
        $_SESSION['personsource'] = $file;
    }
    public static function appendFile($entry){
        $file = fopen("persons.csv", "a");
        fputcsv($file, $entry);
        $_SESSION['persontarget'] = $file;
    }
    public static function writeFile(){

    }
}
?>