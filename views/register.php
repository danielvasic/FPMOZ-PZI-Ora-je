<div class="row">
	<div class="col-md-6 offset-md-4">
		<h2>Registracija na sustav</h2>
		<hr />
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link" href="login.html">Prijava na sustav</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="register.html">Registracija na sustav</a>
			</li>
            <div class="container">		</ul>
		<form method="POST" action="php/register.php">
			<div class="form-group">
				<label for="ime">Ime</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
						<i class="fas fa-user"></i>
						</span>
					</div>
					<input type="text" name="ime" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="prezime">Prezime</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
						<i class="fas fa-users-cog"></i>
						</span>
					</div>
					<input type="text" name="prezime" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="korisnicko_ime">Korisničko ime</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
						<i class="fas fa-user-secret"></i>
						</span>
					</div>
					<input type="text" name="korisnicko_ime" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="lozinka">Lozinka:</label>
				<input type="password" name="lozinka" class="form-control" />
			</div>
			
			<div class="form-group">
				<label for="plozinka">Potvrda lozinke:</label>
				<input type="password" name="plozinka" class="form-control" />
			</div>
			
			<button class="btn btn-primary" type="submit" name="prijava">
				<i class="fas fa-sign-in-alt"></i>
				Registriraj se
			</button>
		</form>
	</div>
</div>