<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import('vendor/alphpaca/coding-standard/rector.php');

    $rectorConfig->paths([
        __DIR__ . '/src/SyliusSkeletonPlugin/src',
        __DIR__ . '/src/SyliusSkeletonPlugin/tests',
    ]);
};
