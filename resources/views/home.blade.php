@extends('layouts.app')

@section('middle')
    <h2>Safety Twitter</h2>
    <p>Login to post a safety tweet. Or just lurke around like a creep</p>
    @if (Auth::check())
        <div class="row">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row">
                    <h5>Make a safety post</h5>
                </div>
                <div class="row">
                    <form action="/post" method="post">
                        <div class="input-field col s12 m12 l12">
                            <textarea placeholder="Put your post body here" id="body" name="body" class="materialize-textarea"></textarea>
                            <label for="body"></label>
                        </div>
                        
                         <input type="hidden" name="_token" value="{{csrf_token()}}" />
                         <input type="hidden" name="user_id" value="{{ Auth::user()->id}}"/>
                        <input class="amber darken-4 btn" type="submit" value="Post"/>
                    </form>
                </div>
            </div>
        </div>
    @endif
    
    @foreach($posts as $post)
        @include('partials.post', array('post' => $post))
    @endforeach

@endsection


@section('right')


  

@endsection

