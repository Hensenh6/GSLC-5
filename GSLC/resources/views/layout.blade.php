<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GSLC 5</title>
</head>
<body>
@include('navbar')


    <div class="container">

        <div class="p-5 container-fluid bg-white">
            @yield('content')

    </div>

    </div>
@include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

<style>
.container{
    height: 550px;
   width: 100%;
}
body{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
}
nav{
   background: rgb(3, 129, 152);
   height: 80px;
   width: 100%;

}
label.Logo {
    color: rgb(255, 255, 255);
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
}
nav ul{
    float: right;
    margin-right: 20px;

}
.footer{
    color: gray;
    height: 10px;
    width: 100%;
}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 20px;
}
nav ul li a{
    color: rgb(255, 255, 255);
    font-size: 17px;
    text-transform: uppercase;
    text-decoration: none;
    padding: 7px 13px;
    border-radius: 5px;
}
a:hover{
    background: #1b9bff;
    transition: .5s;

}
footer{
    background: #111111;
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    padding-top: 40px;
    color: #ffffff;
}
.footer{

    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer h3{
    font-size: 1.8rem;
    font-weight: 800;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;

}
.footer-bawah{
    background: #000000;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;

}
.footer-bawah span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200

}
</style>
</html>
