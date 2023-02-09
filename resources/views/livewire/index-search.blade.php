<div>
        <div class="row form-group">
            <div class="form-group col">
                {{Form::label('manufacturer', 'Make', ['class'=>'fw-bold text-light ms-2 mb-1'])}}
                {{Form::select('manufacturer', $manufacturers , null, ['class'=>'rounded-pill form-select', 'wire:model.defer' =>'manufacturer', 'placeholder'=> 'Select a Make'])}}
            </div>
            <div class="form-group col">
                {{Form::label('model', 'Model', ['class'=>'fw-bold text-light ms-2 mb-1'])}}
                {{Form::select('model', $models , null, ['class'=>'rounded-pill form-select', 'wire:model.defer' =>'model', 'placeholder'=> 'Select a Model'])}}
            </div>
            <div class="form-group col">
                {{Form::label('year', 'Year', ['class'=>'fw-bold text-light ms-2 mb-1'])}}
                {{Form::select('year', $years , null, ['class'=>'rounded-pill form-select', 'wire:model.defer' =>'year', 'placeholder'=> 'Select a Year'])}}
            </div>
            <div class="form-group col">
                {{Form::label('colour', 'Colour', ['class'=>'fw-bold text-light ms-2 mb-1'])}}
                {{Form::select('colour',$colours , null, ['class'=>'rounded-pill form-select',  'wire:model.defer' =>'colour', 'placeholder'=> 'Select a Colour'])}}
            </div>
            <div class="form-group col align-self-end">
                {{Form::button('Search', ['class'=>'btn btn-danger text-light fs-lg rounded-pill w-100 fw-bold transition', 'wire:click'=>'search', 'type'=>'button'])}}
            </div>
        </div>
    </div>
</div>
