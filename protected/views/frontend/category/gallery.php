<h3>Kategorie zdjęć</h3>
<?php

	foreach($Categories -> getData() as $record)
	{
		echo '<div>
			<div></div>
			<p><a href="'.$record -> alias.'">'.$record -> name.'</a></p>
		</div>';
	}

?>
<h3>Koncepcje</h3>
<?php

	foreach($Concepts -> getData() as $record)
	{
		echo '<div>
			<div></div>
			<p><a href="'.$record -> alias.'">'.$record -> name.'</a></p>
		</div>';
	}

?>
<h3>Tematyczne</h3>