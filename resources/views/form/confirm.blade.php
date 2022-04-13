@extends('layouts.base')

@section('title')
お問い合わせ
@endsection

@section('main')
<h2 style="text-align:center;">確認画面</h2>

<form class="toiForm" action="{{route('form.send')}}" method="post">
  @csrf
  <label style="font-size:20px;">お名前</label>
  <div>
    {{$input['name']}}
  </div>
  <label style="font-size:20px;">件名</label>
  <div>
    {{$input['title']}}
  </div>
  <label style="font-size:20px;">問い合わせ内容</label>
  <div>
    {{$input['body']}}
  </div>
  <input type="submit" value="確認">
</form>
@endsection
