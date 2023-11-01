<?php

namespace App\Livewire;

use App\Models\IoTData;
use Livewire\Component;
use Livewire\WithPagination;

class FetcheiotData extends Component
{
    use WithPagination;

    public function render()
    {
        $records = IoTData::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.fetcheiot-data', ['records' => $records]);
    }
    public function refreshData()
    {
        $this->render();
    }
}
