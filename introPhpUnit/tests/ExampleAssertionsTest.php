<?php

use PHPUnit\Framework\TestCase;

//https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html
class ExampleAssertionsTest extends TestCase //Hériter de TestCase
{

    public function testThatStringsMatch() { //Commence par le mot test
        $string1 = 'Testons les tests !';
        $string2 = 'Testons les tests !';
        $this->assertSame($string1, $string2, 'Ceci est un echec !!!'); //Ceci est une assertion
        //En principe on ecrit un test (fonction) avec une seule assertion
    }

    public function testThatStringNotMatch() {
        $string1 = 'Un test qui va échouer';
        $string2 = 'Un test qui va échouer';
        $this->assertNotSame($string1, $string2, 'Ceci est encore un echec !!!');
    }

    public function testThatNumbersAddUp() {
        $this->assertEquals(10, 5 + 5, 'Pas bon !!');
    }

    public function testThatVarIsNull(){
        $null = NULL;
        $this->assertNull($null, 'Cette variable n\'est pas nulle.');
    }
}