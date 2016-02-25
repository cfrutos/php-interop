<?php
namespace PhpInterop\Config;

/**
 * Configuration provider spec
 */
interface IConfiguration
{
    /**
     * Get configuration value
     *
     * @param string $key Key config
     * @param mixed $defaultValue Default Value
     *
     * @return mixed
     */
    public function get($key, $defaultValue = null);

    /**
     * Set configuration value
     *
     * @param string $key Key
     * @param mixed $value Value
     *
     * @return self
     */
    public function set($key, $value);
}