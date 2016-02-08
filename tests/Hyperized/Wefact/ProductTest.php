<?php

  use Hyperized\Wefact;

  class ProductTest extends PHPUnit_Framework_TestCase
  {
    protected $object;
    protected $className = 'Hyperized\Wefact\Product';

    protected function setUp()
    {
      $this->object = new Wefact\Product();
    }

    // Test if product initiates
    public function testProductInstanceOf()
    {
      $this->assertInstanceOf($this->className, $this->object);
    }

    // Testing availability of public class attributes
    public function testClassHasAllowed()
    {
      $this->assertClassHasAttribute('allowed', $this->className);
    }

    public function testClassHasParentName()
    {
      $this->assertClassHasAttribute('parentName', $this->className);
    }

    public function testClassHasNotResponse()
    {
      $this->assertClassNotHasAttribute('response', $this->className);
    }

    public function testClassHasNotMode()
    {
      $this->assertClassNotHasAttribute('mode', $this->className);
    }

    // Test if after initiating the Object has the following attributes:
    public function testObjectHasAllowed()
    {
      $this->assertObjectHasAttribute('allowed', $this->object);
    }

    public function testObjectHasResponse()
    {
      $this->assertObjectNotHasAttribute('response', $this->object);
    }

  }