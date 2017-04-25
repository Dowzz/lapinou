<h1>Bonjour</h1>

<p>
	Merci de cliquer sur le liensuivant pour recréer votre mot de passe ,
	<a href="{{ $link = url('authi/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">{{ $link }}</a>
</p>

