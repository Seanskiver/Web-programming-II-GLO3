
<div class="card-panel grey lighten-5 z-depth-1">
    <div class="row">
        <p><b><a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a></b></p>
        <div class="col s10">
            <span class="black-text">
                {{ $post->body }} 
            </span>
        </div>
    </div>
</div>