<?php
use App\Permissoes;

require_once 'vendor/autoload.php';

$permissoes = new Permissoes;

if ($permissoes->acl->isAllowed('member', 'someResource')) {
    echo "pass" . PHP_EOL;
} else {
    echo "denied" . PHP_EOL;
}
