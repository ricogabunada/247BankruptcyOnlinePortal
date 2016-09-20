$('#employeesearch').click(function(event) {
	/* Act on the event */
	if ($(".form-control").filter(function() { return $(this).val(); }).length > 0) {
		var empdata = [];

		if ($('#firstname').val() != 0)
		{
			var firstname = $('#firstname').val();
			empdata.push('firstname:'+firstname);
		}
		if ($('#lastname').val() != 0)
		{
			var lastname = $('#lastname').val();
			empdata.push('lastname:'+lastname);
		}
		if ($('#id').val() != 0)
		{
			var id = $('#id').val();
			empdata.push('id:'+id);
		}

		if (($('#ssno1').val() != 0) && ($('#ssno2').val() != 0) && ($('#ssno3').val() != 0))
		{
			var ssno = $('#ssno1').val() + $('#ssno2').val() + $('#ssno3').val();
			empdata.push('ssno:'+ssno);
		}

		if (empdata.length != 0) {
			$('#loadcustomerdatahere').addClass('loadcustomerdata');
			$.ajax({
					url: 'pscripts/dashboardquicksearch.php',
					type: 'post',
					data: "empdata="+empdata,
					success: function (data) {
						if (data != 0) {
							$('#firstname').val('');
							$('#lastname').val('');
							$('#id').val('');
							$('#ssno1').val('');
							$('#ssno2').val('');
							$('#ssno3').val('');

							$('#loadcustomerdatahere').removeClass('loadcustomerdata');
							$('#loadcustomerdatahere').html(data);
							$('.dataTable').DataTable({
							    responsive: true,
							    autoWidth: false
							});
						}
						else {
							$('#firstname').val('');
							$('#lastname').val('');
							$('#id').val('');
							$('#ssno1').val('');
							$('#ssno2').val('');
							$('#ssno3').val('');

							$('#loadcustomerdatahere').removeClass('loadcustomerdata');
							$('#dangermodal').modal('show');
							$('#dangermodalbody').html('No record found!');
						}
					}
				});
		}


	} else {
		//input has no values
		$('#dangermodal').modal('show');
		$('#dangermodalbody').html('No values inputted!');
	}
});