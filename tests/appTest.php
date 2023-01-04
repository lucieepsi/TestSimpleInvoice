<?php 
namespace App\Tests;
use PHPUnit\Framework\TestCase;

include("fonctionTest/test.php");

class AppTest extends TestCase{
    public function testOther(){
        $this->assertEquals(testRep2(),1+1);
    }
}