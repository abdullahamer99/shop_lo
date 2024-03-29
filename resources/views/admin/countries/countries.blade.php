@extends('layouts.app')

@section('content')
    <div class="container">
        <Div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Countries</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($countries as $country)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                        <H5>{{$country->name}}</H5>
                                        <p>Currency:{{$country->currency}}</p>
                                        <p>Capital:{{$country->capital}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{$countries->links()}}
                    </div>
                </div>
            </div>
        </Div>
    </div>
@endsection

