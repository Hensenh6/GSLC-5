@extends('layout')
@section('title','Loop')
@section('content')
<form action = "<?php $_PHP_SELF ?>" method = "GET">
    Masukan nama hari (lower case): <input type = "text" name = "hari" />
    <input type = "submit" />

 </form>
 <br>
@switch($hari)
    @case("senin")
    <h3>Item yang bisa difarming hari Senin</h3>
    <img class="image" src="https://dailyspin.id/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/Domain-Senin-768x511.jpg.webp" height=350px width="400px">
        @break
    @case("selasa")
    <h3>Item yang bisa difarming hari Selasa</h3>
    <img class="image" src="https://dailyspin.id/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/Domain-Selasa-1-768x511.jpg.webp" height=350px width="400px">
        @break
    @case("rabu")
    <h3>Item yang bisa difarming hari Rabu</h3>
    <img class="image" src="https://dailyspin.id/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/Domain-Rabu-1-768x511.jpg.webp" height=350px width="400px">
        @break

    @case("kamis")
    <h3>Item yang bisa difarming hari Kamis</h3>
    <img class="image" src="https://dailyspin.id/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/Domain-Senin-768x511.jpg.webp" height=350px width="400px">

        @break

    @case("jumat")
    <h3>Item yang bisa difarming hari Jumat</h3>
    <img class="image" src="https://dailyspin.id/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/Domain-Selasa-1-768x511.jpg.webp" height=350px width="400px">
        @break
    @case("sabtu")
        <h3>Item yang bisa difarming hari Sabtu</h3>
        <img class="image" src="https://dailyspin.id/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/12/Domain-Rabu-1-768x511.jpg.webp" height=350px width="400px">
        @break
    @case("minggu")
    <h3>Semua item bisa difarming dihari Minggu</h3>
    <img class="image" src="https://media.makeameme.org/created/everything-is-perfect-005560e5cc.jpg" height=350px width="400px">
  @break
    @default

@endswitch

@endsection
<style>
.image{
position: relative;
display: block;
margin-left: auto;
margin-right: auto;
}

</style>
