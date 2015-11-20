@extends('_layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-center v-center">

            <h2>Welcome to PictureMash</h2>
            <p class="lead" style="color:black">Search and view pictures from multiple API's</p> 
            <div  id="loading-gif"> </div>            
        </div>    
    </div> <!-- /row -->  

@stop


@section('results') 
    <div class="container" id="loading"></div>  
@stop


@section('error-model') 
    @include('_includes.errormodel')  
@stop

@section('image-model') 
    @include('_includes.imagemodal')  
@stop