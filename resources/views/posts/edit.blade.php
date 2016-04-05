@extends('main')

@section('pagetitle', '|Edit Post')

@section('stylesheet')
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
<div class="row">
	{!! Form::model($post, ['route' => [ 'post.update', $post->id], 'method'=>'PATCH']) !!}
	<div class="col-md-8">
		{{Form::label('title', 'Title:')}}
		{{ Form::text('title', null, ["class"=>'form-control input-lg']) }}

		{{Form::label('slug', 'Slug:')}}
		{{ Form::text('slug', null, ["class"=>'form-control input-lg']) }}

		{{Form::label('body', 'Body:')}}
		{{ Form::textarea('body', null, ['class'=>'form-control input-lg']) }}	
	</div>
	
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Create At:</dt>
				<dd> {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Last Updated: </dt>
				<dd>{{date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('post.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					
				</div>
				<div class="col-sm-6">
					{{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block']) }}
				</div>
			</div>
		</div>	
	</div>

	{!! Form::close() !!}
</div>
@endsection

@section('javascript')
	{!! Html::script('js/parsley.min.js') !!}
@endsection