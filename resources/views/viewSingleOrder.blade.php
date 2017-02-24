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
            <a class="navbar-brand" href="/portal">Proprio.pk</a>
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
                    <li><a href="/adminSetting"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                        <a href="/portal"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                <h1 class="page-header">Order Detail</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
        <div class="row">
            <div class="col-lg-8">
                
              <!-- /.table view data -->
              <table>
                 @foreach ($order as $ord)
                 <tr>
                    <td>Name</td>
                    <td>{{ $ord->fullname }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $ord->email }}</td>
                </tr>
                <tr>
                    <td>Shipping Address</td>
                    <td>{{ $ord->shippingAddress }}</td>
                </tr>
                <tr><td>PhoneNumber</td>
                    <td>{{ $ord->phone }}</td>
                </tr>
                <tr>
                    <td>Waist</td>
                    <td>{{ $ord->waist }}</td>
                </tr>
                <tr>
                    <td>Inseam</td>
                    <td>{{ $ord->inseam }}</td>
                </tr>
                <tr>
                    <td>Outseam</td>
                    <td>{{ $ord->outseam }}</td>
                </tr>
                <tr>
                    <td>Rise</td>
                    <td>{{ $ord->rise }}</td>
                </tr>
                <tr>
                    <td>Hips</td>
                    <td>{{ $ord->hips }}</td>
                </tr>
                <tr>
                    <td>Thighs</td>
                    <td>{{ $ord->thigh }}</td>
                </tr>
                <tr>
                    <td>JeansFit</td>
                    <td>{{ $ord->jeans }}</td>
                </tr>
                <tr>
                    <td>Style</td>
                    <td>{{ $ord->style }}</td>
                </tr>
                <tr>
                    <td>Fabric</td>
                    <td>{{ $ord->fabric }}</td>
                </tr>
                <tr>
                    <td>Fabric Color</td>
                    <td>{{ $ord->fabricColor }}</td>
                </tr>
                <tr>
                    <td>Scrapping</td>
                    <td>{{ $ord->scrapping }}</td>
                </tr>
                <tr>
                    <td>Whiskers</td>
                    <td>{{ $ord->whiskers }}</td>
                </tr>
                <tr>
                    <td>Ripped</td>
                    <td>{{ $ord->ripped }}</td>
                </tr>
                <tr>
                    <td>Text</td>
                    <td>{{ $ord->text }}</td>
                </tr>
                
                @endforeach
            </table>

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