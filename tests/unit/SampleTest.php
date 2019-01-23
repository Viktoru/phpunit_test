<?php
/**
 * Created by PhpStorm.
 * User: victor.unda
 * Date: 1/22/19
 * Time: 2:53 PM
 */
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
  //

  public function testTrueAssertsToTrue()

  {
    $user = new \App\Models\User;

    $user->setFirstName('Victor');

    $this->assertEquals($user->getFirstName(), 'Victor');

//    $this->assertTrue(true);
  }

  public function testThatWeCanGetTheLastName()

  {
    $user = new \App\Models\User;

    $user->setLastName('Unda');

    $this->assertEquals($user->getLastName(), 'Unda');

    //    $this->assertTrue(true);
  }

}