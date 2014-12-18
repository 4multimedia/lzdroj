<ul class="breadcrumbs">
	<li><a href="/index">Strona główna</a></li>
	<li class="pause">/</li>
	<li><b>Wynik wyszukiwania</b></li>
</ul>

<div class="content search-results">
	<div class="content-area">
	
		<?php for($o = 0; $o < count($Objects); $o++) { ?>
		<div class="item">
			<div class="title">
				<h3><a href="<?=Yii::app()->createUrl("obiekt/".$Objects[$o]->alias);?>"><?=$Objects[$o]->name;?></a></h3>
				<a href="javascript:;">Ukryj</a>
			</div>
			<div class="details">
				<div class="left">
					<a href="javascript;;" class="pink">Dodaj do planu podróży</a>
					<a href="javascript:;" class="violet see-modal-maps">Zobacz na mapie</a>
					<div class="thumb">
						<a href="<?=Yii::app()->createUrl("obiekt/".$Objects[$o]->alias);?>"><?=Objects::model()->image($Objects[$o]->id, 1, 'crop', 192, 140);?></a>
					</div>
				</div>
				<div class="center">
					<div class="center-top">
						<p>Numer oferty: <b>PL <?=$Objects[$o]->id;?></b></p>
						<div class="note">Ogólna ocena: <div class="box"><span>0</span> <span>0</span></div></div>
					</div>
					<h4><?=$Objects[$o]->subname;?></h4>
					<div class="info">
						<p>Szczegóły</p>
						<span>Ilość osób: <b>3</b></span>
						<span>Ilość łóżek: <b>2</b></span>
						<span>Metraż obiektu: <b>50 m&sup2;</b></span>
						<span>Piętro: <b>2</b></span>
						<span>Rodzaj rezerwacji: <b>instant</b></span>
						<span>Lokalizacja: <b>Centrum</b></span>
					</div>
					<div class="info">
						<p>Udogodnienia</p>
						<div class="amenities amenities-1"></div>
						<div class="amenities amenities-2"></div>
						<div class="amenities amenities-3"></div>
						<div class="amenities amenities-4"></div>
						<div class="amenities amenities-5"></div>
						<div class="amenities amenities-6"></div>
						<div class="amenities amenities-7"></div>
						<div class="amenities amenities-8"></div>
						<div class="amenities amenities-9"></div>
						<div class="amenities amenities-10"></div>
						<div class="amenities amenities-11"></div>
						<div class="amenities amenities-12"></div>
					</div>
					
					<div class="summary">
						<p>price person / night: <b>299 <span>PLN</span></b></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php } ?>
	
	</div>
</div>