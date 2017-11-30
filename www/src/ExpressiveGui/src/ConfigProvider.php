<?php

namespace ExpressiveGui;

/**
 * @package ExpressiveGui
 */
class ConfigProvider
{
    /**
     * @return array
     */
    public function __invoke(): array
    {
        return require __DIR__ . '/../config/module.php';
    }
}