<?php

declare(strict_types=1);

use Arkitect\ClassSet;
use Arkitect\CLI\Config;
use Arkitect\Expression\ForClasses\NotDependsOnTheseNamespaces;
use Arkitect\Expression\ForClasses\ResideInOneOfTheseNamespaces;
use Arkitect\Rules\Rule;

return static function (Config $config): void {
    $classSet = ClassSet::fromDir(__DIR__.'/src');

    $pluginDoesntDependOnAppRule = Rule::allClasses()
        ->that(new ResideInOneOfTheseNamespaces('Alphpaca\SyliusSkeletonPlugin'))
        ->should(new NotDependsOnTheseNamespaces('App'))
        ->because('we want to separate plugin from tests application');

    $config->add($classSet, $pluginDoesntDependOnAppRule);
};
