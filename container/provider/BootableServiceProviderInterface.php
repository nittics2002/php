<?php

/**
*   BootableServiceProviderInterface
*
*   @ver 170210
*   @see https://github.com/ecfectus/container
**/

declare(strict_types=1);

namespace Concerto\container\provider;

use Concerto\container\provider\ServiceProviderInterface;

interface BootableServiceProviderInterface extends ServiceProviderInterface
{
    /**
    *   プロバイダ登録時実行処理
    *
    **/
    public function boot();
}
