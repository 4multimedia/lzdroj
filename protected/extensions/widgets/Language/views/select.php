<div id="widget-language-select">
	<span>Język polski</span>
	<ul>
	<?php
	
		foreach ($array as $key => $lang)
		{
			echo '<li><a href="/'.$lang.'">'.$lang.'</a></li>';
		}
	
	?>
	</ul>
</div>