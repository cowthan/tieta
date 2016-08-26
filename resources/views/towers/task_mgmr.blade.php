<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{ URL::asset('/') }}/assets/towers/img/favicon.html">

    <title>Dynamic Table</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('/') }}/assets/towers/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('/') }}/assets/towers/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ URL::asset('/') }}/assets/towers/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('/') }}/assets/towers/css/style.css" rel="stylesheet">
    <link href="{{ URL::asset('/') }}/assets/towers/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ URL::asset('/') }}/assets/towers/js/html5shiv.js"></script>
      <script src="{{ URL::asset('/') }}/assets/towers/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="#" class="logo">AlphaGo<span>智能统计平台</span></a>
          <!--logo end-->

          <div class="top-nav ">
              <!--search & user info start-->
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="{{ URL::asset('/') }}/assets/towers/img/avatar1_small.jpg">
                          <span class="username">Jhon Doue</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                          <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
              <!--search & user info end-->
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="sub-menu">
                      <a class="" href="index.html?sid={{$sid}}">
                          <i class="icon-dashboard"></i>
                          <span>综合管理</span>
                      </a>
                  </li>
                  <li class="active">
                      <a class="" href="task_mgmr.html?sid={{$sid}}">
                          <i class="icon-tasks"></i>
                          <span>任务管理</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="user_mgmr.html?sid={{$sid}}">
                          <i class="icon-cogs"></i>
                          <span>用户管理</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="admin_mgmr.html?sid={{$sid}}">
                          <i class="icon-book"></i>
                          <span>管理员管理</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              任务管理&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="http://114.215.81.196:8080/towers1122334/tower/excel?sid={{$sid}}" target="_blank"><button type="button" class="btn btn-primary">添加管理员</button></a>
                          </header>
                          <table class="table table-striped border-top" id="sample_1">
                          <thead>
                          <tr>
                              <th>序号</th>
                              <th class="hidden-phone">姓名</th>
                              <th class="hidden-phone">发电机型号</th>
                              <th class="hidden-phone">站点</th>
                              <th class="hidden-phone">运营商</th>
                              <th class="hidden-phone">发电时间</th>
                              <th class="hidden-phone">开始</th>
                              <th class="hidden-phone">结束</th>
                              <th class="hidden-phone">操作</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($tasks as $task)
                              <tr class="odd gradeX" style="cursor:pointer;" onclick="openPhoto('{{$task->id}}');">
                                  <td>{{$task->id}}</td>
                                  <td>{{$task->owner}}</td>
                                  <td>{{$task->motorType}}</td>
                                  <td>{{$task->stateName}}</td>
                                  <td>{{$task->gongsi}}</td>
                                  <td>{{ $task->status2 }}</td>
                                  <td >{!! date("Y-m-d H:i:s", $task->startTime) !!}</td>
                                  <td>{!! $task->endInfo2 !!}</td>
                                  <td>
                                      <button type="button" class="btn btn-danger" onclick="deleteById('{{$task->id}}');">删除</button>
                                  </td>
                              </tr>
                          @endforeach
                          </tbody>
                          </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('/') }}/assets/towers/js/jquery.js"></script>
    <script src="{{ URL::asset('/') }}/assets/towers/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('/') }}/assets/towers/js/jquery.scrollTo.min.js"></script>
    <script src="{{ URL::asset('/') }}/assets/towers/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('/') }}/assets/towers/assets/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="{{ URL::asset('/') }}/assets/towers/assets/data-tables/DT_bootstrap.js"></script>


    <!--common script for all pages-->
    <script src="{{ URL::asset('/') }}/assets/towers/js/common-scripts.js"></script>

    <!--script for this page only-->
    <script src="{{ URL::asset('/') }}/assets/towers/js/dynamic-table.js"></script>

  <script src="{{ URL::asset('/') }}/assets/towers/layer/layer.js"></script>
  <script src="{{ URL::asset('/') }}/assets/towers/layer/extend/layer.ext.js"></script>

  <script>

      $(document).ready(function(){

      });

      function openPhoto(taskId){
            layer.open({
              type: 2,
              title: "任务详情-" + taskId,
              area: ['630px', '560px'],
              shade: 0.8,
              closeBtn: true,
              shadeClose: true,
              content: 'task_info.html?id=' + taskId //http://player.youku.com/embed/XMjY3MzgzODg0
          });
        }

      function deleteById(id){
          console.log('{{$sid}}');
          console.log(id);
          layer.confirm('你确定要删除吗？',
                  {icon: 3},
                  function(index){
                      ///确认的回调
                      layer.close(index);
                      $.get('deleteTask', {
                          "taskId": id,
                          "sid": '{{$sid}}'
                      }, function(data, status) {
                          var res = data; //JSON.parse(data);
                          console.log(res);
                          if(status === "success"){
                              if(res.code == 0){
                                  layer.msg("成功了！");
                                  location.reload();
                              }else{
                                  layer.alert("失败--" + res.message);
                              }
                          }else{
                              layer.alert("失败--" + status);
                          }
                      });
                  },
                  function(index){
                      ///取消的回调
                      layer.close(index);
                  }
          );

      }


  </script>
  </body>
</html>
