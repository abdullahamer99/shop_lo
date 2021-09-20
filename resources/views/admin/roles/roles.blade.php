@extends('layouts.app')

@section('content')
    <div class="container">
        <Div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Roles</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($roles as $role)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                      <p>{{$role->role}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
{{--                        {{$roles->links()}}--}}
                    </div>
                </div>
            </div>
        </Div>
    </div>
@endsection

