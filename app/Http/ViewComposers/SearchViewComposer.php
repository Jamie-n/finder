<?php

namespace App\Http\ViewComposers;

use App\Models\Colour;
use App\Models\Manufacturer;
use App\Models\Model;
use App\Models\Year;
use Illuminate\View\View;

class SearchViewComposer
{

    public function compose(View $view)
    {
        return $view
            ->with('models', Model::all()->pluck('name', 'id'))
            ->with('manufacturers', Manufacturer::all()->pluck('name', 'id'))
            ->with('years', Year::all()->pluck('year_of_manufacture', 'id'))
            ->with('colours', Colour::all()->pluck('name', 'id'));
    }
}
