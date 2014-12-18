<div class="box-white box-shadow-dark box">
	<div class="stay-title">
		<h2><?=$Stay->name;?></h2>
		<div class="stay-note">
			Ogólna ocena:
			<div class="note"><span>0</span><span>0</span></div>
		</div>
	</div>
	<?php $this->widget('application.extensions.widgets.Gallery.gallery', array('type' => 'objects', 'object_id' => $Object->id));?>
	<div class="clearfix">&nbsp;</div>
</div>


<div class="object">
	<div>
	
	</div>
	<div>
		<div class="left box-down">
			<h2><?=$Object->name;?></h2>
			<h3><?=$Object->subname;?></h3>
			
			<div class="amenities-box">
				<div class="amenities amenities-1 first"></div>
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
				<div class="clearfix">&nbsp;</div>
			</div>
			
			<div class="info">
				<span>Numer oferty: <b>PL <?=$Object->id;?></b></span>
				<span>Piętro <b>2</b></span>
				<span>Metraż obiektu: <b>50 m&sup2;</b></span>
			</div>
			
			<div class="summary">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="read-more"><a href="javascript:;">Czytaj więcej</a></div>
			</div>
			
			<div class="comment">
				<p><span>Opinie Klientów</span></p>
				<div class="text">
					<span>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</span>
					<em>~  Jakub z Poznania  ~</em>
				</div>
				<div class="read-more"><a href="javascript:;">Czytaj wszystkie</a></div>
			</div>
			
			<div class="descript">
				<div class="tabs">
					<p>Opis</p>
					<ul>
						<li>Pełny opis</li> 
						<li>Informacje szczegółowe</li> 
						<li>Miejsca do spania</li>
						<li>Pokoje</li>
					</ul>
				</div>
				<div class="tabs-content">
					<p>Pełny opis</p>
					<p><?=$Object->name;?></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				</div>
			</div>
			
			<?php $this->widget('application.extensions.widgets.Description.description', array('type' => 'objects', 'object_id' => $Object->id, 'item' => $Object));?>
			
			<div id="termsDatepicker"></div>
		</div>
	</div>
</div>