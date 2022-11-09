@extends('layout')
@section('title','Home')
@section('content')
Halo Ini homepage untuk cek material apa yang tersedia silahkan langsung ke menu switch
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <img src="https://www.pockettactics.com/wp-content/sites/pockettactics/2022/08/genshin-impact-nilou-2-1.jpg" width=100% height=100%>
        <h5 class="card-title">Nilou</h5>
        <p class="card-text">Dancer of sumeru</p>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/10/18/2046977429.jpg" width=100% height=100%>

        <h5 class="card-title">Nahida</h5>
        <p class="card-text">Release in upcoming update</p>

      </div>
    </div>
  </div>
</div>


@endsection
<style>
    title{
        max-width: 1120px;
  width: 100%;
  padding: 40px 0
    }
</style>
