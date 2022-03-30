<div class="modal-body">
    <h5 class="text-center">¿Realmente quieres anular la reserva de {{ $reserva->name }} ?</h5>
</div>
<div class="modal-footer">
    <a href="{{ route('misreservas') }}">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    </a>
    <button class="btn" type="button" onclick="location.href = '{{ route('reserva.destroy', $reserva->id) }}'">Sí, anular esta reserva</button>
</div>


