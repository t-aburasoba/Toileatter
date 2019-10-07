@extends('layouts.app')

@section('content')
<h2>Check In　トイレの評価をしましょう</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}

  <div class="form-group">
      <label for="exampleFormControlFile1">トイレの写真も投稿しましょう！！（なしでもいいよ、、、）</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="toilet_image_name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">路線名</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>山手線</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">駅名</label>
    <select class="form-control" id="exampleFormControlSelect1">
        <option selected="">  </option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">個室の数</label>
    <select class="form-control" id="exampleFormControlSelect1" name="closet_bowl_number">
        <option selected="">選択する</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
  </div>
  <div class="form-group">
      <label for="exampleFormControlSelect1">並びましたか？</label>
      <select class="form-control" id="exampleFormControlSelect1" name="quickly_enter">
          <option selected="">選択する</option>
        <option value="はい">はい</option>
        <option value="いいえ">いいえ</option>
      </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">綺麗でしたか</label>
        <select class="form-control" id="exampleFormControlSelect1" name="beautifulness">
        <option selected="">選択する</option>
        <option value="綺麗">綺麗</option>
        <option value="普通">普通</option>
        <option value="汚い">汚い</option>
      </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">ホームから</label>
        <select class="form-control" id="exampleFormControlSelect1" name="distance">
        <option selected="">選択する</option>
        <option value="近い">近い</option>
        <option value="遠い">遠い</option>
      </select>
    </div>
  
  <input type="hidden" name="user_id" value=" {{Auth::id()}} ">
  <input type="hidden" name="toilet_id" value=" {{$toilet_id}} ">

  <button type="submit" class="btn btn-primary">Check In</button>
</form>
@endsection