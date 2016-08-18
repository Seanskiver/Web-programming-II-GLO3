@extends('layouts.app')

@section('middle')
        <div class="row">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row">
                    <h5>Edit this safety post</h5>
                </div>
                <div class="row">
                    <form action="/post/{{ $post->id }}" method="post">
                        <div class="input-field col s12 m12 l12">
                            <textarea placeholder="Put your post body here" id="body" name="body" class="materialize-textarea">{{ $post->body }}</textarea>
                            <label for="body"></label>
                        </div>
                        
                         <input type="hidden" name="_method" value="patch"/>
                         <input type="hidden" name="_token" value="{{csrf_token()}}" />
                         <input type="hidden" name="user_id" value="{{ Auth::user()->id}}"/>
                        <input class="amber darken-4 btn" type="submit" value="Edit Post"/>
                    </form>
                </div>
            </div>
        </div>
@endsection