<?php

namespace App\Livewire\Admin\Plans;

use App\Models\Plan;
use Livewire\Component;
use Illuminate\Support\Str;

class Index extends Component
{
    public $plans;
    public $plan_id, $name, $price, $type, $duration_days, $description;
    public $editing = false;

    public function mount()
    {
        $this->plans = Plan::all();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'type' => 'required|in:recurring,one_time',
            'price' => 'required|numeric|min:0',
            'duration_days' => 'nullable|integer|min:1',
        ]);

        if ($this->editing) {
            $plan = Plan::findOrFail($this->plan_id);
            $plan->update([
                'name' => $this->name,
                'type' => $this->type,
                'price' => $this->price,
                'duration_days' => $this->type === 'recurring' ? $this->duration_days : null,
                'description' => $this->description,
            ]);

            session()->flash('success', 'Plan berhasil diperbarui.');
        } else {
            Plan::create([
                'id' => Str::uuid(),
                'name' => $this->name,
                'type' => $this->type,
                'price' => $this->price,
                'duration_days' => $this->type === 'recurring' ? $this->duration_days : null,
                'description' => $this->description,
            ]);

            session()->flash('success', 'Plan berhasil ditambahkan.');
        }

        return redirect()->route('admin.plans.index');
    }

    public function edit($id)
    {
        $plan = Plan::findOrFail($id);

        $this->plan_id = $plan->id;
        $this->name = $plan->name;
        $this->type = $plan->type;
        $this->price = $plan->price;
        $this->duration_days = $plan->duration_days;
        $this->description = $plan->description;
        $this->editing = true;
    }

    public function render()
    {
        return view('livewire.admin.plans.index')->layout('layouts.app');
    }
}
