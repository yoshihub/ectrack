@extends('layouts.base')

@section('title')
お問い合わせ
@endsection

@section('main')


  <section class="py-5 bg-light">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1>お問い合わせ</h1>
        </div>
      </div>
      <div class="row pt-3">

        <!-- 左側 -->
        <div class="col-md-4">
          <!-- 横方向で配置 -->
          <div class="hstack mb-3">
            <i class="bi bi-envelope-fill text-danger fs-3"></i>
            <div class="ms-3">
              <!-- 孫要素は、.hstackの影響を受けません(横に並ばない) -->
              <h5 class="mb-1">Eメール</h5>
              <span class="text-muted">info@example.com</span>
            </div>
          </div>

          <div class="hstack mb-3">
            <i class="bi bi-telephone-fill text-danger fs-3"></i>
            <div class="ms-3">
              <h5 class="mb-1">電話番号</h5>
              <span class="text-muted">03-1234-5678</span>
            </div>
          </div>
        </div>

        <!-- 右側 -->
        <div class="col-md-7">
          <!-- フォーム -->
        <form action="{{route('form.post')}}" method="post">
        @csrf

        <div class="mb-3">
          @error('name')
          　{{$message}}<br>
          　@enderror
          <input type="text" class="form-control shadow-sm" name="name" placeholder="お名前" value="{{old('name')}}">
        </div>
        <div class="mb-3">
          @error('title')
          　{{$message}}<br>
          　@enderror
          <input type="text" class="form-control shadow-sm" name="title" placeholder="件名" value="{{old('title')}}">
        </div>
        <div class="mb-3">
          @error('body')
          　　　　　　　{{$message}}<br>
          　　　　　　　@enderror
          <textarea class="form-control shadow-sm" rows="4" name="body" placeholder="内容">{{old('body')}}</textarea>
        </div>
        <div class="col-12">
          <input class="btn btn-outline-danger" type="submit" value="確認">
        </div>
      </form>
        </div>

      </div>
    </div>
  </section>


@endsection
