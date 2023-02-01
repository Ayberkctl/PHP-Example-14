<?php


//public
//private
//protected

class Test{
    public $a='A';
    private $b='B';
    protected $c='C';

    public function returnB(){
        return $this->b;
    }
    public function returnC(){
        return $this->c;
    }
}

class TestTwo extends Test {

        public function returnC2(){
            return $this->returnC();
        }

}


$test= new Test;
$test2= new TestTwo;
// FATAL ERROR ->  echo $test->b;
echo $test->returnB();
echo $test->returnC();

echo $test2->returnC2();


?>