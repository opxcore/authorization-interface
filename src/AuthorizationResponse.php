<?php

/**
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Interfaces\Authorization;

interface AuthorizationResponse
{
    /**
     * Check response action authorized.
     *
     * @param string $action
     *
     * @return  bool
     */
    public function can(string $action): bool;
}