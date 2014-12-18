<?php

	if($UserRegistration->hasErrors() OR $UserLogin->hasErrors() OR $UserRemind->hasErrors())
	{
		echo '<div class="alert alert-danger alert-login-form">';
		
		if($UserRegistration->hasErrors())
		{
			echo CHtml::errorSummary($UserRegistration);
		}
		elseif($UserLogin->hasErrors())
		{
			echo CHtml::errorSummary($UserLogin);
		}
		elseif($UserRemind->hasErrors())
		{
			echo CHtml::errorSummary($UserRemind);
		}
		
		echo '</div>';
	}
	
	if (Yii::app()->user->hasFlash('success'))
	{
		echo '<div class="alert alert-success alert-login-form">'.Yii::app()->user->getFLash('success').'</div>';
	}
	
	if (Yii::app()->user->hasFlash('error'))
	{
		echo '<div class="alert alert-danger alert-login-form">'.Yii::app()->user->getFLash('error').'</div>';
	}

?><div class="row">
	<div class="col-md-6">
		<div class="login-form-box">
			<h2>Nie posiadasz konta? Zarejestruj się!</h2>
			<?php
			
				$formRegistration = $this -> beginWidget('CActiveForm', array(
					'enableAjaxValidation' => false,
					'htmlOptions' => array (
						'class' => 'form',
						'role' => 'form'
					)
				));
			
			?>
				<div class="form-item">
					<label>Imię: <b>*</b></label>
					<?=$formRegistration->textField($UserRegistration, 'name', array('id' => 'name'));?>
				</div>
				<div class="form-item">
					<label>Nazwisko: <b>*</b></label>
					<?=$formRegistration->textField($UserRegistration, 'lastname', array('id' => 'lastname'));?>
				</div>
				<div class="form-item">
					<label>Adres e-mail: <b>*</b></label>
					<?=$formRegistration->textField($UserRegistration, 'email', array('id' => 'email'));?>
				</div>
				<div class="form-item">
					<label>Hasło: <b>*</b></label>
					<?=$formRegistration->passwordField($UserRegistration, 'password', array('id' => 'password'));?>
				</div>
				<div class="form-item">
					<label>Powtórz hasło: <b>*</b></label>
					<?=$formRegistration->passwordField($UserRegistration, 'repassword', array('id' => 'repassword'));?>
				</div>
				<div class="form-buttons">
					<div class="form-checkbox">
						<?php echo $formRegistration->checkBox($UserRegistration,'rules', array('value' => '1')); ?> Akceptuję <a href="/regulamin-serwiu">regulamin</a>
					</div>
					<input type="submit" class="violet" name="register" value="Zarejestruj się">
				</div>
			<?php $this -> endWidget(); ?>
		</div>
	</div>
	<div class="col-md-6">
		<div class="login-form-box">
			<h2>Zaloguj się do profilu</h2>
			<?php
			
				$formLogin = $this -> beginWidget('CActiveForm', array(
					'enableAjaxValidation' => false,
					'htmlOptions' => array (
						'class' => 'form',
						'role' => 'form'
					)
				));
			
			?>
				<div class="form-item">
					<label>Adres e-mail: <b>*</b></label>
					<?=$formLogin->textField($UserLogin, 'email', array('id' => 'name'));?>
				</div>
				<div class="form-item">
					<label>Hasło: <b>*</b></label>
					<?=$formLogin->passwordField($UserLogin, 'password', array('id' => 'password'));?>
				</div>
				<div class="form-buttons">
					<input type="submit" class="violet" name="login" value="Zaloguj się">
				</div>
			<?php $this -> endWidget(); ?>
			<h2>Nie pamiętasz hasła? Odzyskaj je!</h2>
			<?php
			
				$formRemind = $this -> beginWidget('CActiveForm', array(
					'enableAjaxValidation' => false,
					'htmlOptions' => array (
						'class' => 'form',
						'role' => 'form'
					)
				));
			
			?>
				<div class="form-item">
					<label>Adres e-mail: <b>*</b></label>
					<?=$formRemind->textField($UserRemind, 'email', array('id' => 'name'));?>
				</div>
				<div class="form-buttons">
					<input type="submit" class="pink" name="remind" value="Odzyskaj hasło">
				</div>
			<?php $this -> endWidget(); ?>
		</div>
	</div>
</div>
<div class="alert alert-warning alert-required-info">Pola oznaczone <b>*</b> są wymagane do wypełnienia</div>