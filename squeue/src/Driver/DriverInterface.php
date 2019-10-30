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

namespace Hyperf\Squeue\Driver;

use Hyperf\Squeue\PublishInterface;
use Hyperf\Squeue\RequestInterface;
use Hyperf\Squeue\SubscribeInterface;

interface DriverInterface extends PublishInterface, RequestInterface, SubscribeInterface
{
}
