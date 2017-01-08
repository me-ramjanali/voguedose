@extends('layouts.app')

@section('content')
<!-- includes navigation file -->
@include('parts.order_navigation')
<section>
	<div class="row padding-small">
		<div class="medium-8 medium-offset-2 columns">
			<div>
				<div data-alert class="alert-box success-msg">
					<h3>"Thank You for creating your Style Profile. We will contact you shortly via email for delivery instructions and any other questions that we have."</h3> 
				</div>
			</div>
			<div style="text-align: center;">
				<a href="{{ URL::to('/') }}" class="button">Back To Home</a>
			</div>
		</div>
	</div>
</section>
<script>
	fbq('track', 'CompleteRegistration', {
		value: 25.00,
		currency: 'USD'
	});
</script>
@endsection