<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\BlockBundle\Menu;

/**
 * @author Christian Gripp <mail@core23.de>
 */
interface MenuRegistryInterface
{
    /**
     * Adds a new menu.
     */
    public function add(string $name): void;

    /**
     * Returns all alias names.
     *
     * @return string[]
     */
    public function getAliasNames(): array;
}
