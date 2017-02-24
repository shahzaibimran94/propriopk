@extends('layouts.cssNjs')

<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="portal">Proprio.pk</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="#"><i class="fa fa-user fa-fw"></i> {{$email}}</a>
          </li>
          <li><a href="adminSetting"><i class="fa fa-gear fa-fw"></i> Settings</a>
          </li>
          <li class="divider"></li>
          <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

          <li>
            <a href="portal"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
          </li>

          <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Orders<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="/insert">Add Orders</a>
              </li>
              <li>
                <a href="/view-records">View Orders</a>
              </li>
            </ul>
            <!-- /.nav-second-level -->
          </li>

          <li>
            <a href="#"><i class="fa fa-files-o fa-fw"></i> Admin<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="/insertAdmin">Add Admin</a>
              </li>
              <li>
                <a href="/viewAdmin-records">View Admin</a>
              </li>
            </ul>
            <!-- /.nav-second-level -->
          </li>
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Create New Admin</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-lg-8">
        <div class="panel panel-default">

          <!-- /.Create new Admin -->
          <form role="form" action = "/createAdmin" method = "post">
                   {{ csrf_field() }}

           <table>
            <tr class="form-group">
             <td class="col-md-2 control-label">Full Name</td>
             <td><input class="form-control" type='text' name='name' maxlength="16" placeholder="Full Name" required=""/></td>
           </tr>
           <tr class="form-group">
             <td class="col-md-2 control-label">Email</td>
             <td><input class="form-control" type='email' name='email' required placeholder="id@example.com"/></td>
           </tr>
           <tr class="form-group">
             <td class="col-md-2 control-label">Password</td>
             <td><input class="form-control" type='Password' name='password' placeholder="Password" maxlength="16" required maxlength="15"/></td>
             @if(isset($errorPhone)){
             {{$errorPhone}}
           }
           @endif
         </tr>
         <tr class="form-group">
           <td class="col-md-2 control-label">Phone Number</td>
           <td><input class="form-control" type='text' name='phone'  placeholder="03121234567" maxlength="11" required/></td>
         </tr>
         <tr>
           <td>Gender</td>
           <td>
            <input type="radio" name="gender" value="male" checked="checked"><label>Male</label><br>
            <input type="radio" name="gender" value="female"><label>Female</label>
          </td>
        </tr>
        <tr>
         <td colspan = '2'>
          <input type = 'submit' value = "Add"/>
        </td>
      </tr>
    </table>

  </form>
  
</div>
<!-- /.panel-footer -->
</div>
<!-- /.panel .chat-panel -->
</div>
<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
