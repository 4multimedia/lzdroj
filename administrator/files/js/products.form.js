$(document).ready(function()
{
	$(".btn-new-descript").click(function()
	{
		var i = $(".descript-name").length;
		
		var html = '<hr><div class="form-group descript-name"><label class="col-sm-2 control-label">Tytuł opisu</label><div class="col-sm-10"><input class="form-control field-title" type="text" name="descript[add'+i+'][name]"></div></div>';
		html += '<div class="form-group"><label class="col-sm-2 control-label">Treść opisu</label><div class="col-sm-10"><textarea class="form-control field-title" name="descript[add'+i+'][descript]"></textarea></div></div>';

		
		$(".description-load").append(html);
	});
});