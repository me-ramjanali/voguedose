<!-- Sidebar -->
<div id="sidebar-wrapper">
	<aside class="sidebar">
		<div class="my-profile-btn">
			<a href="{{ URL::to('styler/profile') }}"><button type="button" class="btn btn-danger">My Profile</button></a>
		</div>
		<nav class="sidebar-nav" style="overflow: hidden; width: auto; height: 538px;margin-top: 10px;">
			<ul class="metismenu ripple" id="menu">
				<li class="@if($active == 'dashboard')active @endif"><a href="{{ URL::to('styler/dashboard') }}">New Requests <span class="badge label-primary">{{ count($newRequests) }}</span></a></li>
				<li class="@if($active == 'in_progress')active @endif"><a href="{{ URL::to('styler/in_progress') }}">Work In Progress</a></li>
				<li class="@if($active == 'completed')active @endif"><a href="{{ URL::to('styler/completed') }}">Completed Requests</a></li>
				<li class="@if($active == 'inventory')active @endif"><a href="{{ URL::to('styler/inventory') }}">Inventory</a></li>
				<li class="@if($active == 'cloth_set')active @endif"><a href="{{ URL::to('styler/cloth_set') }}">Manage Cloth Set</a></li>
			</ul>
		</nav>
	</aside>
</div>
<!-- # Sidebar-wrapper -->