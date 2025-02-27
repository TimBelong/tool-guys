<?php

namespace App\Livewire\Categories\Component;

use App\Models\Inventory;

use App\Repositories\CategoriesRepository;
use Livewire\Component;

class CategoriesComponent extends Component
{
    public ?Inventory $inventory = null;
    public ?CategoriesRepository $categoriesRepository = null;

    public function __construct()
    {
        $this->categoriesRepository = new CategoriesRepository();
    }

    public function hydrate(): void
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}