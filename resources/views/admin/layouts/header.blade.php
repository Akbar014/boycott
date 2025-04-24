<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div>
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">{{ Auth::user()->name }}<span class="hidden-md-down"> </span></span>

                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li>
                            <!--  -->

                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon ion-power"></i> Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- dropdown-menu -->
            </div>
            <!-- dropdown -->
        </nav>
    </div>
    <!-- sl-header-right -->
</div>
<!-- sl-header -->

<!-- Include Bootstrap and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Ensure the collapse functionality works
    $(document).ready(function () {
        $('#btnLeftMenu, #btnLeftMenuMobile').on('click', function (e) {
            e.preventDefault();
            // Add your collapse logic here if needed
            console.log('Menu toggle clicked');
        });
    });
</script>