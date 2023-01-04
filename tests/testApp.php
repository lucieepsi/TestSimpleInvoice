<?php 
namespace App\Tests;
use fonctionTest\test;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase{
    public function test(){
        $this->assertEquals(test(),1+1);
    }
}