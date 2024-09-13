<?php
require 'vendor/autoload.php';

class Faker {
// use the factory to create a Faker\Generator instance

    private $faker;
    public function __construct(){
        $this->faker = Faker\Factory::create();
    }

    public function generate(){
        $arr = [];
        array_push($arr, $this->faker->uuid());
        array_push($arr, $this->faker->title());
        array_push($arr, $this->faker->firstName());
        array_push($arr, $this->faker->lastName());
        array_push($arr, $this->faker->streetAddress());
        array_push($arr, $this->faker->barangay());
        array_push($arr, $this->faker->municipality());
        array_push($arr, $this->faker->province());
        array_push($arr, $this->faker->country());
        array_push($arr, $this->faker->phoneNumber());
        array_push($arr, $this->faker->mobileNumber());
        array_push($arr, $this->faker->company());
        array_push($arr, $this->faker->domainName());
        array_push($arr, $this->faker->jobTitle());
        array_push($arr, $this->faker->safeColorName());
        array_push($arr, $this->faker->date());
        array_push($arr, $this->faker->email());
        array_push($arr, $this->faker->password(8, 12));
        return $arr;
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