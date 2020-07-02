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

interface AuthorizationInterface
{
    /**
     * Check if security context can perform actions on permission set.
     *
     * @param array $permissions
     * @param array|string[] $actions
     *
     * @return  AuthorizationResponse
     */
    public function check(?array $permissions, array $actions = ['create', 'read', 'update', 'delete']): AuthorizationResponse;
}