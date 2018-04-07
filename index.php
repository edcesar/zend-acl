<?php
use App\AnotherRole;

require_once 'vendor/autoload.php';

$role = new AnotherRole;

if ($role->acl->isAllowed('member', 'someResource')) {
    echo "pass" . PHP_EOL;
} else {
    echo "denied" . PHP_EOL;
}
