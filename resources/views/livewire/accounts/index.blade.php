<div>
    <h2>Accounts</h2>
    @if($accounts->isNotEmpty()|| ($accounts->isEmpty() && $search))
    <div class="mb-3 flex">
    <div class="flex bg-light border-b border-lighter flex items-center p-2 text-lighter">
        <i class="fa fa-search"></i>
    </div>
    <input type="search" wire:model="search" class="flex-shrink m-0" placeholder="Search Accounts"/>
    </div>
    @if($accounts->isNotEmpty())
    {{ $accounts->links('pagination.tailwind') }}
    <div class="flex flex-wrap">
    @foreach($accounts as $account)
    <div class="flex flex-col rounded shadow px-4 pt-4 h-64 w-64 mr-2 mb-2 flex-shrink-0 bg-dark text-white">
    <div>
    <p class="flex justify-between"><span class="font-bold">Name:</span> {{$account->fullname}}</p>
    </div>
    </div>
    @endforeach
    </div>
    
    @else 
    <p>Search for <strong>{{$search}}</strong> returned no results</p>
    @endif
    @else 
    <p>There are no accounts yet</p>
    @endif
</div>