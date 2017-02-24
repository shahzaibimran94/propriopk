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
                <h1 class="page-header">Orders Details</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
        <div class="row">
            <div class="col-lg-8">
                
              
                
              <!-- /.table view data -->
              <table>
                 <tr>
                    <td>OrderID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Shipping Address</td>
                    <td>Phone Number</td>
                    <td>Order Date</td>
                    <td>Status</td>
                    <td>Options</td>
                    <td>View</td>
                </tr>

                @foreach ($orders as $order)
                
                <tr>

                 <td>{{ $order->id }}</td>
                 <td>{{ $order->fullname }}</td>
                 <td>{{ $order->email }}</td>
                 <td>{{ $order->shippingAddress }}</td>
                 <td>{{ $order->phone }}</td>
                 <td>{{ $order->orderDate }}</td>
                 <td>{{ $order->status }}<a href="changeStatus/{{ $order->id }}">Change</a></td>
                 <td><a href="/updateOrder/{{ $order->id }}">Update</a>,<a href="/deleteOrder/{{ $order->id }}">Delete</a></td>
                 <td><a href="/viewOrder/{{ $order->id }}">Click Here</a></td>
             </tr>
             
             @endforeach
         </table>
         
         
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
