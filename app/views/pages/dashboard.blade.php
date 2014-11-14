@section( 'head_wrapper' )
    <html lang="en">
@stop

@section( 'navigator' )
    @include( 'includes.navigator' )
@stop

@section('content')
    <div class="main-container container-fluid">
        <div class="page-container">
            @include( 'includes.sidebar' )

            <div class="page-content">
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
