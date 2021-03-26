@extends('layouts.view')

@section('mainContainer')
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<!-- Ejemplo de condicional If -->

@if (count($users) === 1)
  <span class="badge">1 Elemento dentro del array usuarios</span>
@elseif (count($users) > 1)
  <span class="badge bg-success">Varios elementos dentro del array</span>
@else
  <span class="badge">No hay elementos</span>
@endif

<!-- Ejemplo de ciclo for -->

<ul>
    @for ($i = 0; $i <= 10; $i++)
        <li>El valor de actual es: {{$i}}</li>
    @endfor
</ul>

<!-- Ejemplo ciclo forech extrayendo datos Users -->

<ul>
    @foreach ($users as $user)
        <li>{{ $user }}</li>
    @endforeach
</ul>
@endsection  