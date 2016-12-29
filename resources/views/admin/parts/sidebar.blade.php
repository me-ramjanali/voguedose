<!-- Sidebar -->
<div id="sidebar-wrapper">
	<aside class="sidebar">
		<div class="my-profile-btn btn btn-danger">
			<a href="{{ URL::to('admin/profile') }}">My Profile</a>
		</div>
		<div class="side-bar-menu">
			<ul>
				<li class="@if($active == 'dashboard')active @endif"><a href="{{ URL::to('admin/dashboard') }}"><span class="badge label-primary">{{ count($newRequests) }}</span> New Doses</a></li>
				<li class="@if($active == 'in_progress')active @endif"><a href="{{ URL::to('admin/in_progress') }}">Dose In Progress</a></li>
				<li class="@if($active == 'completed')active @endif"><a href="{{ URL::to('admin/completed') }}">Completed Dose</a></li>
				<li class="@if($active == 'inventory')active @endif"><a href="{{ URL::to('admin/inventory') }}">Inventory</a></li>
				<li class="@if($active == 'user_mangement')active @endif"><a href="{{ URL::to('admin/user_mangement') }}">User Management</a></li>
				<li class="@if($active == 'consumer')active @endif"><a href="{{ URL::to('admin/consumer') }}">Consumer data</a></li>
			</ul>
		</div>
	</aside>
</div>
<!-- # Sidebar-wrapper -->