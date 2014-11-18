<div class="form-area">
	<header>
		<div class="container">
			<?php
				if (Yii::app()->user->hasFlash('danger'))
				{
					echo '<div class="alert alert-danger">'.Yii::app()->user->getFLash('danger').'</div>';
				}
			?>
		
			<h1><?=Yii::app()->name;?></h1>
			<h2><?=Yii::t("system", "System zarządzania treścią");?></h2>
			
			<i class="fa fa-lock"></i>
		</div>
	</header>
		<form action="" method="post">
			<input type="hidden" name="logged" value="1">
			<div class="container">
				<div class="form-group">
					<input class="form-control input-lg" name="email" type="text" placeholder="<?=Yii::t("system", "adres e-mail");?>" value="<?=$_POST["email"];?>">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="password" type="password" placeholder="<?=Yii::t("system", "hasło");?>">
				</div>
				<div class="row form-input">
					<div class="col-xs-6">
						<label><input type="checkbox" name="rememberMe" value="1"<?php if ($_POST["rememberMe"] == 1) { echo " checked=\"checked\""; } ?>> <?=Yii::t("system", "zapamiętaj mnie");?></label>
					</div>
					<div class="col-xs-6 text-right">
						<a href="/administrator/resetPassword"><?=Yii::t("system", "odzyskaj hasło");?></a>
					</div>
				</div>
				<div class="button">
					<button class="btn btn-success btn-block btn-lg" type="submit"><?=Yii::t("system", "zaloguj");?></button>
				</div>
			</div>
		</form>
	<div class="container copyright">
		&copy; 2011-2014 webair // System zarządzania treścią
	</div>
</div>