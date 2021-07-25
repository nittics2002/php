<?php

namespace Concerto\pattern\builder;

use Psr\container\ContainerInterface;
use Concerto\pattern\builder\StandardFactoryInterface;

class StandardFactory implements StandardFactoryInterface
{

  /**
   *  @var ContainerInterface $container
   */
  private ContainerInterface $container;

  /**
   *  __construct
   *
   *  @param ContainerInterface $container
   */
  public function __construct(
    ContainerInterface $container
  ) {
    $this->container = $container;
  }

  /**
   *  {inherit}
   */ 
  public function build(
    string $namespace,
    ?array $arguments
  ): object; {

    aaa
  }

} 
