<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('accountingSellsHome.index') }}">
            <img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo">
            <img src="{{ asset('vendors/images/deskapp-logo-white.svg') }}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('accountingSellsHome.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-calendar1"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-analytics1"></span><span class="mtext">Sales</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('accountingSellsHome.product') }}">Product</a></li>
                        <li><a href="{{ route('accountingSellsHome.customer') }}">Customer</a></li>
                        <!-- <li><a href="/accountingSellsHome/report">Report</a></li> -->
                        <!-- <li><a href="/accountingSellsHome/revenue">Revenue</a> |</li> -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Accounting</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('accountingSellsHome.bankInfo') }}">Bank info update</a></li>
                        <li><a href="{{ route('accountingSellsHome.salary') }}">Salary</a></li>
                        <!-- <li><a href="/accountingSellsHome/report">Report</a> |</li> -->
                    </ul>
                </li>
                <li>
                    <a href="{{ route('accountingSellsHome.calendar') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="chat.html" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="/accountingSellsHome/revenue" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-invoice"></span><span class="mtext">Revenue</span>
                    </a>
                </li> -->
                <li>
                    <a href="{{ route('accountingSellsHome.report') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-invoice"></span><span class="mtext">Reports</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>