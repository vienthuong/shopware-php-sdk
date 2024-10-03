<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\DependencyInjection;

use Symfony\Bundle\FrameworkBundle\Command\AboutCommand;
use Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand;
use Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand;
use Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand;
use Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand;
use Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand;
use Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand;
use Symfony\Bundle\MakerBundle\Command\MakerCommand;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Dotenv\Command\DebugCommand;

final class RemoveCommandsCompilerPass implements CompilerPassInterface
{
    private const COMMAND_CLASS_WHITELIST = [
        AboutCommand::class,
        CacheClearCommand::class,
        CachePoolClearCommand::class,
        ConfigDebugCommand::class,
        ContainerDebugCommand::class,
        DebugAutowiringCommand::class,
        DebugCommand::class,
        EventDispatcherDebugCommand::class,
        MakerCommand::class,
    ];

    private const COMMAND_WHITELIST = [
        'make:shopware-sdk:entities',
    ];

    public function process(ContainerBuilder $container): void
    {
        $commands = $container->findTaggedServiceIds('console.command');
        foreach ($commands as $id => $tags) {
            $definition = $container->getDefinition($id);
            if (in_array($definition->getClass(), self::COMMAND_CLASS_WHITELIST, true) === false) {
                $container->removeDefinition($id);
                continue;
            }

            /** @var array<string, mixed> $tag */
            foreach ($tags as $tag) {
                if (array_key_exists('command', $tag) === false) {
                    continue;
                }

                if (in_array($tag['command'], self::COMMAND_WHITELIST, true) === false) {
                    $container->removeDefinition($id);
                    break;
                }
            }
        }
    }
}
