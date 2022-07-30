@extends('layouts.master')
@section('content')
   
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

      <form action="{{route('export-data')}}" method="post" id="form-data">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <span class="menu-title">Từ ngày</span>

            </li>

            <li class="nav-item">

              <input requỉed class="w-100 data-change" type="datetime-local" id="from_date" name="from_date">

            </li>

            <li class="nav-item">
              <span class="menu-title">Đến ngày</span>
            </li>

            <li class="nav-item">

              <input required class="w-100 data-change" type="datetime-local" id="to_date" name="to_date">

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

              <button type="submit" id="btn-report" class="nav-link nav-link btn rounded btn-primary text-light font-weight-bold w-100 px-4" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic">
                {{-- <i class="typcn typcn-document-text menu-icon"></i> --}}
                <span class="menu-title float-left">Reports</span>

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

              <button type="submit" class="nav-link nav-link btn rounded btn-primary text-light font-weight-bold w-100 px-4" >
                Export Excel 
                <img class="ml-auto" style="width:30px" src="assets/images/excel.png" />
              </button>      
           
            </li>
          </ul>
        </nav>
      </form>
      <form id="form-"  method="POST" action="{{route('export-data')}}">
      </form>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              <div class="col-md-12 col-12">
                <div class="card">
                  <div class="card-body">
                    @if(count($errors)>0)
                    @foreach ($errors->all() as $e)
                    <h4 class="alert alert-danger">{{$e}}</h4>

                    @endforeach
                    @php
                       \Session::flush('errors');
                @endphp
                    @endif
                  </div>
                </div>
              </div>

          </div>
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
                    <tbody>
                    </tbody>
                  </table>
                  <div class="mt-4 d-flex">
                    <button  id="btn-prev" data-page="1" class="pagination btn btn-light"> Previous </button>
                    <button  id="btn-next" data-page="1" class="pagination btn btn-light pl-4 ml-3"> Next </button>
                  </div>




                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
        @include('layouts.header')  
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

@endsection

@section("after_script")


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
    // if (table) {
    //   table.destroy()
    // }


   
    // table.destroy();
    // table = $('#table-detail-data').DataTable({
    //   "processing": true,
    //   "serverSide": true,
    //   "searching": false,
    //   "ajax": {
    //     dataType: "json",
    //     "type": "POST",
    //     // "url": window.baseURL + "/get-datatable?" + $("#form-data").serialize(), 
    //     url: "{{route('get-datatable')}}?" + $("#form-data") ,
    //     data: function(d) {

    //       var formData = JSON.parse(JSON.stringify(jQuery('#form-data').serializeArray())) // store json object
    //       const obj = {};
    //       formData.forEach(e=>obj[e["name"]] = e["value"]);
    //       d["params"] = obj;
    //       // d.custom = $('#myInput').val();
    //       // etc
    //     },
    //     error: function (request, status, error) {
    //         console.log( "ERROR: ", request.responseText);
    //     }


    //   }

    // });

    // Config---------------------


    let drawData = types.map(e => [e.Status, Math.round(e.Quantity / count_total * 100)]);

    drawData.unshift(task);

    console.log("DRAW DATA: ", drawData);
    var data = google.visualization.arrayToDataTable(drawData);
    var options = {
      title: title,
      is3D: true,
      width: 700,
      height: 700
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
  // table.destroy();
  function processReport(){
      // debugger
      $.ajax({
        // url: "{{$data['base_url']}}" + "/get-data",
        url:"{{route('get-data')}}",
        type: 'POST',
        dataType: "json",
        data: $("#form-data").serialize()
      }).done(function(data) {
        handleData(data);
        $(".loading").toggle();
      });
      ChartHandler.getDetailData(1);


  }

  function exportData(){
    $("#form-data").submit();
  }

  var ChartHandler = {
    init: function(){
      // this.onBtnNext();
      this.onPagination();

    },
    onBtnNext:function(){
      $("#btn-next").click(function(){
        const page = $(this).attr("data-page");
        alert("Page: " + page);
      });
    },
    onPagination:function(){
      $(".pagination").click(function(){
          $(".loading").css("display", "block");
          let page = $(this).attr("data-page");
          page = parseInt(page);
          ChartHandler.getDetailData(page);
        
      });
    },
    getDetailData:function(page = 1){
      $.ajax({
        // url: "{{$data['base_url']}}" + "/get-data",
        url:"{{route('get-detail-data')}}",
        type: 'POST',
        dataType: "json",
        data: $("#form-data").serialize() + "&page=" + page 
      }).done(function(data) {
          let html = "";
          $("#btn-prev").attr("data-page", data.prev);
          $("#btn-next").attr("data-page", data.next);
          data.data.forEach(e=>{
            const tr = `
              <tr>
                  <td>${e.ID}</td>
                  <td>${e.ID}</td>
                  <td>${e.ID}</td>
                  <td>${e.ID}</td>
                  <td>${e.ID}</td>
                  <td>${e.ID}</td>
                  <td>${e.ID}</td>
              </tr>`;
            
              html += tr;
          });
          $("#table-detail-data tbody").html(html);
          $(".loading").css("display", "none");   
      });
    }
  }
  $(document).ready(function() {
    ChartHandler.init();
  });
</script>
@endsection

