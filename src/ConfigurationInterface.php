<?php

declare(strict_types=1);

/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for dgfgfdg by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIMATICCalculatorLib;

use APIMATICCalculatorLib\Proxy\ProxyConfigurationBuilder;
use CoreInterfaces\Http\HttpConfigurations;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Represents the proxy configurations for API calls.
     */
    public function getProxyConfigurationBuilder(): ProxyConfigurationBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::CALCULATOR): string;
}
