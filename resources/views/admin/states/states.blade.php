@extends('layouts.app')

@section('content')
    <div class="container">
        <Div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">States</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($states as $state)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                        <H5>{{$state->name}}</H5>
                                       <p>Country:{{$state->country->name}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{$states->links()}}
                    </div>
                </div>
            </div>
        </Div>
    </div>
@endsection

