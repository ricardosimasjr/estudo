<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.update', ['produto' =>$produto->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
            <label for="sku">SKU</label>
            <input type="text" name="sku" id="sku" value="{{old('sku', $produto->sku)}}">
        </div>
        <div>
            <label for="nome">NOME</label>
            <input type="text" name="nome" id="nome" value="{{old('nome', $produto->nome)}}">
        </div>
        <div>
            <label for="foto">FOTO</label>
            <input type="file" name="foto" id="foto" value="{{old('foto', $produto->foto)}}">
        </div>
        <div>
            <button type="submit">Salvar</button>
        </div>

    </form>

</body>
</html>
