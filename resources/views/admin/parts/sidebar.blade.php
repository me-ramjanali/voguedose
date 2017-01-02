<!-- Sidebar -->
<div id="sidebar-wrapper">
	<aside class="sidebar">
		<div class="my-profile-btn">
			<a href="{{ URL::to('admin/profile') }}"><button type="button" class="btn btn-danger">My Profile</button></a>
		</div>
		<nav class="sidebar-nav" style="overflow: hidden; width: auto; height: 538px;margin-top: 10px;">
			<ul class="metismenu ripple" id="menu">
				<li class="@if($active == 'dashboard')active @endif"><a href="{{ URL::to('admin/dashboard') }}">New Doses <span class="badge label-primary">{{ count($newRequests) }}</span></a></li>
				<li class="@if($active == 'in_progress')active @endif"><a href="{{ URL::to('admin/in_progress') }}">Dose In Progress</a></li>
				<li class="@if($active == 'completed')active @endif"><a href="{{ URL::to('admin/completed') }}">Completed Dose</a></li>
				<li class="@if($active == 'inventory')active @endif"><a href="{{ URL::to('admin/inventory') }}">Inventory</a></li>
				<li class="@if($active == 'user_mangement')active @endif">
					<a aria-expanded="true" href="#">User Management<i class="fa arrow fa-fw"></i></a>
					<ul aria-expanded="false" class="collapse" style="height: 0px;">
                        <li><a href="#">Dashboard.1</a></li>
                        <li><a href="#">Dashboard.1</a></li>
                    </ul>
				</li>
				<li class="@if($active == 'consumer')active @endif"><a href="{{ URL::to('admin/consumer') }}">Consumer data</a></li>
			</ul>
		</nav>
	</aside>
</div>
<!-- # Sidebar-wrapper -->