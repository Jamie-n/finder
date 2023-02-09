<?php

namespace App\Http\ViewComposers;

use App\Models\BodyStyle;
use Illuminate\View\View;

class BodyStyleViewComposer
{
    public function compose(View $view)
    {
        $view->with('bodyStyles', BodyStyle::query()->orderBy('name')->get());
    }
}
