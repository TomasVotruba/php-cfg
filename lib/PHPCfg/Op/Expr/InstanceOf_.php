<?php

declare(strict_types=1);

/**
 * This file is part of PHP-CFG, a Control flow graph implementation for PHP
 *
 * @copyright 2015 Anthony Ferrara. All rights reserved
 * @license MIT See LICENSE at the root of the project for more info
 */

namespace PHPCfg\Op\Expr;

use PHPCfg\Op\Expr;
use PhpCfg\Operand;

class InstanceOf_ extends Expr
{
    public Operand $expr;

    public Operand $class;

    public function __construct(Operand $expr, Operand $class, array $attributes = [])
    {
        parent::__construct($attributes);
        $this->expr = $this->addReadRef($expr);
        $this->class = $this->addReadRef($class);
    }

    public function getVariableNames(): array
    {
        return ['expr', 'class', 'result'];
    }
}
