<div class="container-fluid">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-primary">
<div class="panel-heading">Reset Password</div>
<div class="panel-body">
@if(session('success'))
<div class="alert alert-info">
	{{session('success')}}
</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="/forgot-password">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
<label class="col-md-4 control-label">E-Mail Address</label>
<div class="col-md-6">
<input type="email" class="form-control" name="email" value="">
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
         Send Password Reset Link
</button>
</div>
</div>
</form>

</div>
</div>
</div>
</div>
</div>
