<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndexSearch extends Component
{
    public $manufacturer = '';
    public $model = '';
    public $year = '';
    public $colour = '';

    protected $queryString = [
        'manufacturer' => ['except' => ''],
        'model' => ['except' => ''],
        'year' => ['except' => ''],
        'colour' => ['except' => '']
    ];

    public function search()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.index-search');
    }
}
