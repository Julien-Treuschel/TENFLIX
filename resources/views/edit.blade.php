@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Modification d'un utilisateur</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					
					<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
					<label class="col-md-0 control-label">Nom</label>
					  	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
					  	{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
					<label class="col-md-0 control-label">Prenom</label>
					  	{!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Prenom']) !!}
					  	{!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
					<label class="col-md-0 control-label">Email</label>
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
						{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('date_naissance') ? 'has-error' : '' !!}">
					<label class="col-md-0 control-label">Date de naissance</label>
					  	{!! Form::text('date_naissance', null, ['class' => 'form-control', 'placeholder' => 'Date de naissance']) !!}
					  	{!! $errors->first('date_naissance', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('ville') ? 'has-error' : '' !!}">
					<label class="col-md-0 control-label">Ville</label>
					  	{!! Form::text('ville', null, ['class' => 'form-control', 'placeholder' => 'Ville']) !!}
					  	{!! $errors->first('ville', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('code_postal') ? 'has-error' : '' !!}">
					<label class="col-md-0 control-label">Code postal</label>
					  	{!! Form::text('code_postal', null, ['class' => 'form-control', 'placeholder' => 'Code postal']) !!}
					  	{!! $errors->first('code_postal', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('num_rue') ? 'has-error' : '' !!}">
					<label class="col-md-0 control-label">Numéro de rue</label>
					  	{!! Form::text('num_rue', null, ['class' => 'form-control', 'placeholder' => 'Numéro de rue']) !!}
					  	{!! $errors->first('num_rue', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('rue') ? 'has-error' : '' !!}">
					<label class="col-md-0 control-label">Rue</label>
					  	{!! Form::text('rue', null, ['class' => 'form-control', 'placeholder' => 'Numéro de rue']) !!}
					  	{!! $errors->first('rue', '<small class="help-block">:message</small>') !!}
					</div>
					
						{!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection