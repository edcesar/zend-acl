<?php

namespace App;

use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class Permissoes 
{
    public $acl;

    public function __construct()
    {
        $this->run();
    }
    
    public function run() {
        $this->acl = new Acl();

        $this->acl->addRole(new Role('guest'))
                ->addRole(new Role('member'))
                ->addRole(new Role('admin'));

        $parents = array('guest', 'member', 'admin');
     //   $acl->addRole(new Role('someUser'), $parents);

        $this->acl->addResource(new Resource('someResource'));

        $this->acl->deny('guest', 'someResource');
        $this->acl->allow('member', 'someResource');

        return $this;
       // return $this->acl->isAllowed('member', 'someResource') ? 'allowed' : 'denied';
    }

}
