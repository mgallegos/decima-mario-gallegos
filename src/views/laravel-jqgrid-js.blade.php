<script>
$(document).ready(function()
{
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e)
	{
		// if($(e.target).attr('data-url') != undefined)
		// {
		// 	changeWindowsUrl($(e.target).attr('data-url'));
		// }
		$('#' + $(e.relatedTarget).attr('data-id-well')).hide();
		$('#' + $(e.target).attr('data-id-well')).show();

		//$('#' + $(e.relatedTarget).attr('data-id-well')).hide('blind', {}, 400, setTimeout(function(){$('#' + $(e.target).attr('data-id-well')).show('blind');}, 300));

		//console.log(e.target); // activated tab
		//console.log(e.relatedTarget); // previous tab
	});

	$(window).bind('resize', function()
	{
		$('#docGrid').setGridWidth($('.tab-content').width());
		$('#InvoiceGrid').setGridWidth($('.tab-content').width());
		$('#InvoiceItemsGrid').setGridWidth($('.tab-content').width());
		$('#InvoicePivotGrid').setGridWidth($('.tab-content').width());
		$('#BookGrid0').setGridWidth($('.tab-content').width());
		$('#BookGrid1').setGridWidth($('.tab-content').width());
		//$('#lgp-community-support-group').attr('width', $('.tab-content').width());
	});

	$('#oss-dev-top-bar-menu,#oss-dev-top-bar-lqp').addClass('active');

	setTimeout(function()
	{
		$('#docGrid').setGridWidth($('.tab-content').width());
		$('#InvoiceGrid').setGridWidth($('.tab-content').width());
		$('#InvoiceItemsGrid').setGridWidth($('.tab-content').width());
		$('#InvoicePivotGrid').setGridWidth($('.tab-content').width());
		$('#BookGrid0').setGridWidth($('.tab-content').width());
		$('#BookGrid1').setGridWidth($('.tab-content').width());
	}, 2000);
	//$('#lgp-community-support-group').attr('width', $('.tab-content').width());
});
</script>
