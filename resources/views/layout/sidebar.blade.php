<div class="sidebar" data-color="blue" data-image="{{ asset('assets') }}/img/full-screen-image-3.jpg">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            Ct
        </a>

        <a href="#" class="simple-text logo-normal">
            BKCAD
        </a>
    </div>

    <div class="sidebar-wrapper">

        <ul class="nav">
            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="charts.html">
                    <i class="pe-7s-graph1"></i>
                    <p>Quản gáo vụ </p>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="pe-7s-date"></i>
                    <p>quản lý học sinh</p>
                </a>
            </li>
        </ul>
    </div>
</div>
