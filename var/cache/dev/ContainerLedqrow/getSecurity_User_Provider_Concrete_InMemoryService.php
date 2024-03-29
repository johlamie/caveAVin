<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user.provider.concrete.in_memory' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/InMemoryUserProvider.php';

return $this->services['security.user.provider.concrete.in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider(['lambda' => ['password' => '$2y$12$S7SbMeyZFQQbttsIDaXeBeYK57aSksToUxWEMDeJlnTpoEy1x.2KK', 'roles' => [0 => 'ROLE_USER']], 'admin' => ['password' => '$2y$12$McnRkN6Xyxnfwdu50V.qgeMpS1jU0KyDQ1ET8Gaax6H5GggPV2PRG', 'roles' => [0 => 'ROLE_ADMIN']]]);
