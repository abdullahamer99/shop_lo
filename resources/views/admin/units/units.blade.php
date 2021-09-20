@extends('layouts.app')

@section('content')
    <div class="container">
        <Div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Units</div>
                    <div class="card-body">

                            <form action="{{ route('units') }}"  method="post" class="row">
                                @csrf

                                <div class="form-group col-md-6">
                                    <label for="unit_name" >Unit Name</label>
                                    <input type="text" class="form-control" id="unit_name" name="unit_name" placeholder="Unit Name" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="unit_code" >Unit Code</label>
                                    <input type="text" class="form-control" id="unit_code" name="unit_code" placeholder="Unit Code" required>
                                </div>

                                <div class="form-group col-md-6">
                                  <button type="submit" class="btn btn-primary">Save New Unit</button>
                                </div>

                            </form>






                        <div class="row">
                            @foreach($units as $unit)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                        <span>
                                            <form action="{{route('units')}}" method="post" style="position: relative" >
                                                @csrf
                                                <input type="hidden" name="_method" value="delete"/>
                                                <input type="hidden" name="unit_id" value="{{$unit->id}}" />
                                                <button type="submit" class="delete-btn"> <i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </span>
                                        <p>{{$unit->unit_code}},{{$unit->unit_name}}</p>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{$units->links()}}
                    </div>
                </div>
            </div>
        </Div>
    </div>





        @endsection
