@extends('layouts.base')

@section('title')
商品詳細
@endsection

@section('main')
<div class="showCard">
  <div class="product_img">
    <img src="{{$product->image}}" alt="トラック画像">
  </div>
  <div>
    <table class="table">
      <tr>
        <th>名前</th>
        <td>{{$product->name}}</td>
      </tr>
      <tr>
        <th>価格</th>
        <td>{{number_format($product->price)}}円</td>
      </tr>
      <tr>
        <th>走行距離</th>
        <td>{{$product->run}}Km</td>
      </tr>
      <tr>
        <th>年式</th>
        <td>{{$product->age}}年</td>
      </tr>
      <tr>
        <th>種類</th>
        <td>{{$product->kinds}}</td>
      </tr>
      <tr>
        <th>説明文</th>
        <td>{{$product->description}}</td>
      </tr>
    </table>
  </div>
  <form action="{{route('line.create')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$product->id}}">
    <button class="btn btn-outline-success" type="submit">気になる</button>
  </form>
  <a class="btn btn-outline-primary mt-2" href="{{route('form.show')}}">お問い合わせ</a>
</div>


@endsection
