<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('home')}}">
            <img src="{{asset("assets")}}/admin/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="{{asset("assets")}}/admin/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <a href="/admin" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-house"></span><span class="mtext">Home</span>
                </a>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-wall-clock "></span><span class="mtext " >Appointment</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('admin.appoiment.index')}}">New Appointment</a></li>
                        <li><a href="">Accepted Appointment</a></li>
                    </ul>
                </li>
                <a href="/admin/category" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-calendar1"></span><span class="mtext">Categories</span>
                </a>
                <a href="/admin/service" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-house-11"></span><span class="mtext">Services</span>
                </a>
                <a href="{{route('admin.comment.index')}}" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-chat"></span><span class="mtext">Comments</span>
                </a>
                <a href="{{route('admin.faq.index')}}" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-help"></span><span class="mtext">FAQ</span>
                </a>
                <a href="{{route('admin.message.index')}}" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-message-1"></span><span class="mtext">Massages</span>
                </a>
                <a href="/admin/user" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-user-13"></span><span class="mtext">User</span>
                </a>
                <a href="/admin/social" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-chat-3"></span><span class="mtext">Social</span>
                </a>

                    <div class="dropdown-divider"></div>
                </li>
                <a href="{{route('admin.setting')}}" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-settings"></span>
                    <span class="mtext">Settings</span>
                </a>

<div class="mobile-menu-overlay"></div>
