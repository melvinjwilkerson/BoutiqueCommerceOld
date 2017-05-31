<?php
declare(strict_types=1);

namespace It_All\BoutiqueCommerce\Src\Infrastructure;

use Slim\Container;

abstract class Controller
{
    protected $container; // dependency injection container

    public function __construct(Container $container)
    {
        $this->container = $container;
        // Instantiate services/dependencies
        $container['db'];
        $container['authorization'];
        $container['view'];
        $container['mailer'];
        $container['flash'];
    }

    public function __get($name)
    {
        return $this->container->{$name};
    }
}