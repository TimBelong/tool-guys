<?php

declare(strict_types=1);

namespace App\Livewire\Categories;

use App\Livewire\Categories\Component\CategoriesComponent;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class Categories extends CategoriesComponent
{
    public array $categories = [];

    public function mount(): void
    {
        $categories = $this->categoriesRepository->getParentCategories();

        // Преобразуем в массив и добавляем вложенные категории
        $this->categories = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'title' => $category->title,
                'rent_in_hand_id' => $category->rent_in_hand_id,
                'children' => $this->categoriesRepository->getChildCategories($category->rent_in_hand_id)
                    ->map(fn($child) => [
                        'id' => $child->id,
                        'title' => $child->title,
                        'rent_in_hand_id' => $child->rent_in_hand_id
                    ])
                    ->toArray(), // Делаем массив из дочерних категорий
            ];
        })->toArray();
    }

    public function render(): View|Factory|Application
    {
        return view('categories.livewire.menu-list');
    }
}


