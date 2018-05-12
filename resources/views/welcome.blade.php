<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>TEAM MARIO | Project MARIO</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('super-mario.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <style>
        /*Scroll*/
        ::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar
        {
            width: 7px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb
        {   
            border-radius: 10px;
            background-color: #888;
        }
    </style>
</head>

<body class="theme-red">
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
<select class="form-control show-tick" name="address" id="a">
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
<select class="form-control show-tick" name="precinct" id="b">
<option value="">-- Please Select Precinct --</option>                                
<!-- <option value="0080A PCVL">0080A PCVL</option>
<option value="0080B PCVL">0080B PCVL</option>
<option value="0081A PCVL">0081A PCVL</option>
<option value="0081B PCVL">0081B PCVL</option> -->
<option value="0081A PCVL">0081A PCVL</option>
<option value="0081C PCVL">0081C PCVL</option>
<option value="0081B PCVL">0081B PCVL</option>
<option value="0082C PCVL">0082C PCVL</option>
<option value="0082D PCVL">0082D PCVL</option>
<option value="0083A PCVL">0083A PCVL</option>
<option value="0083B PCVL">0083B PCVL</option>
<option value="0083C PCVL">0083C PCVL</option>
</select>
</div>

<div class="col-sm-6">
<select class="form-control show-tick" name="legend" id="c">
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

    <!-- Page Loader -->
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
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">

            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">TEAM MARIO</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <img src="{{asset('teammario.png')}}" style="width: 252px; margin: -18px 0px;">
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVIGATE</li>
                    <li class="active">
                        <a data-toggle="modal" data-target="#exampleModal">
                            <i class="material-icons">person_add</i>
                            <span>Add Voters</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="https://facebook.com/mcfaith">Mcfaith</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LIST OF VOTERS
                            </h2>
                        </div>
                        <div class="body" style="padding: 10px; font-size: 12px">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="voter-table">
                                    <thead>
                                        <tr>
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
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/tables/jquery-datatable.js')}}"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

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
                    $('#a').prop('selectedIndex',-1);
                    $('#b').prop('selectedIndex',-1);
                    $('#c').prop('selectedIndex',-1);
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
         responsive: true,
         select: true,
         ajax: '{{ url("/getvoter") }}',
         dom: 'Bfrtip',
             buttons: [
                 'excel',
                 'print'
             ],
         columns: [
             {data: 'lname'},
             {data: 'fname'},             
             {data: 'mname'},
             {data: 'address'},            
             {data: 'precnum'},  
             {data: 'legend'},
         ]
     });

    // Setup - add a text input to each footer cell
    $('#voter-table tfoot th').each( function () {
        var title = $('#voter-table thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    });
     
    // Apply the filter
    dt.columns().every( function () {
        var column = this;
     
        $( 'input', this.footer() ).on( 'keyup change', function () {
            column
                .search( this.value )
                .draw();
        });
    });   
});

    </script>
</body>

</html>