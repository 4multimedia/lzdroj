<ul class="breadcrumbs">
	<li><a href="/index">Strona główna</a></li>
	<li class="pause">/</li>
	<li><b>Turnusy lecznicze</b></li>
</ul>

<div class="left box-down">

	<?php for($s = 0; $s < count($Stays); $s++) { ?>
	
	<div class="stays">
		<div class="title">
			<h2><?=$Stays[$s]->name;?></h2>
		</div>
		<div class="subtitle">
			<h3>Podtytuł turnusu</h3>
			<b class="period"><?=date("d.m.Y", strtotime($Stays[$s]->date_from));?> - <?=date("d.m.Y", strtotime($Stays[$s]->date_to));?></b>
		</div>
		<div class="stays-left">
			<div class="thumb">
			
			</div>
			<div class="options">
				<a href="#" class="pink">Dodaj do planera podróży</a>
				<div class="note"><span>0</span><span>0</span></div>
			</div>
		</div>
		<div class="stays-right">
			<ul class="tabs">
				<li class="active"><a href="javascript:;" rel="features">Główne cechy</a></li>
				<li><a href="javascript:;" rel="description">Krótki opis</a></li>
				<li><a href="javascript:;" rel="terms">Inne terminy</a></li>
			</ul>
			<div class="features tab-content">
				<?=$Stays[$s]->features;?>
			</div>
			<div class="description tab-content">
				<?=$Stays[$s]->summary;?>
			</div>
			<div class="links">
				<div class="price">Cena od <b><?=$Stays[$s]->price;?></b> PLN</div>
				<a href="#" class="booking orange">Rezerwuj teraz!</a>
			</div>
		</div>
		<div class="clearfix">&nbsp;</div>
		<div class="capacity">
			Aktualnie mamy dostępnych <?=$Stays[$s]->capacity;?> miejsc!
		</div>
	</div>
	
	<?php } ?>

</div>