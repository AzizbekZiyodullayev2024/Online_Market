<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Products';
    
    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name','name'),
            Text::make('Description','description'),
            Text::make('Price','price'),
            Text::make('Sale_price','sale_price'),
            Text::make('Stock_quantity','stock_quantity'),
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
                Text::make('Name','name'),
                Text::make('Description','description'),
                Text::make('Price','price'),
                Text::make('Sale_price','sale_price'),
                BelongsTo::make(
                    'ProductCategory',
                    'productCategory',
                    fn($item)=>" $item->id . $item->name",
                    CategoryResource::class)
                    ->afterFill(fn($field) => $field->setColumn('category_id'))->nullable(),
                BelongsTo::make(
                    'ProductVolume',
                    'productVolume',
                    fn($item)=>"$item->id . $item->name",
                    VolumeResource::class)
                    ->afterFill(fn($field) => $field->setColumn('product_volume'))->nullable(),
                Text::make('Stock_quantity','stock_quantity'),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make('ID','id'),
            Text::make('Name','name'),
            Text::make('Description','description'),
            Text::make('Price','price'),
            Text::make('Sale_price','sale_price'),
            Text::make('Category_id','category_id'),
            Text::make('Volume','product_volume'),
            Text::make('Stock_quantity','stock_quantity'),
        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}