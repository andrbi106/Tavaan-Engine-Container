<?php

declare(strict_types=1);

namespace Tavaan\Engine\Container\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * container:graph command.
 */
final class Container_graphCommand implements CommandInterface
{
    public function name(): string
    {
        return 'container:graph';
    }

    public function description(): string
    {
        return 'Run container:graph (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
