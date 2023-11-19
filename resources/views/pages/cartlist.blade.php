<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($bookcart as $book)
    <div class="product-item">
        <a href=""><img src="/imagecollection/{{$book->image}}" alt=""></a>
        <div class="down-content">
          <a href=""><h4>{{$book->name}}</h4></a>
          <h6><small><del>$500.00 </del></small>{{$book->price}}</h6>
          <p>{{$book->description}}</p>
        </div>
        {{-- <form method="post" action="{{route('removelist',['id'=>$book])}}">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
      --}}
    @endforeach

</body>
</html>
