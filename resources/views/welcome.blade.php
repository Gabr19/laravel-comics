@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <div class="img">
                            <img src="$comic['thumb']" alt="">

                        </div>
                        {{$comic['title']}}
                    </div>
                    
                </div>
            @endforeach
            
        </div>
    </div>
@endsection