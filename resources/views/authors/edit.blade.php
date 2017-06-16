@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li><a href="{{ url('/admin/authors') }}">Penulis</a></li>
					<li class="active">ubah Penulis</li>
				</ul>
				<div class="panel" style="background-color: rgba(244,250,255,0);">
					<div class="panel-heading">
						<h2 class="panel-title">Ubah Penulis</h2>
					</div>

					<div class="panel-body">
						{!! Form::model($author, ['url' => route('authors.update', $author->id),
						'method'=>'put', 'class'=>'form-horizontal']) !!}
						@include('authors._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection