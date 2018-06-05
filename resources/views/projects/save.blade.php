@extends('layouts.app')

@section('title', 'Main page')

@section('content') 
<div class = "wrapper wrapper-content animated fadeInRight ecommerce" >
     <div class="row">
            <div class="col-lg-12">
    <div class="wrapper wrapper-content animated fadeInUp">

        <div class="ibox">
            <div class="ibox-title">
                <h5>Crear proyecto</h5>
           
            </div>
            <div class="ibox-content">
                <project-save id="{{$id}}"></project-save>
            </div>
        </div>
    </div>
    </div>
</div> 
</div>

@endsection