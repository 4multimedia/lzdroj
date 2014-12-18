<ul class="breadcrumbs">
	<li><a href="<?=Yii::app()->createUrl("index");?>">Strona główna</a></li>
	<li class="pause">/</li>
	<li><a href="<?=Yii::app()->createUrl("turnusy-lecznicze");?>">Turnusy lecznicze</a></li>
	<li class="pause">/</li>
	<li><b><?=$Stay->name;?></b></li>
</ul>

<div class="box-white box-shadow-dark box">
	<div class="stay-title">
		<h2><?=$Stay->name;?></h2>
		<div class="stay-note">
			Ogólna ocena turnusu:
			<div class="note"><span>0</span><span>0</span></div>
		</div>
	</div>
	<?php $this->widget('application.extensions.widgets.Gallery.gallery', array('type' => 'stays', 'object_id' => $Stay->id));?>
	<div class="clearfix">&nbsp;</div>
</div>

<div class="object">
	<div class="left box-down">
		<div class="stay-title-descript"><?=$Stay->name;?></div>
		<div class="stay-no">
			<span>TURNUS ID: <?=$Stay->id;?></span>
			<b>turnusy leczniczo-profilaktyczny</b>
		</div>
		
		<div class="stay-static-tab">
			<b class="tab">TWÓJ TURNUS</b>
			<b class="name"><?=$Stay->name;?></b>
		</div>
		
		<div class="stay-prace">
			CENA: <b><?=$Stay->price;?></b> <small>PLN</small>
		</div>
		
		<div class="stay-terms">
			<b class="period-name">2 tygodnie</b>
			<div class="period">
				<em class="first">Start: <span> <?=$Stay->date_from;?></span></em>
				<em class="last">Koniec: <span> <?=$Stay->date_to;?></span></em>
			</div>
			<a href="javascript:;" class="details">Zobacz inne daty</a>
			<a href="javascript:;" class="details">Szczegóły</a>
		</div>
		
		<div class="stay-option-boxes">
			<div class="stay-option-box">
				<p>Co zawiera cena? <a href="javascript:;" class="details">Szczegóły</a></p>
				<div>
					<ul>
						<li><b>Pełne wyżywienie</b> wegetariańskie lub mięsne</li>
						<li><b>Leczenie</b> 5 zabiegów medycznych, zabiegi fizykalne, terapia manualna</li>
						<li><b>Strefa SPA & Wellness</b> do dyspozycji bez ograniczeń</li>
						<li><b>Pokoje hotelowe</b> Nocleg w ekskluzywnych pokojach hotelowych</li>
					</ul>
				</div>
			</div>
			<div class="stay-option-box">
				<p>Metody leczenie <a href="javascript:;" class="details">Szczegóły</a></p>
				<div>
					<b>Lorem ipsum dolor sit amet,</b><br>
					consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
				</div>
			</div>
			<div class="clearfix">&nbsp;</div>
		</div>
		
		<div class="comment">
			<p><span>Opinie Klientów</span></p>
			<div class="text">
				<span>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</span>
				<em>~  Jakub z Poznania  ~</em>
			</div>
			<div class="read-more"><a href="javascript:;">Czytaj wszystkie</a></div>
		</div>
		
		<div>
			<p><span>Turnus polecany dla:</span></p>
			<div>Adventure seekers, age 55+, families with young children, turist with a car, creatice people.</div>
		</div>
		
		<div>
			<a href="#">Kontakt z organizatorem</a>
			<a href="#">Kontakt z portalem</a>
			<a href="#">Rezerwuj</a>
		</div>
		
		<div>
			<p><span>Dostępne terminy:</span></p>
			
			<div id="termsDatepicker"></div>
		</div>
		
	</div>
</div>

<div class="right">
	<?php $this->widget('application.extensions.widgets.Stays.Recommended');?>
	<?php $this->widget('application.extensions.widgets.Stays.Categories');?>
</div>