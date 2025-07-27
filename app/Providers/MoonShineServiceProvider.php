<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\CouponResource;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\ReviewResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param MoonShine             $core
     * @param MoonShineConfigurator $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                CategoryResource::class,
                ProductResource::class,
                OrderResource::class,
                ReviewResource::class,
                CouponResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ]);
    }
}
