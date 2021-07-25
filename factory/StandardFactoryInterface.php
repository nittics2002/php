<?php

namespace Concerto\pattern\builder;

interface StandardFactoryInterface
{
  /*
   *  build
   *
   *  @param string $namespace
   *  @param ?array $arguments
   *  @retun object
   */ 
  public function build(
    string $namespace,
    ?array $arguments
  ): object;
} 
