@extends('app')

@section('content')

    @include('partials.widgets.ourstaff')

    <div class="row row-fluid clearfix mbf">
        <div class="span8">
            @include('partials.widgets.latestnews')
        </div><!-- span8 news -->

        <div class="span4">
            {{--@include('partials.widgets.incomingevents')--}}

            @include('partials.widgets.featuredvideos')

{{--            @include('partials.widgets.populartracks')--}}

        </div><!-- span4 sidebar -->
    </div><!-- row clearfix -->

@endsection

@section('scripts')
@endsection