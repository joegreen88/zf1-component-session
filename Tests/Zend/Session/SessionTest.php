<?php
namespace Tests\Zend\Validate;

class CacheTest extends \Tests\TestCase
{
    protected $classes = array(
        '\Zend_Session',
        '\Zend_Session_Abstract',
        '\Zend_Session_Exception',
        '\Zend_Session_Namespace',
        //'\Zend_Session_SaveHandler_DbTable',  # Excluded; this handler depends on Zend_Db_Table
        '\Zend_Session_SaveHandler_Exception',
        '\Zend_Session_SaveHandler_Interface',
        '\Zend_Session_Validator_Abstract',
        '\Zend_Session_Validator_HttpUserAgent',
        '\Zend_Session_Validator_Interface'
    );

    /**
     * Ensure that the composer autoloader is finding the classes correctly.
     */
    public function testCanFindClasses()
    {
        foreach ($this->classes as $class) {
            $this->assertTrue(class_exists($class) || interface_exists($class));
        }
    }
}