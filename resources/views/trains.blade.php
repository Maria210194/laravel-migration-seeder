<div>
    @forelse ($trains as $train)
        <h4>{{ $train->azienda }}</h4>
        <p>{{ $train->stazione_di_partenza }}</p>
        <p>{{ $train->stazione_di_arrivo }}</p>
        <p>{{ $train->getData() }}</p>
    @empty
        <p>Nessun contenuto disponibile</p>
    @endforelse

</div>
