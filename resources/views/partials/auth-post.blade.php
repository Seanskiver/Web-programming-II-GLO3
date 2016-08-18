<div class="card-panel grey lighten-5 z-depth-1">
    <div class="row">
        <p><b>{{ $post->user->name }}</b></p>
        <div class="col s10">
            <span class="black-text">
                {{ $post->body }} 
            </span>
        </div>
    </div>
    <div class="row">
            @if(Auth::user()->name == $user->name)
            
            <a href="/post/{{ $post->id }}" class="btn" id="triggerEdit">Edit</a>
            
            <form action="/post/{{ $post->id }}" method="post" style="display: inline;">
                <input type="hidden" name="_method" value="delete"/>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="submit" class="btn red accent-4" value="delete" />
            </form>
            
            
            
            @else
                <p>You can delete or edit this post if you log in as this user</p>
            @endif
        
    </div>
</div>

