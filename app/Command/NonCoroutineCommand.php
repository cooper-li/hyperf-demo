<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as HyperfCommand;
use Hyperf\Utils\Coroutine;
use Psr\Container\ContainerInterface;

/**
 * @Command
 */
class NonCoroutineCommand extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    protected $coroutine = false;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('demo:non');
    }

    public function configure()
    {
        $this->setDescription('Hyperf Demo Command');
    }

    public function handle()
    {
        var_dump(Coroutine::inCoroutine());
        $this->line('Hello Hyperf!', 'info');
    }
}
