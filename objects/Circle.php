<?php
/**********************
A simple circle class *
 **********************/
require_once 'Shape.php';

class Circle implements Shape{
  //class property
  private $radius;

  function __construct($radius){
    //initialize class properties
    $this->radius = $radius;
  }

  /**
   * implement getArea for Circle
   * @return float
   */
  public function getArea(){
    //@TODO : Round off the area to the nearest 10
    return Round(pi() * $this->radius * $this->radius);
  }
  //@TODO : Add getter and setters for class properties
public function setRadius($radius){
  $this->radius=$radius;
}
  public function getRadius(){
    return $this->radius;
  }

}

 ?>
