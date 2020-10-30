<div class="container-fluid content">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">

				<form method="post" class="login100-form flex-sb flex-w" >

					<span class="login100-form-title p-b-51">
						<img class="logo" src="<?= subdomain ?>/public/images/logo/logo.png">
					</span>

					<?php
					if(isset($_POST['logout'])){
						$logoutput = $_POST['logout']; $hinweis = '';

						if(strlen($logoutput)> 3){
						    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  '.$logoutput.'
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>';
						}
					}
					?>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="loguser" placeholder="E-Mail">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="logpass" placeholder="Passwort">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-24"><div></div>
						<div><a href="/start/palo/" class="txt1">Passwort vergessen</a></div>
					</div>

					<div class="container-login100-form-btn m-t-17">
					    <button class="login100-form-btn " type="submit" name="submit">Anmelden</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
