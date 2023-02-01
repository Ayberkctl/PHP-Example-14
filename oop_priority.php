<?php

class a {
    public function test()
    {
        return 'a:test';
    }
}

class b extends a {
    public function test()
    {
        return 'b:test';
    }
}

class c extends b {
    public function test()
    {
        return 'c:test';
    }
    public function testMetodlariniGetir()
    {
        return [
            'c' => self::test(),
            'b' => parent::test(),
            'a' => a::test()
        ];
    }
}

$c = new c;

print_r($c->testMetodlariniGetir());

?>