  @extends('layouts.base')

  @section('title')
  トラック一覧
  @endsection


  @section('main')
  <main>
    <div class="innerWrap">

      @php
      if(isset($checklists)){
      foreach($checklists as $list){
      if($list =="大阪府"){
      $val1='checked';
      }elseif($list =="京都府"){
      $val2='checked';
      }elseif($list =="奈良"){
      $val3='checked';
      }
      }
      }
      @endphp

      <div class="ageSearch">
        <form action="/product/search" method="post">
          @csrf
          @if ($errors->any())
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	        @endif
          <p>年式(西暦)</p>
          <input class="ageInput" type="number" name="bottom" value="{{isset($defaultBottom) ? $defaultBottom : ''}}">年〜
          <input class="ageInput" type="number" name="top" value="{{ isset($defaultTop) ? $defaultTop : '' }}">年

          <input class="button" type="submit" value="検索">
        </form>
      </div>




      <!--一覧表示-->
      @foreach($products as $product)

      <a class="card indexCard" href="{{route('product.show',$product->id)}}">
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
              <th>年式</th>
              <td>{{$product->age}}年</td>
            </tr>
            <tr>
              <th>走行距離</th>
              <td>{{$product->run}}Km</td>
            </tr>
          </table>
        </div>
      </a>

      @endforeach
    </div>
  </main>

  @endsection
