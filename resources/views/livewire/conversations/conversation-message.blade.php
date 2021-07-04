<div class="media w-50 mb-3"><img src="https://img.icons8.com/ios-glyphs/60/000000/user-male-circle.png" alt="user"
    width="50" class="rounded-circle">
    <div class="media-body ml-3">
        <div class="bg-light rounded py-2 px-3 mb-2">
            <p class="text-small mb-0 text-muted">{{ $message->body }}</p>
        </div>
        <p class="small text-muted"><small>{{ $message->user->name }} | {{ $message->created_at->diffForHumans() }}</small></p>
    </div>
</div>
