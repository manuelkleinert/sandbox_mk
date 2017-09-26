<?php

declare(strict_types = 1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Loader\ImplementationLoader;

/**
 * Loads implementations from a fixed name => className map
 */
class ClassMapLoader extends AbstractClassNameLoader
{
    /**
     * @var array
     */
    protected $classMap = [];

    /**
     * @param array $classMap
     */
    public function __construct(array $classMap = [])
    {
        $this->classMap = $classMap;
    }

    /**
     * @inheritDoc
     */
    public function supports(string $name): bool
    {
        return isset($this->classMap[$name]);
    }

    public function getClassMap(): array
    {
        return $this->classMap;
    }

    /**
     * @inheritDoc
     */
    protected function getClassName(string $name)
    {
        return $this->classMap[$name];
    }
}
