<div class="navbar">
	<div class="navbar-inner">
		<a id="logo" href="/">Single Malt</a>
		<ul class="nav">
			<li><a href="home" @if( $page == 'home' ) class="active" @endif >Home</a></li>
			<li><a href="about" @if( $page == 'about' ) class="active" @endif >About</a></li>
			<li><a href="tools" @if( $page == 'tools' ) class="active" @endif >Tools</a></li>
			<li><a href="market" @if( $page == 'market' ) class="active" @endif >Market</a></li>
		</ul>
	</div>
</div>