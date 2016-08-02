@extends('layouts.app') @section('content')
<div class="error-page">
	<h2 class="headline text-info">404</h2>
	<div class="error-content">
		<h3>
			<i class="fa fa-warning text-yellow"></i> Oops! Page not found.
		</h3>
		<p>
			We could not find the page you were looking for. Meanwhile, you may <a
				href="{{ url('')}}">return to Home page</a> or try using the search
			form.
		</p>
	</div>
</div>
@endsection
