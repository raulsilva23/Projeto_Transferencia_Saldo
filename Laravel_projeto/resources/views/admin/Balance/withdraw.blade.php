@extends('adminlte::page')

@section('title', 'Nova Retirada')

@section('content_header')
    <h1>Fazer Retirada </h1>
    <ol class="breadcrumb">
    	<li><a href="">Dashboard</a></li>
    	<li><a href="">Despositar</a></li>
    </ol>
@stop

@section('content')
     <div class="box">
     <div class="box-header">
         	<H3>Fazer Retirada</H3>
         </div>
         <div class="box-body">

            @include('admin.includes.alerts')

         	<form method="POST" action="{{ route('withdraw.store') }}"> 
         		{!!csrf_field() !!}

         		<div class="form-group">
         		 <input type="text"  name= "value" placeholder="Valor Retirada" class="from-control">
         		</div>
         		<div class="form-group">
         			<button type="submit" class="btn btn-success">Retirada</button >
         			
         		</div>
         	</form>
          </div>
        </div>

@stop