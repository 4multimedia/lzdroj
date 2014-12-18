<div class="widget-description">
	<div class="left-description">
		<?php
		
			$i = 0;
			for($g = 0; $g < count($Groups); $g++)
			{
				echo '<h4>'.LanguagesData::model() -> findData($Groups[$g]->id, 'descriptions_group', 1, 'name').'</h4>';
				
				// zakladki ze stronami
				$SubGroups = DescriptionsItems::model()->findAll("group_id=:group_id", array("group_id" => $Groups[$g]->id));
				if ($SubGroups)
				{
					echo "<ul>";
					for($sg = 0; $sg < count($SubGroups); $sg++)
					{
						echo "<li id=\"description_".$SubGroups[$sg]->id."\">
							<span class=\"icon\">".($i == 0 ? "<i class=\"fa fa-check\"></i>" : "&nbsp;")."</span>
							<a href=\"javascript:;\">".LanguagesData::model() -> findData($SubGroups[$sg]->id, 'descriptions_items', 1, 'name')."</a>
						</li>";
						
						if ($i == 0) { $ItemSelected = $SubGroups[$sg]->id; }
						$i++;
					}
					echo "</ul>";
				}
			}
		
		?>
	</div>
	
	<div class="right-description">
		<h4><?=LanguagesData::model() -> findData($ItemSelected, 'descriptions_items', 1, 'name');?></h4>
		<h5><?=$Item->name;?></h5>
		<div class="text">
			<?=LanguagesData::model() -> findData($ItemSelected, 'descriptions_items', 1, 'description');?>
		</div>
	</div>
	
	<div class="clearfix">&nbsp;</div>
</div>