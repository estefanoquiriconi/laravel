<div>
    <h1>{{ $count }}</h1>
    <button wire:click="increment">Increment</button>

    <input type="text" wire:model="username">
    <br>
    <h3>{{ $username }}</h3>
</div>
