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
				<p class="text"><?=Yii::t("system", "Aby odzyskać dostęp do panelu CMS, podaj adres e-mail którym się logujesz. Wyślemy Ci instrukcje dotyczące zmiany hasła.");?></p>
				<div class="form-group">
					<input class="form-control input-lg" name="email" type="text" placeholder="<?=Yii::t("system", "adres e-mail");?>">
				</div>
				<div class="row form-input">
					<div class="col-xs-12 text-right">
						<a href="/<?=Yii::app()->params['adminPath'];?>/<?=Yii::app()->params['loginPath'];?>"><?=Yii::t("system", "powrót do logowania");?></a>
					</div>
				</div>
				<div class="button">
					<button class="btn btn-success btn-block btn-lg" type="submit"><?=Yii::t("system", "odzyskaj hasło");?></button>
				</div>
			</div>
		</form>
	<div class="container copyright">
		&copy; 2011-2014 webair // System zarządzania treścią
	</div>
</div>