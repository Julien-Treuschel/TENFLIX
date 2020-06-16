@extends('template')

@section('contenu')

<?php  
$abonnement = activeMenuAbonnement();
$typeAbonnement = typeAbonnement();
?>
   
<div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Paramètres</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
						<?php if ($abonnement >= 1) : ?>
							Mon abonnement : {{$typeAbonnement}}
						<?php else : ?>
							Mon abonnement : {{$typeAbonnement}} ! Pour souscrire un abonnement c'est : <a href="<?php echo e(url('/abonnement')); ?>">ici</a>
						<?php endif; ?>
						<br><br>	
						<?php if ($abonnement >= 1) : ?>

							<form onsubmit="return confirm('Voulez vous vraiment annuler votre abonnement ?');" action="/supprAbonnement/{{$user->id}}" method="post">
								{{ csrf_field() }}								
								<input type="submit" value="Annuler mon abonnement" class="btn btn-danger btn-block">
							</form>

						<?php else : ?>

							<form action="/supprAbonnement/{{$user->id}}" method="post">																
								<input type="submit" value="Annuler mon abonnement" class="btn btn-danger btn-block" disabled ="disabled">
							</form>

						<?php endif; ?>
						<hr width="500" size="4">
						Supprimer le compte ?
						<br><br>
						{!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
							{!! Form::submit('Supprimer mon compte (irréversible)', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Voulez vous vraiment supprimer cet utilisateur ?\')']) !!}
						{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>

@endsection