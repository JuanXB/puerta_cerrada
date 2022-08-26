<div style="align-items:center justify-content:center">
   <button wire:click="setDoorOpenOrClosed">Girar llave</button>
   @if ($doorClosed)
       <h1>Abierta</h1>
    @else 
        <h1>Cerrrada</h1>
   @endif
</div>
