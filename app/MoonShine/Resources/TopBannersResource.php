<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\TopBanner;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;

/**
 * @extends ModelResource<TopBanner>
 */
class TopBannersResource extends ModelResource
{
    protected string $model = TopBanner::class;

    protected string $title = 'TopBanners';
    
    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title'),
            Text::make('Description'),
            Image::make('Image'),
            BelongsTo::make('Category','category',fn($item)=>$item->id . '. ' . $item->name,CategoryResource::class),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Title'),
                Text::make('Description'),
                Image::make('Image'),
                BelongsTo::make('Category','category',fn($item)=>$item->id . '. ' . $item->name,CategoryResource::class),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Title'),
            Text::make('Description'),
            Image::make('Image'),
            BelongsTo::make('Category','category',fn($item)=>$item->id . '. ' . $item->name,CategoryResource::class),
        ];
    }

    /**
     * @param TopBanner $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
