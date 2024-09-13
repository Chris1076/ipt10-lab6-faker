<?php
require 'Random.php';
require 'FileUtility.php';
$timesgen = readline('INPUT NUMBER OF TIMES TO GENERATE: ');

for($i = 0; $i < $timesgen; $i++){
    $csv = FileAccessor::getFile_append();
    $entity = new Faker();
    FileAccessor::appendFile($csv, $entity->generate());
    unset($csv);
    unset($entity);
}
?>