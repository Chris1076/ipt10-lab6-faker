<?php
class FileAccessor{
    public static $variabble;

    public static function getFile(){
        $file = fopen("persons.csv", "r");
        return $file;
        fclose($file);
    }
    public static function getFile_append(){
        if(!file_exists("persons.csv")){
            $newfile = fopen("persons.csv", "w");
            $headers = [
                "UUID", "Title",
                "First Name",
                "Last Name",
                "Street Address",
                "Barangay",
                "Municipality",
                "Province",
                "Country",
                "Phone Number",
                "Mobile Number",
                "Company Name",
                "Company Website",
            "Job Title",
            "Favorite Color",
            "Birthdate",
            "Email Address",
            "Password",];
            fputcsv($newfile, $headers);
        }
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