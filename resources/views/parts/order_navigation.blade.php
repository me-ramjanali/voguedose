<!-- Navigation -->
<div id="navigation-container" class="sticky">
	<nav class="navigation top-bar" data-topbar data-options="scrolltop:false; back_text:&larr;" role="navigation">
		<ul class="title-area">
			<!-- Logo -->
			<li class="name">
				<a href="{{ URL::to('/') }}"><img class="logo" src="{{ URL::asset('img/logo.png') }}" alt="aeris" ></a>
			</li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>
		<!-- Menu Section -->
		<section class="top-bar-section">
			<ul class="right">
				<li class="has-form hide-for-medium-only"><a href="{{ URL::to('logout') }}" class="button brand round">SIGN OUT</a></li>
			</ul>
		</section>
		<!-- End Menu Section -->
	</nav>
</div>
<!--/ End Navigation -->