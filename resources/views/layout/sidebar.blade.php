<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="../backend/index.html" class="header-logo">
            <img src="{{ asset('images/logoo.png') }}" alt="logo">
            <h3 class="logo-title light-logo "> GoCollab</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="">
                    <a href="{{ route('home') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="ml-4">Home Page</span>
                    </a>
                </li>

            </ul>
        </nav>
        <div id="sidebar-bottom" class="position-relative sidebar-bottom">
            <div class="card border-none mb-0 shadow-none">
                <div class="card-body p-0">
                    <div class="sidebarbottom-content">
                        <h5 class="mb-3">Task Performed</h5>
                        <div id="circle-progress-6" class="sidebar-circle circle-progress circle-progress-primary mb-4"
                            data-min-value="0" data-max-value="100" data-value="55" data-type="percent"></div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input"
                                checked="">
                            <label class="custom-control-label" for="customRadio6">Performed task</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio7">Incomplete Task</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 pb-2"></div>
    </div>
</div>
