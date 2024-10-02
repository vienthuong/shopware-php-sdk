<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Vin\ShopwareSdkEntityGenerator\DependencyInjection\RemoveCommandsCompilerPass;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
        $container->addCompilerPass(new RemoveCommandsCompilerPass());
    }
}
