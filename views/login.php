<div class="row align-items-center h-100">
	<div class="col-md-6 offset-md-3">
		<h2>Prijavite se na sustav</h2>
		<hr />
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" href="?view=login">Prijava na sustav</a>
			</li>
			<li>
				<a class="nav-link" href="?view=register">Registracija na sustav</a>
            </li>
		</ul>
		<form method="POST" action="auth/login.php">
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
			

			<button class="btn btn-primary" type="submit" name="prijava">
				<i class="fas fa-sign-in-alt"></i>
				Prijavi se
			</button>
		</form>
    </div>
</div>