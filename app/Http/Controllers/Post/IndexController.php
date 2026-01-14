<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        /**
         * QUERY FILTER FLOW (Eloquent + Service Container)
         *
         * 1. We create a PostFilter instance via Laravel Service Container:
         *    app()->make(PostFilter::class, ['queryParams' => $params])
         *    - The container resolves PostFilter
         *    - Passes query parameters into AbstractFilter constructor
         *    - Allows future constructor dependencies without changing this code
         *
         * 2. Post::filter($filter) is NOT a real method on the model.
         *    Laravel converts this call into a local Eloquent scope:
         *    - filter() -> scopeFilter(Builder $builder, FilterInterface $filter)
         *    - $builder is injected automatically by Eloquent
         *
         * 3. scopeFilter() delegates query modification to the filter object:
         *    $filter->apply($builder)
         *
         * 4. AbstractFilter::apply():
         *    - Iterates over validated query parameters
         *    - Maps each parameter to a callback via getCallbacks()
         *    - Calls filter methods (title, content, categoryId, etc.)
         *    - Each method adds constraints to the Eloquent Builder
         *
         * 5. After all filters are applied, the query continues normally
         *    (paginate(), get(), first(), etc.)
         *
         * RESULT:
         * Controller remains thin.
         * Filtering logic is isolated, reusable, and testable.
         */


        $filter = app()->make(PostFilter::class, [
            'queryParams' => array_filter($data)
        ]);

        $posts = Post::filter($filter)->paginate(6) ;
//        $posts = Post::with('tags')->paginate(6);
        return view('post.index', compact('posts'));
    }
}
