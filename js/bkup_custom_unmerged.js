<<<<<<< HEAD
//datatable plugin
$('.dataTable').DataTable({
    responsive: true,
    autoWidth: false
});
//select2plugin
$('.select2').select2();
//hide/show insurance details
$('input:radio[name="insurance"]').change(function(){
  if (this.checked && this.value == 1) {
  	$('.insuracedetails').show();
  	$('.insuracedetails').removeClass('hidden');
  } else {
  	$('.insuracedetails').hide();
  	$('.insuracedetails').addClass('hidden');

  }
});

//compute for deduction amount on application -> master tab
$('.compute').change(function(event) {
  var sum = 0;
  $('select :selected').each(function() {
      sum += Number($(this).val());
  });

  var total1 = sum-10;
  var total = parseFloat(total1);
  $('#deductionamt').val(total);
  // alert(sum);
});

var pathname = window.location.pathname;
var path = pathname.split('/');

if(path[1] == 'dashboard'){
  $( ".sidebar-menu li:eq(0)" ).addClass( "active" );
}

//copy physical address -> Customer add
$('#copypaddress').change(function(event) {
  var valuead1 = $('input[name=addressline1]').val();
  var valuead2 = $('input[name=addressline2]').val();
  var valuecity = $('input[name=city]').val();
  var valuestate = $('select[name=state]').val();
  var valueszipcode = $('input[name=zipcode]').val();

  if (this.checked) {
    $('input[name=maddressline1]').val(valuead1);
    $('input[name=maddressline2]').val(valuead2);
    $('input[name=mcity]').val(valuecity);
    // $('select[name=mstate] option[value="'+valuestate+'"]').prop('selected', true);
    $('select[name=mstate]').select2("val", valuestate);
    $('input[name=mzipcode]').val(valueszipcode);
  } else {
    $('input[name=maddressline1]').val("");
    $('input[name=maddressline2]').val("");
    $('input[name=mcity]').val("");
    $('select[name=mstate]').select2("val", "0");
    $('input[name=mzipcode]').val("");
  }
});

//hide employee information before adding an application
$('.addemployeeinfo').hide();


//adding a loading GIF for searching applicant
function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1000);

    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}
function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}
onReady(function () {
    show('page', true);
    show('loading', false);
    $('#searchapplicanttable').DataTable({
        responsive: true,
        autoWidth: false
    });
});


/*
 * BAR CHART FOR DASHBOARD
 * ---------
 */

var bar_data = {
  data: [["12/06/15", 10], ["12/13/15", 8], ["12/20/15", 4], ["12/27/15", 13], ["1/03/16", 17], ["1/10/16", 9]],
  color: "#3c8dbc"
};
$.plot("#weeklytotalhours", [bar_data], {
  grid: {
    borderWidth: 1,
    borderColor: "#f3f3f3",
    tickColor: "#f3f3f3"
  },
  series: {
    bars: {
      show: true,
      barWidth: 0.5,
      align: "center"
    }
  },
  xaxis: {
    mode: "categories",
    tickLength: 0
  }
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD
 * ---------
 */

var bar_data = {
  data: [["12/06/15", 10], ["12/13/15", 8], ["12/20/15", 4], ["12/27/15", 13], ["1/03/16", 17], ["1/10/16", 9]],
  color: "#3c8dbc"
};
$.plot("#weeklynewcandidates", [bar_data], {
  grid: {
    borderWidth: 1,
    borderColor: "#f3f3f3",
    tickColor: "#f3f3f3"
  },
  series: {
    bars: {
      show: true,
      barWidth: 0.5,
      align: "center"
    }
  },
  xaxis: {
    mode: "categories",
    tickLength: 0
  }
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD
 * ---------
 */

var bar_data = {
  data: [["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9]],
  color: "#3c8dbc"
};
$.plot("#monthlytotalhours", [bar_data], {
  grid: {
    borderWidth: 1,
    borderColor: "#f3f3f3",
    tickColor: "#f3f3f3"
  },
  series: {
    bars: {
      show: true,
      barWidth: 0.5,
      align: "center"
    }
  },
  xaxis: {
    mode: "categories",
    tickLength: 0
  }
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD
 * ---------
 */

var bar_data = {
  data: [["12/06/15", 10], ["12/13/15", 8], ["12/20/15", 4], ["12/27/15", 13], ["1/03/16", 17], ["1/10/16", 9]],
  color: "#3c8dbc"
};
$.plot("#weeklyturnovers", [bar_data], {
  grid: {
    borderWidth: 1,
    borderColor: "#f3f3f3",
    tickColor: "#f3f3f3"
  },
  series: {
    bars: {
      show: true,
      barWidth: 0.5,
      align: "center"
    }
  },
  xaxis: {
    mode: "categories",
    tickLength: 0
  }
});
/* END BAR CHART */




/***********************************Bar graph different color************************************/
/*
 * BAR CHART FOR DASHBOARD
 * ---------
 */

var bar_data = {
  data: [["12/06/15", 10], ["12/13/15", 8], ["12/20/15", 4], ["12/27/15", 13], ["1/03/16", 17], ["1/10/16", 9]],
  color: "#99E6F9"
};
$.plot("#weeklytotalemployees", [bar_data], {
  grid: {
    borderWidth: 1,
    borderColor: "#f3f3f3",
    tickColor: "#f3f3f3"
  },
  series: {
    bars: {
      show: true,
      barWidth: 0.5,
      align: "center"
    }
  },
  xaxis: {
    mode: "categories",
    tickLength: 0
  }
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD
 * ---------
 */

var bar_data = {
  data: [["12/06/15", 10], ["12/13/15", 8], ["12/20/15", 4], ["12/27/15", 13], ["1/03/16", 17], ["1/10/16", 9]],
  color: "#99E6F9"
};
$.plot("#weeklynewhires", [bar_data], {
  grid: {
    borderWidth: 1,
    borderColor: "#f3f3f3",
    tickColor: "#f3f3f3"
  },
  series: {
    bars: {
      show: true,
      barWidth: 0.5,
      align: "center"
    }
  },
  xaxis: {
    mode: "categories",
    tickLength: 0
  }
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD
 * ---------
 */

var bar_data = {
  data: [["Assurant", 10], ["Ole", 8], ["RRS", 4], ["Turbo", 13], ["Taylor", 17], ["Rex", 9]],
  color: "#99E6F9"
};
$.plot("#employeesbyclient", [bar_data], {
  grid: {
    borderWidth: 1,
    borderColor: "#f3f3f3",
    tickColor: "#f3f3f3"
  },
  series: {
    bars: {
      show: true,
      barWidth: 0.5,
      align: "center"
    }
  },
  xaxis: {
    mode: "categories",
    tickLength: 0
  }
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD
 * ---------
 */

var bar_data = {
  data: [["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9]],
  color: "#99E6F9"
};
$.plot("#monthlyturnovers", [bar_data], {
  grid: {
    borderWidth: 1,
    borderColor: "#f3f3f3",
    tickColor: "#f3f3f3"
  },
  series: {
    bars: {
      show: true,
      barWidth: 0.5,
      align: "center"
    }
  },
  xaxis: {
    mode: "categories",
    tickLength: 0
  }
});
/* END BAR CHART */
=======
//datatable plugin
$('.dataTable').DataTable({
    responsive: true,
    autoWidth: false
});
//select2plugin
$('.select2').select2();
//hide/show insurance details
$('input:radio[name="insurance"]').change(function(){
  if (this.checked && this.value == 1) {
  	$('.insuracedetails').show();
  	$('.insuracedetails').removeClass('hidden');
  } else {
  	$('.insuracedetails').hide();
  	$('.insuracedetails').addClass('hidden');

  }
});
//compute for deduction amount on application -> master tab
$('.compute').change(function(event) {
  var sum = 0;
  $('select :selected').each(function() {
      sum += Number($(this).val());
  });

  var total1 = sum-10;
  var total = parseFloat(total1);
	$('#deductionamt').val(total);
	// alert(sum);
});

var pathname = window.location.pathname;
var path = pathname.split('/');

if(path[1] == 'dashboard'){
	$( ".sidebar-menu li:eq(0)" ).addClass( "active" );
}

//copy physical address -> Customer add
$('#copypaddress').change(function(event) {
	var valuead1 = $('input[name=addressline1]').val();
	var valuead2 = $('input[name=addressline2]').val();
	var valuecity = $('input[name=city]').val();
	var valuestate = $('select[name=state]').val();
	var valueszipcode = $('input[name=zipcode]').val();

	if (this.checked) {
		$('input[name=maddressline1]').val(valuead1);
		$('input[name=maddressline2]').val(valuead2);
		$('input[name=mcity]').val(valuecity);
		// $('select[name=mstate] option[value="'+valuestate+'"]').prop('selected', true);
		$('select[name=mstate]').select2("val", valuestate);
		$('input[name=mzipcode]').val(valueszipcode);
	} else {
		$('input[name=maddressline1]').val("");
		$('input[name=maddressline2]').val("");
		$('input[name=mcity]').val("");
		$('select[name=mstate]').select2("val", "0");
		$('input[name=mzipcode]').val("");
	}
});

//hide employee information before adding an application
$('.addemployeeinfo').hide();

//adding a loading GIF for searching applicant
function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1000);

    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}
function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}
onReady(function () {
    show('page', true);
    show('loading', false);
    $('#searchapplicanttable').DataTable({
		    responsive: true,
		    autoWidth: false
		});
});

function removecard (el) {
  el.remove();
}

/*------------------------------------------------------------------------*/
/*for new customer add departments*/

var new_dept_form_count = 1;

function addnewdepartmentform() {
  new_dept_form_count++;
  var html_form = '<div class="form-group" id="departmentform'+new_dept_form_count+'">'+
                    '<button type="button" onclick="removenewdepartmentform('+new_dept_form_count+');" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                    '<label>Department Name</label>'+
                    '<input type="text" name="departmentname[]" id="departmentname'+new_dept_form_count+'" class="form-control">'+
                  '</div>';
  $('#newdeptform').append(html_form);
  return false;
}

function removenewdepartmentform (id) {
  $('#departmentform'+id).remove();
}

/*------------------------------------------------------------------------*/
/*------------------------------------------------------------------------*/
/*for new customer add contacts*/

var new_cont_form_count = 1;

function addnewcontactform() {
  new_cont_form_count++;
  var html_form = '<div class="col-md-12" id="newcontactform'+new_cont_form_count+'">'+
                    '<div class="col-md-3">'+
                      '<div class="form-group" >'+
                        '<label>Primary Contact Name</label>'+
                        '<input type="text" name="primarycname[]"  class="form-control">'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-md-3">'+
                      '<div class="form-group" >'+
                        '<label>Job Title</label>'+
                        '<input type="text" name="jobtitle[]"  class="form-control">'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-md-3">'+
                      '<div class="form-group" >'+
                        '<label>Direct Number</label>'+
                        '<input type="text" name="directnumber[]"  class="form-control">'+
                      '</div>'+
                    '</div>'+
                    '<div class="col-md-3">'+
                      '<div class="form-group" >'+
                        '<button type="button" onclick="removenewcontactform('+new_cont_form_count+');" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                        '<label>Email</label>'+
                        '<input type="text" name="email[]"  class="form-control">'+
                      '</div>'+
                    '</div>'+
                  '</div>';
  $('#newcontform').append(html_form);
  return false;
}

function removenewcontactform (id) {
  $('#newcontactform'+id).remove();
}
/*------------------------------------------------------------------------*/
/*------------------------------------------------------------------------*/
/*for new customer add supervisor*/

var new_sup_form_count = 1;

function addnewsupform() {
  new_sup_form_count++;
  var html_form = '<div class="col-md-12" id="newsupform'+new_sup_form_count+'">'+
                    '<div class="col-md-4">'+
                      '<label>Supervisor Name</label>'+
                      '<input type="text" name="supervisorname[]"  id="supervisorname" class="form-control">'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<label>Department</label>'+
                      '<input type="text" name="supervisordepname[]"  id="department" class="form-control">'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<button type="button" onclick="removenewsupform('+new_sup_form_count+');" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                      '<label>Shift</label>'+
                      '<input type="text" name="supervisorshift[]"  id="shift" class="form-control">'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<label>Direct Number</label>'+
                      '<input type="text" name="supervisordirectnum[]"  id="directnumber" class="form-control">'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<label>Email</label>'+
                      '<input type="text" name="supervisoremail[]"  id="email" class="form-control">'+
                    '</div>'+
                  '</div>';
  $('#newsupform').append(html_form);
  return false;
}

function removenewsupform (id) {
  $('#newsupform'+id).remove();
}
/*------------------------------------------------------------------------*/
/*------------------------------------------------------------------------*/
/*for new customer add supervisor*/

var new_shift_form_count = 1;

function addnewshiftform() {
  new_shift_form_count++;
  var html_form = '<div class="col-md-12" id="newshiftform'+new_shift_form_count+'">'+
                    '<div class="col-md-4">'+
                      '<label>Shift Name</label>'+
                      '<input type="text" name="shiftname[]" class="form-control">'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<label>Shift Days</label>'+
                      '<input type="text" name="shiftdays[]" class="form-control">'+
                    '</div>'+
                    '<div class="col-md-4">'+
                      '<button type="button" onclick="removenewshiftform('+new_shift_form_count+');" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                      '<label>Shift Hours</label>'+
                      '<input type="text" name="shifthours[]" class="form-control">'+
                    '</div>'+
                  '</div>';
  $('#newshiftform').append(html_form);
  return false;
}

function removenewshiftform (id) {
  $('#newshiftform'+id).remove();
}
/*------------------------------------------------------------------------*/
>>>>>>> cd462e2ada4e0ae44c54555ef7ea8f7a70c6075f
