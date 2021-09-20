@extends('layouts.app')

@section('content')
    <div class="container">
        <Div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Reviews</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($reviews as $review)
                                <div class="col-md-3">
                                    <div class="alert alert-primary" role="alert">
                                        <p>{{$review->customer->formattedName()}}</p>

                                         <P>Stars:
{{--                                         for(i =o;i <$review->stars;i++)--}}
                                            <i class="fas fa-star "></i>
{{--                                             endfor()--}}

                                         </P>
                                         <P>Review:{{$review->review}}</P>
                                        <p>Date:{{$review->humanFormattedDate() }}</p>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{$reviews->links()}}
                    </div>
                </div>
            </div>
        </Div>
    </div>
@endsection

