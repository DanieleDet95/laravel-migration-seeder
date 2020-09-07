<h1>Lista macchine</h1>

@foreach ($cars as $car)
<ul>
  <li>Targa: {{ $car->targa }}</li>
  <li>Marca: {{ $car->marca }}</li>
  <li>Modello: {{ $car->modello }}</li>
  <li>Anno: {{ $car->anno }}</li>
  <li>Dettagli: {{ $car->dettagli }}</li>
</ul>
@endforeach
