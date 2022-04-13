@extends('layouts.base')

@section('title')
気になる
@endsection

@section('main')
@if(count($line)>0)
@foreach($line as $item)
<div class="card">
  <div class="product_img">
    <img src="{{$item->image}}" alt="トラック画像">
  </div>
  <div>
    <table class="table">
      <tr>
        <th>名前</th>
        <td>{{$item->name}}</td>
      </tr>
      <tr>
        <th>価格</th>
        <td>{{number_format($item->price)}}円</td>
      </tr>
      <tr>
        <th>走行距離</th>
        <td>{{$item->run}}Km</td>
      </tr>
    </table>
  </div>
  <form class="delete" method="post" action="{{route('line.delete')}}">
    @csrf
    <input type="hidden" name="id" value="{{$item->pivot->id}}">
    <button type="submit">削除</button>
  </form>
</div>

@endforeach

@else
気になるがありません
@endif


@endsection
