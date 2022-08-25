<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->import('vendor/alphpaca/coding-standard/ecs.php');

    $ecsConfig->paths([__DIR__ . '/src/SyliusSkeletonPlugin/src', __DIR__ . '/src/SyliusSkeletonPlugin/tests']);
};
