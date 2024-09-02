
<a href="{{route('product.create')}}">Novo Produto</a>

<hr>

@foreach ($produtos as $produto)
    <div>
        {{$produto->sku}} - {{$produto->nome}} - {{$produto->foto}} <br>
    </div>
@endforeach
