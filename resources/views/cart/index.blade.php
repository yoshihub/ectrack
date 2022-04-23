@extends('layouts.base')

@section('title')
気になる
@endsection

@section('main')
@if(count($line)>0)
@foreach($line as $item)
<div class="row m-2 p-1 border-bottom border-secondary">
  <div class="col-md-3 me-5">
    <img src="{{$item->image}}" alt="トラック画像">
  </div>
  <div class="col-md-4">
    <table class="table">
      <tr>
        <th class="table-light">名前</th>
        <td>{{$item->name}}</td>
      </tr>
      <tr>
        <th class="table-light">価格</th>
        <td>{{number_format($item->price)}}円</td>
      </tr>
      <tr>
        <th class="table-light">走行距離</th>
        <td>{{$item->run}}Km</td>
      </tr>
    </table>
      <form class="delete" method="post" action="{{route('line.delete')}}">
      @csrf
      <input type="hidden" name="id" value="{{$item->pivot->id}}">
      <button class="btn btn-danger" type="submit">削除</button>
      </form>
  </div>

</div>

@endforeach

@else
気になるがありません
@endif


@endsection
