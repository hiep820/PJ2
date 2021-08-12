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
                <a href="calendar.html">
                    <i class="pe-7s-user-female"></i>
                    <p>Quản lý giáo vụ</p>
                </a>
            </li>
            <li>
                <a href="{{route('course.index')}}">
                    <i class="pe-7s-users"></i>
                    <p>quản lý Khóa học</p>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="pe-7s-like"></i>
                    <p>Quản lý lớp học</p>
                </a>
            </li>
            <li>
                <a href="{{ route('student.index')}}">
                    <i class="pe-7s-id"></i>
                    <p>quản lý học sinh</p>
                </a>
            </li>
            <li>
                <a href="{{ route('subjects.index')}}">
                    <i class="pe-7s-notebook"></i>
                    <p>Quản lý môn học</p>
                </a>
            </li>
            <li>
                <a href="{{route('book.index')}}">
                    <i class="pe-7s-bookmarks"></i>
                    <p>quản lý sách</p>
                </a>
            </li>
            <li>
                <a href="{{ route('invoice.index')}}">
                    <i class="pe-7s-diskette"></i>
                    <p>quản lý phiếu thu</p>
                </a>
            </li>
        </ul>
    </div>
</div>
