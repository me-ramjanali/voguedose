<!-- Sidebar -->
<div id="sidebar-wrapper">
	<aside class="sidebar">
		<div class="my-profile-btn btn btn-danger">
			<a href="{{ URL::to('styler/profile') }}">My Profile</a>
		</div>
		<div class="side-bar-menu">
			<ul>
				<li class="@if($active == 'dashboard')active @endif"><a href="{{ URL::to('styler/dashboard') }}"><span class="badge label-primary">{{ count($newRequests) }}</span> New Requests</a></li>
				<li class="@if($active == 'in_progress')active @endif"><a href="{{ URL::to('styler/in_progress') }}">Work In Progress</a></li>
				<li class="@if($active == 'completed')active @endif"><a href="{{ URL::to('styler/completed') }}">Completed Requests</a></li>
				<li class="@if($active == 'inventory')active @endif"><a href="{{ URL::to('styler/inventory') }}">Inventory</a></li>
			</ul>
		</div>
	</aside>
</div>
<!-- # Sidebar-wrapper -->