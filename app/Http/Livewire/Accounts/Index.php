<?php

namespace App\Http\Livewire\Accounts;

use App\Models\Account;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;

    private $accounts;

    public function render()
    {
        if ($this->search) {
            $this->accounts = Account::search($this->search)->orderBy('fullname')->paginate(12);
        } else {
            $this->accounts = Account::orderBy('fullname')->paginate(12);
        }

        return view('livewire.accounts.index', ['accounts' => $this->accounts]);
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }
}
