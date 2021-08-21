<?php

namespace App\View\Components;

use App\Models\RecordType;
use Illuminate\View\Component;

class RecordTypeDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.record-type-dropdown',
            [
                'recordTypes' => RecordType::all(),
                'currentRecordType' => RecordType::firstWhere('name', request('recordType'))
            ]);
    }
}
