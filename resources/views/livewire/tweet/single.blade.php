<div>
    <div class="media" :key='$tweet->id'>
        <h5 class="">{{ $tweet->user->name }}</h5>
        <div class="media-body">
            <img src="{{ $tweet->user->gravatar() }}" class="rounded" alt="">
            <small class="text-gray-500">tweeted {{ $tweet->created_at->diffForHumans() }}</small>
            <p>
                {{ $tweet->body }}
            </p>
        </div>
    </div>
</div>