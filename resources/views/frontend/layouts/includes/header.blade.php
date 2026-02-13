<header>
    <section class="header_top">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="header_top_item float-start">
                    <a href="{{ route('home') }}"><img src="{{ asset('frontend') }}/assets/images/LOGO.png" alt=""
                            class="float-start img-fluid" width="250px"></a>
                </div>
                <div class="header_top_icon float-end">
                    @if (Auth::check() && Auth::user()->role == 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="float-end"><i class="fa fa-user pe-2"></i>
                            </a>
                    @elseif(Auth::check() && Auth::user()->role == 'user')
                        <a href="{{ route('user.dashboard') }}" class="float-end"><i class="fa fa-user pe-2"></i>
                            </a>
                    @else
                        <a href="{{ route('login') }}" class="float-end"><i class="fa fa-user pe-2"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </section>
</header>
