$(document).ready(function()
{
	$(".create-alias").click(function() { $.createAlias(); });
	$(".field-title").blur(function()
	{
		var isEmpty = $.trim($(".field-alias").val());
		if (isEmpty == "") { $.createAlias(); }
	});
	
	$.strtr = function(str, from, to)
	{
		var fr = '',
			i = 0,
			j = 0,
			lenStr = 0,
			lenFrom = 0,
			tmpStrictForIn = false,
			fromTypeStr = '',
			toTypeStr = '',
			istr = '';
		var tmpFrom = [];
		var tmpTo = [];    var ret = '';
		var match = false;

		if (typeof from === 'object')
		{
			tmpStrictForIn = this.ini_set('phpjs.strictForIn', false); // Not thread-safe; temporarily set to true
			from = this.krsort(from);
			this.ini_set('phpjs.strictForIn', tmpStrictForIn);
			for (fr in from)
			{
				if (from.hasOwnProperty(fr))
				{
					tmpFrom.push(fr);
					tmpTo.push(from[fr]);
				}
			}
			from = tmpFrom;
			to = tmpTo;
		}
		lenStr = str.length;
		lenFrom = from.length;
		fromTypeStr = typeof from === 'string';
		toTypeStr = typeof to === 'string';

		for (i = 0; i < lenStr; i++)
		{
			match = false;
			if (fromTypeStr)
			{
				istr = str.charAt(i);
				for (j = 0; j < lenFrom; j++)
				{
					if (istr == from.charAt(j))
					{
						match = true;
						break;
					}
				}
			}
			else
			{
				for (j = 0; j < lenFrom; j++)
				{
					if (str.substr(i, from[j].length) == from[j])
					{
						match = true;
						i = (i + from[j].length) - 1;
						break;
					}
				}
			}

			if (match)
			{
				ret += toTypeStr ? to.charAt(j) : to[j];
			}
			else
			{
				ret += str.charAt(i);
			}
		}
		return ret;
	}

	$.createAlias = function()
	{
		var title = $.trim($(".field-title").val());
		var alias = title.toLowerCase();
		alias = $.strtr(alias, ' żółśćąńęź.,@!#$%()?+&:_/"','-zolscanez-');
		var reg = new RegExp("(-{2,10})","gi");
		alias = alias.replace(reg, "-");
		alias = $.strtr(alias, '-', ' ');
		alias = $.strtr($.trim(alias), ' ', '-');
		
		$(".field-alias").val(alias);
	}
	
	$(".nav-form-tabs a").click(function()
	{
		$(this).parent().parent().find(".active").removeClass("active");
		$(this).parent().addClass("active");
		var tab = $(this).attr("id").replace("tab-", "");
		$(".fieldset-content").hide();
		$("#fieldset-"+tab).show();
		return false;
	});
	
	$(".btn-dropdown-submit .dropdown-menu a").click(function()
	{
		var $form = $(this).closest("form");
		var $group = $(this).closest(".btn-dropdown-submit");
		
		var isHiddenField = $form.find("input[name$='redirect']").length;
		if(isHiddenField == 0)
		{
			$form.append("<input type=\"hidden\" name=\"redirect\"/>");
		}
	
		var type = $(this).attr("id").replace("type-", "");
		var label = $(this).text();
		$group.find("button:submit").text(label);
		$form.find("input[name$='redirect']").val(type)
	});
});