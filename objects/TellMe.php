<?php
  /********************************************************
   * A simple PHP Class that returns your browser details *
   ********************************************************/
  class TellMe{
    //class properties/attributes

    //Accessible only within the class
    //Needs getter and setter
    private $browserDetails;
    //Accessible by 'others'
    public $p_browserDetails;
    //Accessible only by 'children'
    protected $pd_browserDetails;

    /****************
    class behaviors *
     ****************/
    /**
     * constructor - remember this? @Java 101?
     * @return null
     */

    function __construct(){
      //Static function :)
      // $this->browserDetails = $browserDetails;
      // $this->p_browserDetails = $p_browserDetails;
      // $this->pd_browserDetails = $pd_browserDetails;
      TellMe::showMeTheMoney();
      //@TODO : how would you call a private method?
      function sayBrowsers(){
        echo $this->browserDetails;
        echo $this->p_browserDetails;
        echo $this->pd_browserDetails;
      }
      //@TODO: how would you call a public method??

    }
    public function getBrowserDetails(){
         return $this->browserDetails;
    }
    public function setBrowserDetails(){
        $this->browserDetails=$browserDetails;
    }
    public function getP_browserDetails(){
      return $this->p_browserDetails;
    }
    public function setP_browserDetails(){
        $this->p_browserDetails=$p_browserDetails;
    }
    public function getPd_browserDetails(){
     return $this->pd_browserDetails;
    }
    public function setPd_browserDetails(){
      $this->pd_browserDetails=$pd_browserDetails;
    }
//
// <<<<<<< HEAD
// =======
//
//
// >>>>>>> feature-objects
    /**
     * method that returns browser details
     * @return array
     */
    public static function showMeTheMoney(){
       var_dump($_SERVER);
    }
  }
  //Instantiation
  new TellMe();
  //@TODO : Instead of calling the method in the constructor, create an object and call it
  //@Submit your changes and push them to your repo :)
  $dude=new Tellme;
  $dude->sayBrowsers();
?>
