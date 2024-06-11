<div>
    <h1>{{ $count }}</h1>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>
    <button wire:click="increment(25)">+25</button>
    <button wire:click="resetCounter">reset</button>

</div>
