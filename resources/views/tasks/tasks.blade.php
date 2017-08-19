<ul class="media-list">
@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($task->content)) !!}</p>
                <p>{!! nl2br(e($task->status)) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tasks->render() !!}
