<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	<div class="container">
		<a href="{{ route('app_home') }}" class="navbar-brand">Twitchy</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav">
				<li class="nav-items dropdown">
					<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="questions">Résultats</a>
					<div class="dropdown-menu" aria-labelledby="questions">
						<a class="dropdown-item" href="{{ route('app_resultat', ["numeroQuestion" => 1]) }}">Question 01</a>
						<a class="dropdown-item" href="{{ route('app_resultat', ["numeroQuestion" => 2]) }}">Question 02</a>
						<a class="dropdown-item" href="{{ route('app_resultat', ["numeroQuestion" => 3]) }}">Question 03</a>
						<a class="dropdown-item" href="{{ route('app_resultat', ["numeroQuestion" => 4]) }}">Question 04</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
