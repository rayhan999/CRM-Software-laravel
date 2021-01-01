@extends('marketpartial/marketheader') 
	@section('sidebar')
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="/assets/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="/assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="/markethome" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="{{route('marketuser.create')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Tables</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('markethome.show','leads')}}">Leads</a></li>
							<li><a href="{{route('markethome.show','customer')}}">Customer</a></li>
							<li><a href="{{route('markethome.show','camp')}}">Campaigns</a></li>
						</ul>
					</li>
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
							<li><a href="/chart/bars">BARS</a></li>
							<li><a href="/chart/lines">PIECHARTS</a></li>
						</ul>
					</li>
						<a href="chat.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	@endsection