<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Consignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ConsignmentComponent extends Component
{
    public function render()
    {
        return view('livewire.consignment');
    }

    public function create()
    {
        return view('livewire.consignment.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'evidence' => 'required|image|max:2048'
        // ]);
        $path = Storage::disk('public')->put('consignment', $request->file('evidence'));

        // $consignment = Consignment::create([
        //     'bank' => $request->bank,
        //     'date' => $request->date,
        //     'detail' => $request->detail,
        //     'advisors_id' => Auth::id(),
        // ]);

        // $consignment->fill(['evidence' => asset($path)])->save();

        // return redirect()->route('consignment.create');

        return asset($path);
    }
}
