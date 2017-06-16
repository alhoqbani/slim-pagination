<?php

namespace App\Http\Middleware;

use Psr\Container\ContainerInterface;

/**
 * @property  \Slim\Views\Twig $view
 * @property  \Slim\Router     router
 */
class BaseMiddleware
{
    
    /**
     * @var \Interop\Container\ContainerInterface
     */
    protected $c;
    
    public function __construct(ContainerInterface $container)
    {
        $this->c = $container;
    }
    
    public function __get($name)
    {
        if ($this->c->has("{$name}")) {
            return $this->c->{$name};
        }
    }
}
