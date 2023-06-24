<?php

//this is the code for the meditation and stress-relief workshops for mental health

class MeditationWorkshop {
	
	//class properties
	private $title;
	private $description;
	private $date;
	private $location;
	private $cost;
	
	//class constructor
	public function __construct($title, $description, $date, $location, $cost) {
		$this->title = $title;
		$this->description = $description;
		$this->date = $date;
		$this->location = $location;
		$this->cost = $cost;
	}
	
	//getters and setters
	public function getTitle(){
		return $this->title;
	}
	
	public function setTitle($title) {
		$this->title = $title;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function setDescription($description){
		$this->description = $description;
	}
	
	public function getDate(){
		return $this->date;
	}
	
	public function setDate($date){
		$this->date = $date;
	}
	
	public function getLocation() {
		return $this->location;
	}
	
	public function setLocation($location) {
		$this->location = $location;
	}
	
	public function getCost() {
		return $this->cost; 
	}
	
	public function setCost($cost) {
		$this->cost = $cost;
	}
	
	//other class methods
	public function registerWorkshop() {
		echo "You have successfully registered for the workshop titled: " . $this->title;
	}
	
	public function displayWorkshopInfo() {
		echo "Workshop title: " . $this->title . "\nWorkshop description: " . $this->description . "\nWorkshop date: " . $this->date . "\nWorkshop location: " . $this->location . "\nWorkshop cost: " . $this->cost;
	}
	
	public function cancelWorkshop() {
		echo "You have successfully cancelled the workshop titled: " . $this->title;
	}
	
}

//instantiating MeditationWorkshop object
$meditationWorkshop1 = new MeditationWorkshop("mindfulness for beginners", "a workshop to help beginners learn the basics of mindfulness and how to apply it in their daily lives", "03/03/2018", "Atlanta, GA", "299");

//calling methods
$meditationWorkshop1->registerWorkshop();
echo "\n";
$meditationWorkshop1->displayWorkshopInfo();
echo "\n";
$meditationWorkshop1->cancelWorkshop();
echo "\n";

?>