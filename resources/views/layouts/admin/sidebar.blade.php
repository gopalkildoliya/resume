<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Gopal Kildoliya</p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href=""><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li><a href="{{route('admin.project.index')}}"><i class="fa fa-link"></i> <span>Projects</span></a></li>
            <li><a href="{{route('admin.position.index')}}"><i class="fa fa-link"></i> <span>Work Experience</span></a></li>
            <li><a href="{{route('admin.education.index')}}"><i class="fa fa-link"></i> <span>Education</span></a></li>
            <li><a href="{{route('admin.certification.index')}}"><i class="fa fa-link"></i> <span>Certifications</span></a></li>
            <li><a href="{{route('admin.skill.index')}}"><i class="fa fa-link"></i> <span>Skills</span></a></li>
            <li><a href="{{route('admin.award.index')}}"><i class="fa fa-link"></i> <span>Awards</span></a></li>
            <li><a href="{{route('admin.volunteer.index')}}"><i class="fa fa-link"></i> <span>Volunteer Experience</span></a></li>
            <li><a href="{{route('admin.language.index')}}"><i class="fa fa-link"></i> <span>Languages</span></a></li>
            <li><a href="{{route('admin.personal-detail.index')}}"><i class="fa fa-link"></i> <span>Personal Details</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Other</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.language.index')}}">Languages</a></li>
                    <li><a href="#">My settings</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
