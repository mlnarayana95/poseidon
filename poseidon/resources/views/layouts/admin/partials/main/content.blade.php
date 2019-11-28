<div class="content-wrapper" style="min-height: 1126px;">
    <section class="content-header">
        <h1>
            @yield('heading')
        </h1>
        <ol class="breadcrumb">
            @section('breadcrumb')
                <li><a href="{{ url('/')}}" data-push="true"><i class="fa fa-dashboard"></i> Home </a></li>
            @show
        </ol>
    </section>
    <section class="content clearfix">
        <div class="row">

            <div class="col-md-12">
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            </div>

            @yield('content')
        </div>
    </section>
</div>
