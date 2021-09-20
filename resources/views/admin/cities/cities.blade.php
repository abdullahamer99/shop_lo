@extends('layouts.app')

@section('content')
    <div class="container">
        <Div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">City</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($cities as $city)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                        <H5>{{$city->name}}</H5>
                                        <p>State:{{$city->state->name}}</p>
{{--                                        <p>Country:{{$city->country->id}}</p>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{$cities->links()}}
                    </div>
                </div>
            </div>
        </Div>
    </div>
@endsection

