<form action="{{ route('reserva.destroy', $reserva->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">¿Realmente quieres anular la reserva de {{ $reserva->name }} ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Sí, anular esta reserva</button>
    </div>
</form>
