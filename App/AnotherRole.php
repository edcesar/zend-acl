<?php

namespace App;

use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class AnotherRole 
{
    public $acl;

    public function __construct()
    {
        $this->applyRules();
    }
    
    public function applyRules() {
        $this->acl = new Acl();

        $this->acl->addRole(new Role('guest'))
                ->addRole(new Role('member'))
                ->addRole(new Role('admin'));

        $this->acl->addResource(new Resource('someResource'));

        $this->acl->deny('guest', 'someResource');
        $this->acl->allow('member', 'someResource');

        return $this;
    }

}
