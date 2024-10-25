<?php

namespace App\Orchid\Resources;

use App\Models\Post;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class PostResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Post:: class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('title')
                ->title('TITULO')
                ->placeholder('Ingresa el titulo del documento aqui'),
            Input::make('Content')
                ->title('CONTENIDO')
                ->placeholder('Ingresa el contenido que quieres')






        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array /**aqui se modifican las columanas */
    {
        return [
            TD::make('id'),
            TD::make('title',"TITULO"),
            TD::make('content',"CONTENIDO"),
            

            TD::make('created_at', 'Fecha de creacion')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Fecha de actualizacion')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array /**aqui se modifican los campos de la vista de documento */
    {
        return [
            Sight::make('id','ID'),
            Sight::make('title','TITULLO'),
            Sight::make('content','CONTENIDO'),
            Sight::make('created_at','FECHA DE CREACIÒN'),
            Sight::make('update_at','UPDATE DATE'),




        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
