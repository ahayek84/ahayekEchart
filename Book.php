<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Declare the interface 'iBook'
abstract class iBook
{
	private $property;
   function __construct($property) {
      $this->Property = $property;
   }   
    public function setID($var){}
    public function setName($var){}
    public function setPrice($var){}
    public function getID(){  return " "; }
    public function getName(){  return " "; }
    public function getPrice(){  return " "; }
    public function getobjType(){  return get_class($this).""; }

}

class CBook extends  iBook
{
	private $vars = array();

    function __construct() {
     
   }

    public function setID($var)
    {
    	 $this->vars["ID"] = $var;
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function setName($var)
    {
        $this->vars["Name"] = $var;
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function setPrice($var)
    {
        $this->vars["Price"] = $var;
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

        public function getID()
    {
        return $this->vars["ID"];
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function getName()
    {
       return $this->vars["Name"];
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function getPrice()
    {
        return $this->vars["Price"];
        // print "Book OBject Attribute ADDED ".$var."\n";
    }
    public function getobjType(){  return get_class($this).""; }


}

class SBook extends  iBook
{
	private $vars = array();

    function __construct() {
     
   }

    public function setID($var)
    {
    	 $this->vars["ID"] = $var;
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function setName($var)
    {
        $this->vars["Name"] = $var;
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function setPrice($var)
    {
        $this->vars["Price"] = $var;
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function setStartDT($var)
    {
        $this->vars["StartDT"] = $var;
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function setEndDT($var)
    {
        $this->vars["EndDT"] = $var;
        // print "Book OBject Attribute ADDED ".$var."\n";
    }
        public function getID()
    {
        return $this->vars["ID"];
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function getName()
    {
       return $this->vars["Name"];
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function getPrice()
    {
        return $this->vars["Price"];
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function getStartDT()
    {
        return $this->vars["StartDT"];
        // print "Book OBject Attribute ADDED ".$var."\n";
    }

    public function getEndDT()
    {
        return $this->vars["EndDT"];
        // print "Book OBject Attribute ADDED ".$var."\n";
    }
    public function getobjType(){  return get_class($this).""; }


}

class EChart 
{
	var $cnt = 1;
	private $vars = array();
	//$iBook = new iBook();
	//$vars[] = &$o;
    //print_r($vars);

    function __construct() {
     
   }

    public function addBook(iBook $viBook,$template)
    {
       echo get_class($viBook)."\n";

       if (empty($cnt))
       {
        $cnt = 0;
       }else{
        $cnt = $cnt + 1;
       }
      
       $this->vars[$cnt] = $viBook;
       //var_dump($vars[]);

        foreach($this->vars as $name => $value) {

        	echo "{$name} => {$value->getID()}"."<br>";
        	echo "{$name} => {$value->getName()}"."<br>";
        	echo "{$name} => {$value->getPrice()}"."<br>"; 

        	if (strcmp($value->getobjType(),"SBook") ==0)  // = 
        	{
             echo "{$name} => {$value->getStartDT()}"."<br>";
             echo "{$name} => {$value->getEndDT()}"."<br>";
            } elseif (strcmp($value->getobjType(),"CBook") ==0)
            {
                //$template = str_replace('{' . $name . '}', $value, $template);
               echo " Nothing in addtion imp"."<br>";
               //echo "{$name} => {$value-> getID() ."". $value-> getName() ."".$value-> getPrice()}";
              // print_r($vars);	
            }else 
            {
               echo "Have a good night!";
            }
  
        }
       
       return $template;
              //$ListOfObjects][] = new iBook(1);
       //print_r($ListOfObjects);
       // print "Book OBject Attribute ADDED ".$var."\n";
    }

}

?>

