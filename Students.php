<?php include "layouts/header.php"; 
include("studentsb.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<title>HOME | GOAL MANAGEMENT </title>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- select2 CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/select2/select2.min.css">
  <!-- chosen CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/chosen/bootstrap-chosen.css">

  <!-- favicon
    ============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="image/icon.png">
  <!-- Google Fonts
    ============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">

  <!-- Bootstrap CSS
    ============================================ -->
  <script src="https://use.fontawesome.com/e418a5cc12.js"></script>
  <!-- adminpro icon CSS
    ============================================ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/adminpro-custon-icon.css">
  <!-- meanmenu icon CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/meanmenu.min.css">
  <!-- mCustomScrollbar CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/jquery.mCustomScrollbar.min.css">
  <!-- animate CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/animate.css">
  <!-- modals CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/modals.css">
  <!-- normalize CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/data-table/bootstrap-table.css">
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/data-table/bootstrap-editable.css">
  <!-- normalize CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/normalize.css">
  <!-- style CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/form.css">
  <!-- forms CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/form/all-type-forms.css">
  <!-- forms CSS
    ============================================ -->
  <script src="https://adore.simtrak.in/assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <!-- charts CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/c3.min.css">
  <!-- style CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/style.css">
  <!--<link rel="stylesheet" href="https://adore.ivdata.in/cores/style.css">-->
  <!-- datapicker CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/datapicker/datepicker3.css">
  <!-- responsive CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/responsive.css">
  <!-- modernizr JS
      ============================================ -->
  <!-- summernote CSS
    ============================================ -->
  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/summernote.css">

  <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/preloader/preloader-style.css">
  <script src="https://adore.simtrak.in/assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
  <link href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="ui.css">

</head>

<body onload="myFunction()" class="materialdesign">
  <div id="loading">
    <div id="ts-preloader-absolute25">
      <div class="tscssload-triangles">
        <div class="tscssload-tri tscssload-invert"></div>
        <div class="tscssload-tri tscssload-invert"></div>
        <div class="tscssload-tri"></div>
        <div class="tscssload-tri tscssload-invert"></div>
        <div class="tscssload-tri tscssload-invert"></div>
        <div class="tscssload-tri"></div>
        <div class="tscssload-tri tscssload-invert"></div>
        <div class="tscssload-tri"></div>
        <div class="tscssload-tri tscssload-invert"></div>
      </div>
    </div>
  </div>

  <div style="display:none;" id="myDiv" class="animate-bottom">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->


    <div class="wrapper-pro">
     
      <div class="content-inner-all">
        <div class="header-top-area">
          <div class="-header-top">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">

                  <div class="admin-logo logo-wrap-pro">
                    <a href="#"><img src="../cores/img/adore_pcon2.png" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Header top area end-->
        <!-- Mobile Menu start -->
       
        <br />

        <div class="col-lg-11"></div>
        <div class="col-lg-1">


          <script>
            function goBack() {
              window.history.back();
            }
          </script>
          <br />
        </div>

        
        </br>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div style="margin-top:0px;margin-bottom:20px" class="sparkline13-list shadow-reset mg-tb-30">
                <div class="sparkline13-hd">
                  <div class="main-sparkline13-hd">
                    <h1>EVENT</h1>
                    <div class="sparkline13-outline-icon">
                    </div>
                  </div>
                </div>
                <script type="text/javascript" class="init">
                  $(document).ready(function () {
                    $('#ssss').DataTable({
                      "pageLength": 10,
                      "lengthChange": false,
                      "order": [[0, "desc"]]
                    });
                  });
                </script>
                <div class="sparkline10-graph">
                  <div class="static-table-list " style="overflow-x:scroll; overflow-y:hidden; border solid 0px;">
                    <br />
                    <a href="#" onclick="window.open('addevent_form.php', 
                         'newwindow', 
                         'width=500,height=500'); 
                        return false;" class="btn btn-primary">Add Event</a>

                    
                    <table width="100%" id="ssss" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10%;">Event Id</th>
                          <th>Event  Name</th>
                          <th>Event Coordinator</th>
                          <th>Event Description</th>
                          <th>Event Deadline </th>
                          <th>Event Date </th>        
                           <th>No of Participant</th>
                           <th>Event Credit</th>
                           <th>Images</th>
                           <th>Edit your event</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($table = mysqli_fetch_object($result)){ ?>
                          <tr>
                            <td style="width: 10%;"><a href="DB/access.php?event_id=<?= $table->id ?>">#
                                <?php echo $table->id; ?>
                              </a></td>
                            <td>
                              <?php echo $table->name; ?>
                            </td>
                            <td>
                              <?php echo $table->coordinator; ?>
                            </td>
                            <td>
                              <?php echo $table->description; ?>
                            </td>
                            <td>
                              <?php echo $table->registration_end; ?>
                            </td>
                            <td>
                              <?php echo $table->date; ?>
                            </td>
                            <td>
                              <?php echo $table->participants; ?>
                            </td>
                            <td>
                              <?php echo $table->point; ?>
                            </td>
                            <td>
                              <img src="event_image/<?=$table->image?>" alt="">
                            </td>
                              
                            <td>
                                <a href="addevent_form.php" class="btn btn-primary" 
                                    class="btn btn-danger"  title="Change Team Status"
                                  onclick="window.open('add_event.php?event_id=<?=$table->id?>', 'newwindow', 'width=500,height=500'); return false;"><i
                                    class='fa fa-gg-circle' aria-hidden='true'></i></a>
                                <a href="#" class="btn btn-primary" title="Change Team Name"
                                  onclick="window.open('edit_event.php?event_id=<?=$table->id?>', 'newwindow', 'width=500,height=500'); return false;"><i
                                    class='fa fa-edit' aria-hidden='true'></i></a>
                              </td>
                            
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-3">
            </div>
          </div>
        </div>
        <div class="icon-bar">
          <a href="#"
            onclick="window.open('https://adore.simtrak.in/addons/tickets/tickets.php','tickets', 'width=1500,height=500'); return false;"
            class="tooltip--left ticket" data-tooltip="Give Tickets"><i class="fa fa-tags"></i></a>
        </div>
        <style>
          .icon-bar {
            position: fixed;
            top: 10%;
            right: 0%;
            background: none;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: 1;
          }

          /* Style the icon bar links */
          .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
            border-radius: 50%;
          }

          /* Style the social media icons with color, if you want */
          .icon-bar a:hover {
            background-color: #000;
          }

          .ticket {
            background: #3B5998;
            color: white;

          }
        </style>
      </div>
      <div class="icon-bar">
        <!--<a href="#" onclick="window.open('https://adore.simtrak.in/addons/tickets/tickets.php','tickets', 'width=1500,height=500'); return false;" class="tooltip--left ticket" data-tooltip="Tickets & Ideas"><i class="fa fa-tags"></i></a>-->
        <a href="#"
          onclick="window.open('https://tickets.infovue.in/?site_code=10003&tel_no=8126808243&email_id=shahid576ali@gmail.com&ct_code=91&f_name=shahid&l_name=ali','tickets', 'width=1500,height=500'); return false;"
          class="tooltip--left ticket" data-tooltip="Tickets & Ideas"><i class="fa fa-tags"></i></a>
      </div>
      <style>
        .icon-bar {
          position: fixed;
          top: 10%;
          right: 0%;
          background: none;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          z-index: 1;
        }

        /* Style the icon bar links */
        .icon-bar a {
          display: block;
          text-align: center;
          padding: 16px;
          transition: all 0.3s ease;
          color: white;
          font-size: 20px;
          border-radius: 50%;
        }

        /* Style the social media icons with color, if you want */
        .icon-bar a:hover {
          background-color: #000;
        }

        .ticket {
          background: #3B5998;
          color: white;

        }
      </style>
    </div>

    <!-- chosen JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/chosen/chosen.jquery.js"></script>
    <script src="https://adore.simtrak.in/assets/js/chosen/chosen-active.js"></script>
    <!-- select2 JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/select2/select2.full.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/select2/select2-active.js"></script>
    <script src="https://adore.simtrak.in/assets/js/summernote.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/summernote-active.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.form.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/jquery.validate.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/form-active.js"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/counterup/waypoints.min.js"></script>
    <!-- modal JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/modal-active.js"></script>
    <!-- icheck JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/icheck/icheck.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/icheck/icheck-active.js"></script>
    <!-- peity JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/peity/jquery.peity.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/peity/peity-active.js"></script>
    <!-- rounded-counter JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/rounded-counter/jquery.countdown.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/rounded-counter/jquery.knob.js"></script>
    <script src="https://adore.simtrak.in/assets/js/rounded-counter/jquery.appear.js"></script>
    <script src="https://adore.simtrak.in/assets/js/rounded-counter/knob-active.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/sparkline/sparkline-active.js"></script>
    <!-- map JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/map/raphael.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/jquery.mapael.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/france_departments.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/world_countries.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/usa_states.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/map-active.js"></script>
    <!-- data table JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-table.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/tableExport.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/data-table-active.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-editable.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-table-export.js"></script>
    <!-- datapicker JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="https://adore.simtrak.in/assets/js/datapicker/datepicker-active.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="https://adore.simtrak.in/assets/js/main.js"></script>

    <script>
      var myVar;

      function myFunction() {
        myVar = setTimeout(showPage, 500);
      }

      function showPage() {
        document.getElementById("loading").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
      }
    </script>
    <script>
      var old_html = $("#myModal").html();

      $(document).ready(function () {
        $('div #reset_modals').click(function () {
          var val = $(this).attr('href');
          $("#myModal").html(old_html);
          $("#bla").load(val);
          val = "";
        });
      });
    </script>
</body>

</html>
<?php include "layouts/footer.php"; ?>