@extends($activeTemplate . 'layouts.master')
@section('content')
    <section class="pt-100 pb-100">
        <div class="container">
            <div class="notice mb-3"></div>
            <div class="row gy-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-widget">
                        <div class="d-widget__icon">
                            <i class="las la-globe "></i>
                            <a class="view-all" href="{{ route('user.tour.log') }}">@lang('View All')</a>
                        </div>
                        <div class="d-widget__content">
                            <h3 class="d-widget__number ">{{ $widget['total_tours'] }}</h3>
                            <p class="caption ">@lang('Total Tours')</p>
                        </div>
                    </div><!-- d-widget end -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-widget">
                        <div class="d-widget__icon">
                            <i class="lab la-telegram-plane "></i>
                            <a class="view-all" href="{{ route('user.tour.log') }}">@lang('View All')</a>
                        </div>
                        <div class="d-widget__content">
                            <h3 class="d-widget__number ">{{ $widget['upcoming_tours'] }}</h3>
                            <p class="caption ">@lang('Upcoming Tours')</p>
                        </div>
                    </div><!-- d-widget end -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-widget">
                        <div class="d-widget__icon">
                            <i class="las la-calendar "></i>
                            <a class="view-all" href="{{ route('user.seminar.log') }}">@lang('View All')</a>
                        </div>
                        <div class="d-widget__content">
                            <h3 class="d-widget__number ">{{ $widget['total_seminars'] }}</h3>
                            <p class="caption ">@lang('Total Seminars')</p>
                        </div>
                    </div><!-- d-widget end -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-widget">
                        <div class="d-widget__icon">
                            <i class="las la-calendar-day"></i>
                            <a class="view-all" href="{{ route('user.seminar.log') }}">@lang('View All')</a>
                        </div>
                        <div class="d-widget__content">
                            <h3 class="d-widget__number">{{ $widget['upcoming_seminars'] }}</h3>
                            <p class="caption ">@lang('Upcoming Seminars')</p>
                        </div>
                    </div><!-- d-widget end -->
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12">
                    @include($activeTemplate . 'partials.payment')
                </div>
            </div>
        </div>
    </section>
@endsection
