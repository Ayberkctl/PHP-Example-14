<?php

class User {
    public $name='Ayberk';
    public $surname = 'catal';
    const old= 19;
    public $text;

    public function showName(){
        return $this->name . self::old;   
    }
    public function difrentMetod($a,$b){
        return $this->test($a,$b);
    }
    
    public function test($a,$b){
       return $a+$b;
    }
    public function showText(){
        return $this->text;   
    }
}
$user =new user();

echo $user->surname.'<br>';
echo User::old .'<br>';

echo  $user->difrentMetod(24.2,52).'<br>';

echo $user->test(12.5,2252.5).'<br>';

echo  $user->showName();

$user->text='<br> test text ';
echo $user->showText().' '. $user->showName();
$user->name='Alper';
echo $user->showText().' '. $user->showName();
?>