
<div class="title-div">
    <div class="container">
        <div class="row content-header">
            <div class="col-md-8 title">
                @yield('heading')
            </div>
            <div class="col-md-4 text-right">
                <ol class="content-breadcrumb">
                    @section('breadcrumb')
                        <li><a href="{{ url('/')}}" data-push="true"><i class="fa fa-dashboard"></i> Home </a></li>
                    @show
                </ol>
            </div>
        </div>
    </div>
</div><!-- /.title-div -->

@yield('content')