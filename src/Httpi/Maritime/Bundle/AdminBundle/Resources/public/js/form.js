$(document).ready(function() {
	
	$("button[type=submit]").jqxButton({
		width: '120px',
		height: '35px',
		theme: 'green'
	});
	
	$("button[type=submit].delete").jqxButton({
		width: '120px',
		height: '35px',
		theme: 'red'
	});
	
	$("p.button.error a").jqxLinkButton({
		width: '120px',
		height: '35px',
		theme: 'red'
	});

	$("p.button a").jqxLinkButton({
		width: '120px',
		height: '35px',
		theme: 'darkblue'
	});

});