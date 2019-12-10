<div class="page-inner">
    <div class="page-title">
        <h3>Admin</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}">Home</a></li>
                <li class="active">
                    @can('isAdmin')
                    Admin
                    @elsecan('isTestAdmin')
                    Test Admin
                    @endcan
                </li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
    </div>
</div><!-- Page Inner -->