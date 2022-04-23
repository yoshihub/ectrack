  @extends('layouts.base')

  @section('title')
  トラック一覧
  @endsection


  @section('main')
   <!-- ホーム -->
  <section class="bg-info text-white" style="padding: 50px 0 10px">
    <div class="container">
      <div class="row align-items-center g-3">

        <!-- 左側 -->
        <div class="col-md-7">
          <h1>中古トラック　お得に販売！</h1>
          <p>無料お見積もり実施中</p>
          <a href="/form" class="btn btn-dark px-5 shadow">
            お問い合わせ
          </a>
        </div>

        <!-- 右側 -->
        <div class="col-md-5 text-center">

          <img src="images/undraw_street_food_re_uwex.svg" class="img-fluid" alt="トラック画像">
        </div>

      </div>
    </div>
  </section>


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
          <input class="formcontrol" type="number" name="bottom" value="{{isset($defaultBottom) ? $defaultBottom : ''}}">年〜
          <input class="formcontrol" type="number" name="top" value="{{ isset($defaultTop) ? $defaultTop : '' }}">年

          <input class="button" type="submit" value="検索">
        </form>
      </div>



    <!-- トラックカード -->
  <section class="py-5" id="pricing">
    <div class="container-fluid py-3">
      <div class="row pb-3">
        <div class="col">
          <h2>トラック一覧</h2>
        </div>
      </div>
      <div class="row row-cols-1">
        <div class="col">
          @foreach($products as $product)
          <!-- カード -->
          <div class=" card shadow-sm">
            <div class="card-header">
              <h4>{{$product->name}}</h4>
            </div>
            <div class="card-body row">
              <div class="col-md-4">
                <img src="{{$product->image}}" alt="トラック画像">
              </div>
              <div class="col-md-5">
                <table class="table table-bordered table-sm mx-4 table-responsive">
                <tr>
                <th class="table-light">名前</th>
                <td>{{$product->name}}</td>
                </tr>
                <tr>
                <th class="table-light">価格</th>
                <td>{{number_format($product->price)}}円</td>
                </tr>
                <tr>
                <th class="table-light">年式</th>
                <td>{{$product->age}}年</td>
                </tr>
                <tr>
                <th class="table-light">走行距離</th>
                <td>{{$product->run}}Km</td>
                </tr>
                </table>
              </div>
              <div class="col-md-3 vstack">
                <a class="btn btn-outline-success m-3" type="button" href="{{route('product.show',$product->id)}}">詳細を見る</a>
                <a class="btn btn-outline-primary m-3" type="button" href="/form">お問い合わせ</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  @endsection
