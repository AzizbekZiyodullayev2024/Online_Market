<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use MoonShine\Laravel\Fields\Relationships\HasMany;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\MorphMany;
use MoonShine\Laravel\Fields\Relationships\MorphTo;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image as ImageField;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<Image>
 */
class ImageResource extends ModelResource
{
    protected string $model = Image::class;

    protected string $title = 'Images';
    
    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            ImageField::make('image'),
            MorphTo::make('ImageAble','imageable',fn($item) => $item->id.". " . "$item->name")->types([
                        Category::class => ['Categories','Category'],
                        Product::class => ['Products','Product']
                    ]),
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
                ImageField::make('path'),
                MorphTo::make('ImageAble')
                    ->types([
                        Category::class => ['Categories','Category'],
                        Product::class => ['Products','Product']
                    ]),
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
            ImageField::make('image'),
            MorphTo::make('ImageAble')
            ->types([
                        Category::class => ['Categories','Category'],
                        Product::class => ['Products','Product']
                    ]),
        ];
    }

    /**
     * @param Image $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}