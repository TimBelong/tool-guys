<?php

namespace App\Livewire\Main\Component;

use App\Models\Inventory;

use Livewire\Component;

class MainComponent extends Component
{
    public ?Inventory $inventory = null;

    public function __construct()
    {

    }

    public function hydrate(): void
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}