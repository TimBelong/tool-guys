<?php

namespace App\Livewire\Categories\Component;

use App\Models\Inventory;

use Livewire\Component;

class CategoriesComponent extends Component
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