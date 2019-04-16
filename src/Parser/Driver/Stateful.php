<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\Component\Parser\Driver;

use Railt\Component\Parser\ParserInterface;

/**
 * @deprecated since Railt 1.4, use Railt\Component\Parser\Parser instead.
 */
abstract class Stateful extends Proxy
{
    /**
     * Stateful constructor.
     */
    public function __construct()
    {
        parent::__construct($this->boot());
    }

    /**
     * @return ParserInterface
     */
    abstract protected function boot(): ParserInterface;
}
