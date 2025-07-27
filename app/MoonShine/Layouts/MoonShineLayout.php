<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\CouponResource;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\ReviewResource;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Layouts\CompactLayout;
use MoonShine\MenuManager\MenuItem;
use MoonShine\UI\Components\{Layout\Layout};

final class MoonShineLayout extends CompactLayout
{
    public function build(): Layout
    {
        return parent::build();
    }

    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
            MenuItem::make('Categories', CategoryResource::class),
            MenuItem::make('Products', ProductResource::class),
            MenuItem::make('Orders', OrderResource::class),
            MenuItem::make('Reviews', ReviewResource::class),
            MenuItem::make('Coupons', CouponResource::class),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);
        // $colorManager->primary('#00000');
    }
}
