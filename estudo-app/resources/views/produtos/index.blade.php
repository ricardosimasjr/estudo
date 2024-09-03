
<a href="{{route('product.create')}}">Novo Produto</a>

<hr>

@foreach ($produtos as $produto)
    <div>
        {{$produto->sku}} - {{$produto->nome}} - <img src="{{asset('storage/'.$produto->foto)}}" width="30px" alt=""> <br>
    </div>
    <div>
        <a href="{{route('product.edit', ['produto'=>$produto->id])}}">Editar</a>
    </div>
@endforeach
