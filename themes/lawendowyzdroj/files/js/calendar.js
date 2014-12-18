$(function() {
	$("#termsDatepicker").datepick($.extend({
		rangeSelect: true,
		monthsToShow: [1, 3],
		dateFormat: 'yyyy-mm-dd'
	}, $.datepick.regionalOptions['pl']));
});