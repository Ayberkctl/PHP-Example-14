<?php

    /*class Marka{

    }

    class Model extends Marka {

    }
    final class Seri extends Model{

    }
    class Urun extends Seri{
        public function test(){
            return 'urun';
        }
    }
    $urun = new Urun;
    echo $urun->test();
    */

    class Workers {
        final public function test(){
            return 'wokrers:test';
        }
    }
    class Accountants extends Workers {
        public function test(){
            return 'Accountants:test';
        }
    }
    $accountant= new Accountants;
    echo $accountant->test();

?>