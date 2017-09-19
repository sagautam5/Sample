<nav class="navbar navbar-toggleable-md site-header">
    <?php 
        $current = URL::current();
        $base = URL::to('/');
    ?>
    <ul class="nav navbar-nav navbar-left">
        @if($current == $base.'/home')
            <li class="nav-item active">
        @else
            <li class="nav-item">
        @endif
            <a class="nav-link nav-text-item" href="{{URL::to('/home')}}">
                HOME
            </a>
        </li>
        @if($current == $base.'/project')
            <li class="nav-item active">
        @else
            <li class="nav-item">
        @endif
            <a class="nav-link nav-text-item" href="{{URL::to('/project')}}">
                PROJECTS
            </a>
        </li>
        @if($current == $base.'/contact')
            <li class="nav-item active">
        @else
            <li class="nav-item">
        @endif
            <a class="nav-link nav-text-item" href="{{URL::to('/contact')}}">
                CONTACT
            </a>
        </li>
        @if($current == $base.'/aboutme')
        <li class="nav-item active">
        @else
        <li class="nav-item">
        @endif
            <a class="nav-link nav-text-item" href="{{URL::to('/aboutme')}}">
                ABOUT ME
            </a>
        </li>
    </ul>
</nav>