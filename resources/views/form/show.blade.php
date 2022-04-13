@extends('layouts.base')

@section('title')
お問い合わせ
@endsection

@section('main')
<form class="toiForm" action="{{route('form.post')}}" method="post">
  @csrf
  @error('name')
  {{$message}}<br>
  @enderror
  <label>お名前</label>
  <div>
    <input type="text" name="name" value="{{old('name')}}">
  </div>

  @error('title')
  {{$message}}<br>
  @enderror
  <label>件名</label>
  <div>
    <input type="text" name="title" value="{{old('title')}}">
  </div>
  @error('body')
  {{$message}}<br>
  @enderror
  <label>問い合わせ内容</label>
  <div>
    <textarea name="body">{{old('body')}}</textarea>
  </div>
  <input class="toiBotton" type="submit" value="確認">
</form>

@endsection
