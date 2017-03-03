<?php

/**
 * Class Animal
 */
class Animal
{
    /**
     * @var string
     */
    protected $name='';
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name.'</br>';
    }

    /**
     * Animal constructor.
     * @param $name
     */
    function __construct($name) {
        $this->name=$name;
    }
}
/**
 * Class Cat
 */
class Cat extends Animal
{
    /**
     * @var string
     */
    protected $catname='';

    /**
     * @return string
     */
    public function meow ()
    {
        return "Cat {$this->catname} is sayig meow</br>";
    }

    /**
     * Cat constructor.
     * @param $catname
     */
    function __construct($catname) {
        parent::__construct($catname);
        $this->catname=$this->name;
    }
}


$cat = new Cat('garfield');
echo $cat->getName ();
echo $cat->meow ();