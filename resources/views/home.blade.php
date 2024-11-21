@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

 @section('content_top_nav_left')
  <h1>contenido izq</h1>    
 @endsection

 @section('content_top_nav_right')
 <h1>contenido der</h1>    
@endsection

@section('right_sidebar')
   <button class="btn btn-primary">Boton</button>
@endsection

@section('footer')
<h1>contenido footer</h1>
@endsection

