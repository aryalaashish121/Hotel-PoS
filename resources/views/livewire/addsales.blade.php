<div style="text-align: center">
    <button wire:click="checkValue">+</button>
    <h1>{{ $count }}</h1> {{$data}}
    <button wire:click="decrement">-</button>
    
    <div x-data>
        <span x-show="$wire.showMessage">...</span>
    
        <button x-on:click="$wire.toggleShowMessage()">...</button>
    </div>
</div>