<!-- Navigation -->
<div id="navigation-container" class="sticky">
    <nav class="navigation top-bar" data-topbar data-options="scrolltop:false; back_text:&larr;" role="navigation">
        <ul class="title-area">
            <!-- Logo -->
            <li class="name">
                <a href="index.php"><img class="logo" src="{{ URL::asset('img/logo.png') }}" alt="aeris" ></a>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <!-- Menu Section -->
        <section class="top-bar-section">
            <ul class="right">
                <li><a href="#home"  data-scroll>Home</a></li>
                <li><a href="#about" data-scroll>WHO WE ARE</a></li>
                <li><a href="#how" data-scroll>HOW IT WORKS</a></li>
                <li><a href="#chooseUS" data-scroll>WHY CHOOSE US</a></li>
                <li><a href="#team" data-scroll>OUR STYLISTS</a></li>
                @if(\Auth::guard()->check() == false)
                    <li><a href="#contact" data-scroll>REGISTRATION</a></li>
                    <li class="has-dropdown hide-for-medium-only">
                        <a href="#" class="button brand round">Get Started</a>
                        <ul class="dropdown">
                            <li>
                                <a href="#" data-reveal-id="loginModal">Sign In</a>
                            </li>
                            <li>
                                <a href="#contact"  data-scroll>Sign Up</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ URL::to('order') }}" data-scroll>Create Style Profile</a></li>
                    <li class="has-form hide-for-medium-only"><a href="{{ URL::to('logout') }}"  class="button brand round">SIGN OUT</a></li>
                @endif
            </ul>
        </section>
        <!-- End Menu Section -->
    </nav>
</div>