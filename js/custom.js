//datatable plugin
$('.dataTable').DataTable({
    responsive: true,
    autoWidth: false,
    "dom": 'T<"clear">lfrtip',
    "tableTools": {
      // "sSwfPath": "swf/copy_csv_xls_pdf.swf"
      "sSwfPath": "http://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf"
    }
});
if(window.location.href.indexOf('partialemployeeview') > 0) {

   $('.sidebar-toggle').click();

}
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
//on page ready,check if insurance is checked or not - MASTER TAB (APPLICATIOn)
if($('input:radio[name="insurance"]').is(':checked')) {
   if ($('input:radio[name="insurance"]:checked').val() == 1) {
    $('.insuracedetails').show();
    $('.insuracedetails').removeClass('hidden');
   } else {
    $('.insuracedetails').hide();
    $('.insuracedetails').addClass('hidden');
   }
}
//hide/show work history report
$('input:radio[name="hiretemp"]').change(function(){
  if (this.checked && this.value == 1) {
    $('.workreport').show();
    $('.workreport').removeClass('hidden');
  } else {
    $('.workreport').hide();
    $('.workreport').addClass('hidden');

  }
});
//on page ready,check if 'temp through agency' is checked or not - WORK HISTORY TAB (APPLICATIOn)
if($('input:radio[name="hiretemp"]').is(':checked')) {
   if ($('input:radio[name="hiretemp"]:checked').val() == 1) {
    $('.workreport').show();
    $('.workreport').removeClass('hidden');
   } else {
    $('.workreport').hide();
    $('.workreport').addClass('hidden');
   }
}

//do not let user input comma in search field
$(".empvalidatecomma").on('keyup', function(){
  this.value=this.value.replace(/,/g, "");
  this.value=this.value.replace(/:/g, "");
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
  alert(sum);
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

//for creating user - add 'name'

$('form[id=registeradmin] input[name=Password]').change(function(event) {
  $('form[id=registeradmin] input[name=name]').val($('form[id=registeradmin] input[name=firstname]').val() + ' ' + $('form[id=registeradmin] input[name=lastname]').val());
  // console.log($('form[id=registeradmin] input[name=name]').val());
});

//hide employee information before adding an application
$('.addemployeeinfo').hide();

function openPartialView(empid) {
  // window.open('partialemployeeview', '', 'width=900, height=900');
  var popup = window.open('partialemployeeview?empid='+empid, '', 'width=900, height=900');
  // alert(popup);
  popup.opener();
}
function showempinfoedit() {
  $('.addemployeeinfo').show();
  $('.addemployeeinfo').removeClass('hidden');

  $('#showempinfo_foredit').hide();
  $('#showempinfo_foredit').addClass('hidden');

  $('#hideempinfo_foredit').show();
  $('#hideempinfo_foredit').removeClass('hidden');
}

function hideempinfoedit() {
  $('.addemployeeinfo').hide();
  $('.addemployeeinfo').addClass('hidden');

  $('#hideempinfo_foredit').hide();
  $('#hideempinfo_foredit').addClass('hidden');

  $('#showempinfo_foredit').show();
  $('#showempinfo_foredit').removeClass('hidden');

}


//adding a loading GIF for searching applicant
function onReady(callback) {
    var intervalID = window.setInterval( checkReady, 1000 );

    function checkReady() {
        if ( document.getElementsByTagName('body')[0] !== undefined ) {
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


/*
 * BAR CHART FOR DASHBOARD - weeklytotalhours
 * ---------
 */
$.getJSON('pscripts/dashboardweeklytotalhours.php', function (data) {

  // create the chart
  $('#weeklytotalhours').highcharts('StockChart', {
      chart: {
          alignTicks: false
      },

      rangeSelector: {
          selected: 1
      },

      title: {
          text: 'Weekly Total Hours'
      },

      series: [{
          type: 'column',
          name: 'Total Hours',
          data: data,
          dataGrouping: {
              units: [[
                  'week', // unit name
                  [1] // allowed multiples
              ]]
          }
      }]
  });
});

/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD - weeklytotalemployees
 * ---------
 */
$.getJSON('pscripts/dashboardweeklytotalemployees.php', function (data) {

  // create the chart
  $('#weeklytotalemployees').highcharts('StockChart', {
      chart: {
          alignTicks: false
      },

      rangeSelector: {
          selected: 1
      },

      title: {
          text: 'Weekly Total Employees'
      },

      series: [{
          type: 'column',
          name: 'Total Employees',
          data: data,
          dataGrouping: {
              units: [[
                  'week', // unit name
                  [1] // allowed multiples
              ]]
          }
      }],
      colors: ['#434348']
  });
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD - weeklynewcandidates
 * ---------
 */
$.getJSON('pscripts/dashboardweeklytotalcandidates.php', function (data) {

  // create the chart
  $('#weeklynewcandidates').highcharts('StockChart', {
      chart: {
          alignTicks: false
      },

      rangeSelector: {
          selected: 1
      },

      title: {
          text: 'Weekly New Candidates'
      },

      series: [{
          type: 'column',
          name: 'Total Candidates',
          data: data,
          dataGrouping: {
              units: [[
                  'week', // unit name
                  [1] // allowed multiples
              ]]
          }
      }]
  });
});
/* END BAR CHART */


/*
 * BAR CHART FOR DASHBOARD - weeklynewhires
 * ---------
 */
$.getJSON('pscripts/dashboardweeklytotalnewhires.php', function (data) {

  // create the chart
  $('#weeklynewhires').highcharts('StockChart', {
      chart: {
          alignTicks: false
      },

      rangeSelector: {
          selected: 1
      },

      title: {
          text: 'Weekly New Hires'
      },

      series: [{
          type: 'column',
          name: 'Total New Hires',
          data: data,
          dataGrouping: {
              units: [[
                  'week', // unit name
                  [1] // allowed multiples
              ]]
          }
      }],
      colors: ['#434348']
  });
});

/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD - monthlytotalhours
 * ---------
 */
$.getJSON('pscripts/dashboardmonthlytotalhours.php', function (data) {

  // create the chart
  $('#monthlytotalhours').highcharts('StockChart', {
      chart: {
          alignTicks: false
      },

      rangeSelector: {
          selected: 1
      },

      title: {
          text: 'Monthly Total Hours'
      },

      series: [{
          type: 'column',
          name: 'Total Hours',
          data: data,
          dataGrouping: {
              units: [[
                  'month'
              ]]
          }
      }]
  });
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD - employeesbyclient
 * ---------
 */
$('#employeesbyclient').highcharts({
    data: {
        table: 'employeesbyclientdatatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Employees By Client'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    },
    colors: ['#434348']
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD - weeklyturnovers
 * ---------
 */
$.getJSON('pscripts/dashboardweeklytotalturnovers.php', function (data) {

  // create the chart
  $('#weeklyturnovers').highcharts('StockChart', {
      chart: {
          alignTicks: false
      },

      rangeSelector: {
          selected: 1
      },

      title: {
          text: 'Weekly Turnovers'
      },

      series: [{
          type: 'column',
          name: 'Total Turnovers',
          data: data,
          dataGrouping: {
              units: [[
                  'week', // unit name
                  [1] // allowed multiples
              ]]
          }
      }]
  });
});
/* END BAR CHART */

/*
 * BAR CHART FOR DASHBOARD - monthlyturnovers
 * ---------
 */
$.getJSON('pscripts/dashboardmonthlytotalturnovers.php', function (data) {

  // create the chart
  // console.log(data);
  $('#monthlyturnovers').highcharts('StockChart', {
      chart: {
          alignTicks: false
      },

      rangeSelector: {
          selected: 1
      },

      title: {
          text: 'Monthly Turnovers'
      },

      series: [{
          type: 'column',
          name: 'Total Turnovers',
          data: data,
          dataGrouping: {
              units: [[
                  'month'
              ]]
          }
      }],
      colors: ['#434348']
  });
});
/* END BAR CHART */