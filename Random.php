<?php
require 'vendor/autoload.php';

class faker {
// use the factory to create a Faker\Generator instance

    private $faker;
    public function __construct(){
        $this->faker = Faker\Factory::create();
    }

    public function generate(){
        
    }

    public function generateName(){
        return $this->faker->name();
    }
    public function generateEmail(){
        return $this->faker->email();
    }
    public function generateText(){
        return $this->faker->text();
    }
}
?>