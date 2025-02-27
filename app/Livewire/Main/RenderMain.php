<?php

declare(strict_types=1);

namespace App\Livewire\Main;

use App\Livewire\Main\Component\MainComponent;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Throwable;

class RenderMain extends MainComponent
{
    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages/tickets.livewire.form', [
            'action' => 'add',
        ]);
    }

    public function mount(): void
    {

    }

    /**
     * @throws ValidationException
     */
    public function save(): ?RedirectResponse
    {
        try {

            $this->dispatch('success', __('Ticket created'));

            return $this->redirect(route('tickets.index'));
        } catch (ValidationException $e) {
            throw $e;
        } catch (Throwable $e) {
            $this->dispatch('error', __($e->getMessage()));
        }

        return null;
    }
}
