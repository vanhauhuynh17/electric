<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{{asset('')}}" target="_blank">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
  <!-- base:css -->

  @include('lib.css.typicons')

  @include('lib.css.bendor-bundle-base')

  <!-- <link rel="stylesheet" href="assets/vendors/typicons/typicons.css"> -->
  <!-- <link rel="stylesheet" href="assets/vendors/cssheadin
  <!-- inject:css -->
  @include('lib.css.vertical-light-layout')
  <!-- <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css"> -->
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />


  <style>
    .nav-item {
      margin-top: 0;
      border-bottom: 2px solid #f5ecec;
      padding-bottom: 1.3rem;

    }

    .table th,
    .table td {
      border: 2px solid #f3f3f3;
    }

    .export-excel {

      color: #000;
      text-decoration: none;
    }

    .btn-logout {
      cursor: pointer;
      text-decoration: none;
      color: #000;
    }

    .form-control {
      border: 1px solid #000 !important;

    }
  </style>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .content-wrapper {
      padding: 1rem !important;
    }
  </style>


<style type="text/css">


/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100px;
  height: 100px;
  display:none;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255,255,255,0.5);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 100px;
  height: 100px;
  margin-top: -0.5em;

  border: 15px solid rgba(33, 150, 243, 1.0);
  border-radius: 100%;
  border-bottom-color: transparent;
  -webkit-animation: spinner 1s linear 0s infinite;
  animation: spinner 1s linear 0s infinite;


}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
</head>

<body>


<div class="loading">Loading&#8230;</div>
stuff <a href="#">link</a>
 
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="fa fa-bars"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">


        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a href="#" class="date mb-0 btn-logout">admin</a>
          </li>
          <li class="nav-item nav-date dropdown">
            <!-- <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;"> -->
            <a href="{{route('logout')}}" class="date mb-0 btn-logout">Đăng xuất</a>
            <!-- <i class="typcn typcn-calendar"></i> -->
            <i class=" ml-3 fa fa-user-circle"></i>
            <!-- </a> -->
          </li>

          <li class="nav-item dropdown mr-0">

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="typcn typcn-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="typcn typcn-cog-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="typcn typcn-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close typcn typcn-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->

      <form method="get" id="form-data">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <span class="menu-title">Từ ngày</span>

            </li>

            <li class="nav-item">

              <input class="w-100 data-change" type="datetime-local" id="from_date" name="from_date">

            </li>

            <li class="nav-item">
              <span class="menu-title">Đến ngày</span>
            </li>

            <li class="nav-item">

              <input class="w-100 data-change" type="datetime-local" id="to_date" name="to_date">

            </li>


            <li class="nav-item">
              Line
            </li>

            <li class="nav-item">
              <div class="input-group">
                <select name="line" class="data-change form-select form-select-sm form-control" aria-label=".form-select-sm example">
                  <option selected value="">All</option>
                  @foreach($data["lines"] as $line)
                  <option value="{{$line->Line}}">{{$line->Line}}</option>
                  @endforeach

                </select>
                <!-- <input name="line" type="text" aria-label="First name" class="data-change form-control"> -->
              </div>

            </li>


            <li class="nav-item">
              Status
            </li>

            <li class="nav-item">
              <select name="status" class="data-change form-select form-select-sm form-control" aria-label=".form-select-sm example">

                <option selected value="">All</option>
                @foreach ($data["statuses"] as $s)
                <option value="{{$s->Status}}">{{$s->Status}}</option>
                @endforeach
                <!-- <option value="Good">Good</option>
                  <option value="NoRead">NoRead</option>
                  <option value="Wrong">Wrong</option>
                  <option value="Noready">Noready</option>
                  <option value="Unknow">Unknow</option> -->
              </select>
            </li>

            <li class="nav-item">
              SKUID
            </li>

            <li class="nav-item">
              <div class="input-group">
                <input name="skuid" type="text" aria-label="SKUID" class="data-change form-control">
              </div>

            </li>


            <li class="nav-item">

              <button type="submit" id="btn-report" class="nav-link nav-link btn rounded btn-primary text-light font-weight-bold" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Reports</span>

              </button>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item cursor-pointer" style="cursor:pointer">

              <div class="nav-link nav-link btn rounded btn-primary text-light font-weight-bold" onclick="exportData()">
               Export Excel 
               <img class="ml-auto" style="width:30px" src="assets/images/word.png" />
</div>
            
              </button>
            </li>
          </ul>
        </nav>
      </form>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dataman</h4>
                  <div id="piechart_3d" style="width:100%"></div>




                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Report</h4>
                  <table id="table-data" class="table">
                    <thead>
                      <tr>
                        <th>Total</th>
                        <th id="count_total">00</th>

                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Good</td>
                        <td id="Good">00</td>
                      </tr>
                      <tr>
                        <td>No Read</td>
                        <td id="NoRead">00</td>
                      </tr>
                      <tr>
                        <td>Wrong Code</td>
                        <td id="WrongCode">00</td>
                      </tr>
                      <tr>
                        <td>No Ready</td>
                        <td id="NoReady">00</td>
                      </tr>
                      <tr>
                        <td>Unknow</td>
                        <td id="Unknow">00</td>
                      </tr>

                    </tbody>
                  </table>



                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data</h4>
                  <table id="table-detail-data" class="table">
                    <thead>
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                          DateTime
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          SKUID
                        </th>
                        <th>
                          ProductName
                        </th>
                        <th>
                          Line
                        </th>
                        <th>
                          Reject
                        </th>
                      </tr>
                    </thead>
                  </table>




                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @include('lib.js.vendor-bundle-base')
  <!-- endinject -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="assets/vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="assets/js/file-upload.js"></script>
  <script src="assets/js/typeahead.js"></script>
  <script src="assets/js/select2.js"></script>
  <!-- End custom js for this page-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>




  <script type="text/javascript">
    // todo: GLOBAL-------------------------
    var table;
    window.baseURL = "{{$data['base_url']}}";
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);
    var chart;
    var options;
    // end:GLOBAL------------------------

    function handleData(oData) {
      // todo: Config------------
      console.log("HANDLE DATA: ", oData);
      const title = "Status report statistics";
      const task = ["Task", "Status report statistics"];
      const types = [];
      for (key in oData) {
        const ob = {
          "Status": key,
          "Quantity": oData[key]
        };

        types.push(ob);

      }
      let count_total = 0;
      for (key in oData) {
        $("#" + key).text(oData[key]);
        count_total += parseInt(oData[key]);

      }

      // oData.forEach(e=>e["Quantity"] = parseFloat(e["Quantity"])/parseFloat(count_total));
      $("#count_total").text(count_total);

      // todo: Detail Data----------
      if (table) {
        table.destroy()
      }
      // table.destroy();
      table = $('#table-detail-data').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
          "type": "GET",
          "url": window.baseURL + "/get-datatable?" + $("#form-data").serialize(), // đường dẫn trỏ tới Controller trả về dữ liệu
          data: function(d) {

            // d["params"] = JSON.parse($("#form-data").serialize());
            // d.custom = $('#myInput').val();
            // etc
          },


        }

      });

      // Config---------------------


      let drawData = types.map(e => [e.Status, Math.round(e.Quantity / count_total * 100)]);

      drawData.unshift(task);

      console.log("DRAW DATA: ", drawData);
      var data = google.visualization.arrayToDataTable(drawData);
      var options = {
        title: title,
        is3D: true,
      };
      chart.draw(data, options);

      let str = "";
      $("#total").text(oData.length);

    }

    function drawChart() {
      var data1 = [];
      // todo: Config------------
      const title = "Status report statistics";
      const task = ["Task", "Status report statistics"];
      const types = [{
          "Status": "Good",
          "Quantity": 0
        },
        {
          "Status": "Wrong",
          "Quantity": 0
        },
        {
          "Status": "NoRead",
          "Quantity": 0
        }

      ];
      // Config---------------------


      const drawData = types.map(e => [e.Status, e.Quantity]);
      drawData.unshift(task);
      console.log("DRAWWWWW: ", drawData);
      chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      var data = google.visualization.arrayToDataTable(drawData);
      var options = {
        title: title,
        is3D: true,
      };


      chart.draw(data, options);

      //todo: Load Ddata---------
      let str = "";
      types.forEach(e => {
        const tr = `<tr>
              <td>${e.Status}</td> 
              <td>${e.Quantity}</td> 
            </tr>`;
        str += tr;

      });
      $("#total").text(data1.length);
      // $("#table-data tbody").html(str);

    }

    $("#btn-report").click(function(e) {
      e.preventDefault();
      $(".loading").css("display", "block");
      setTimeout(()=>{
        processReport();
      },100);
    });
    table.destroy();
    function processReport(){
        $.ajax({
          url: "{{$data['base_url']}}" + "/get-data",
          type: 'POST',
          dataType: "json",
          data: $("#form-data").serialize()
        }).done(function(data) {
          handleData(data);
          $(".loading").toggle();
        });
    }
    function processExport(){
      $.ajax({
        url: "{{$data['base_url']}}" + "/export-data",
        type: 'GET',
        dataType: "json",
        async: false,
        data: $("#form-data").serialize(),
        success: function(data) {
          if (data.error) {           
                    $(".loading").toggle();
                  Swal.fire(
                    'Export failed !',
                    data.message,
                    'error'
                  )          
           
          } else {          
                  $(".loading").toggle();
                  Swal.fire(
                    'Export Successfully !',
                    data.message,
                    'success'
                  )           
           
          }
        }
      });
    }
    function exportData() {
      $(".loading").css("display", "block");
      setTimeout(()=>{
        processExport();
      }, 100);
    
    
  
    


    }


    $(document).ready(function() {
    
    });
  </script>
</body>

</html>