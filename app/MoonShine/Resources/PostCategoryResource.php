<?php

declare(strict_types=1);
namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;
use Illuminate\Support\Str;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Date;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\Fields\Field;
use MoonShine\Contracts\Resources\ResourceContract;

/**
 * @extends ModelResource<PostCategory>
 */

class PostCategoryResource extends ModelResource
{
    protected string $model = PostCategory::class;

    protected string $title = 'PostCategories';
    
    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title','name'),
            Date::make('Updated_at','updated_at')->sortable(),
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
                Text::make('Title','name'),
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
            Text::make('Title','name'),
            Date::make('Updated_at','updated_at'),
        ];
    }

    /**
     * @param PostCategory $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
    // public function beforeCreating (mixed $item):mixed{
    //     if($item instanceof PostCategory){
    //         $item->slug = Str::slug($item->title);
    //     }
    //     return $item;
    // }
}
