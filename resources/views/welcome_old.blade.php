<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Project | Mario</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}">
</head>
<body class="theme-red">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    <div class="overlay"></div>

    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>

    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">TEAM MARIO</a>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Voters</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="body">
                <form id="add-voter-form">
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Lastname" name="lastname">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Firstname" name="firstname">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Middlename" name="middlename">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix" style="margin-bottom: 30px;">
                        <div class="col-md-12">
                            <select class="form-control show-tick" name="address">
                                <option value="">-- Please Select Address --</option>                                
                                <option value="ALIMANGO">ALIMANGO</option>
                                <option value="APID">APID</option>
                                <option value="ACASIAHAN">ACASIAHAN</option>
                                <option value="CASOY">CASOY</option>
                                <option value="CANTABACO">CANTABACO</option>
                                <option value="ILAG">ILAG</option>
                                <option value="LANGSUB">LANGSUB</option>
                                <option value="LUSONG">LUSONG</option>
                                <option value="MASABA">MASABA</option>
                                <option value="UPPER MASABA">UPPER MASABA</option>
                                <option value="SIBAGAY">SIBAGAY</option>  
                                <option value="SIBAGAY 1">SIBAGAY 1</option>                         
                                <option value="SIBAGAY 2">SIBAGAY 2</option>
                                <option value="SIBAGAY 3">SIBAGAY 3</option>  
                                <option value="SILANGAN">SILANGAN</option>
                                <option value="SUGSUG">SUGSUG</option>
                                <option value="PATHFINDER">PATHFINDER</option> 
                                <option value="POROK 1">POROK 1</option>
                                <option value="PROPER">PROPER</option> 
                            </select>                            
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <select class="form-control show-tick" name="precinct">
                                <option value="">-- Please Select Precinct --</option>                                
                                <option value="0080A PCVL">0080A PCVL</option>
                                <option value="0080B PCVL">0080B PCVL</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <select class="form-control show-tick" name="legend">
                                <option value="">-- Please select --</option>                                
                                <option value="18-30">18-30</option>
                                <option value="Illiterate">Illiterate</option>
                                <option value="PWD">PWD</option>
                                <option value="Senior Citizen">Senior Citizen</option>
                                <option value="Illiterate - Senior Citizen">Illiterate - Senior Citizen</option>
                                <option value="No Data">No Data</option>
                            </select>
                        </div>
                    </div>                  
                </form>   
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="add-voter">Add Voters</button>            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
            </div>

            <div class="menu">
                <ul class="list">
                    <li class="header">NAVIGATION</li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">view_list</i>
                            <span>Table</span>
                        </a>
                    </li>     
                    <li>
                        <a data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">person_add</i>
                            <span>Add Voters</span>
                        </a>
                    </li>                                  
                </ul>
            </div>

            <section class="content" style="z-index: 444;">
                <div class="container-fluid">
                    <div class="block-header">
                        <h2>JQUERY DATATABLES
                            <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                        </h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="voter-table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>ID</th>
                                                    <th>Lastname</th>
                                                    <th>Firstname</th>
                                                    <th>Middlename</th>
                                                    <th>Address</th>
                                                    <th>Precinct #</th>
                                                    <th>Legend</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>ID</th>
                                                    <th>Lastname</th>
                                                    <th>Firstname</th>
                                                    <th>Middlename</th>
                                                    <th>Address</th>
                                                    <th>Precinct #</th>
                                                    <th>Legend</th>
                                                </tr>
                                            </tfoot>                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <div class="legal">
            <div class="copyright">
                &copy; 2018 <a href="javascript:void(0);">MCFAITH</a>
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
    </aside>
</section>

<!-- Jquery Core Js -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap Core Js -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<!-- Select Plugin Js -->
<script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
<!-- Slimscroll Plugin Js -->
<script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- Waves Effect Plugin Js -->
<script src="{{asset('plugins/node-waves/waves.js')}}"></script>
<!-- Jquery CountTo Plugin Js -->
<script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>
<!-- Morris Plugin Js -->
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/morrisjs/morris.js')}}"></script>
<!-- ChartJs -->
<script src="{{asset('plugins/chartjs/Chart.bundle.js')}}"></script>
<!-- Flot Charts Plugin Js -->
<!-- <script src="{{asset('plugins/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.time.js')}}"></script> -->
<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('js/pages/index.js')}}"></script>
<!-- Demo Js -->
<script src="{{asset('js/demo.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript">

$('#add-voter').click(function(e){
var data_form = new FormData($('#add-voter-form')[0]);
var form = document.getElementById('add-voter-form');
e.preventDefault();
    $.ajax({
        url: '{{ url("/addvoter") }}',
        type:'POST',
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
        data: data_form,
        cache:false,
        contentType: false,
        processData: false,

        success: function(data) {
            if($.isEmptyObject(data.error)){
                form.reset();
            }else{
                console.log('error');
            }
        }
    });
});

var dt;
$(document).ready(function(){  
dt = $('#voter-table').DataTable({

     destroy:    true,
     processing: true,
     serverSide: true,
     select: true,
     ajax: '{{ url("/getvoter") }}',
     order: [[ 8, "asc" ]],
     'columnDefs': [
      {
           "targets": 9,
           "className": "text-center",
      },
      {
           "targets": 6,
           "className": "text-center",
      }],
     language: {
        paginate: {
          next:     '<i class="material-icons">keyboard_arrow_right</i>',
          previous: '<i class="material-icons">keyboard_arrow_left</i>'
        }
      },
     columns: [
         {           
           "className":  'details-control',
           "data":       null,
           "orderable":  false,
           "defaultContent": '<a style="cursor: pointer;"><i class="material-icons">&#xE5CF;</i></a>'
         },
         {data: 'id',       "className": "text-center"},
         {data: 'lname',    "className": "text-center"},
         {data: 'fname',    "className": "text-center"},             
         {data: 'mname',    "className": "text-center"},
         {data: 'address',  "className": "text-center"},            
         {data: 'precnum',  "className": "text-center"},  
         {data: 'legend',   "className": "text-center"},
     ]
 });
});

</script>
</html>