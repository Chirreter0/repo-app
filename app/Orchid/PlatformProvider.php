<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {
        return [
            Menu::make('Inicio')
                ->icon('bs.book')
                ->route(config('platform.index'))
                ->divider(),

            Menu::make(__('Usuarios'))
                ->icon('bs.people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Control de Acceso')),

            Menu::make(__('Roles'))
                ->icon('bs.shield')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->divider(),

            Menu::make('Unitropico')
                ->title('Informacion')
                ->icon('bs.box-arrow-up-right')
                ->url('http://www.unitropico.edu.co/')
                ->target('_blank'),

            Menu::make('Changelog')
                ->icon('bs.box-arrow-up-right')
                ->url('https://github.com/Chirreter0/repo-app/releases/tag/pre-release')
                ->target('_blank')
                ->divider(),

        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
