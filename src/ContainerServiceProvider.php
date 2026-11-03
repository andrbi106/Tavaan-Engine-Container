<?php

declare(strict_types=1);

namespace Tavaan\Engine\Container;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Container\Contracts\ContainerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * ContainerServiceProvider — ثبت سرویس‌های موتور Container.
 */
final class ContainerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(ContainerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Container($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Container\Console\Container_graphCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            ContainerInterface::class,
        ];
    }
}