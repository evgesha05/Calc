@extends('layouts.app')

@section('content')

    @isset($solutions_count)
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12">
                <div class="alert alert-secondary border-dark alert-dismissible fade show" role="alert">
                    @if($solutions_count == 2)
                        Два решения. X1 = {{$x1}}, X2 = {{$x2}}.
                    @elseif($solutions_count == 1)
                        Одно решение. X = {{$x}}.
                    @elseif($solutions_count == 0)
                        Нет решений.
                    @endif
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endisset

    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-12">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="main" role="tabpanel">
                    <div class="card border-dark">
                        <div class="card-body">
                            <form action="{{ route('index') }}" method="post">
                                @csrf
                                @include('partials.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
