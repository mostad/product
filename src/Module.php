<?php
namespace Mostad\Product;

/**
 * Class Module
 *
 * @package Mostad\Product
 */
class Module
{
    /**
     * @return array
     */
    public function getConfig()
    {
        return (array) require __DIR__ .'/../config/module.config.php';
    }
}
