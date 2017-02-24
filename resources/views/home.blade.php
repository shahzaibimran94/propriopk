

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
            </div>
        </div>
    </div>
</div>

<div style="width:750px; margin:0 auto;">

	<div style="width:200px; float:left; border:2px solid black;">
		<h1 style="text-align:center; margin:0 auto"><b>{{$total}}</b></h1>
		<p style="text-align:center; margin:0 auto;"><b>Total Orders</b></p>
	</div>


	<div style="width:200px; margin:0 auto; border:2px solid black;">
		<h1 style="text-align:center; margin:0 auto"><b>{{$total}}</b></h1>
		<p style="text-align:center; margin:0 auto;"><b>Total Orders</b></p>
	</div>

	<div style="width:200px; float:right; border:2px solid black;">
		<h1 style="text-align:center; margin:0 auto"><b>{{$total}}</b></h1>
		<p style="text-align:center; margin:0 auto;"><b>Total Orders</b></p>
	</div>

</div>	

@endsection


