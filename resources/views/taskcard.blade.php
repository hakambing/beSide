

<!-- resources/views/components/taskcard.blade.php -->

<div class="container">
    @foreach ($tasks as $task)
        <div class="card" style="width: 18rem; margin-bottom: 20px;">
            <div class="card-body">
                <h5 class="card-title">{{ $task->title }}</h5>
                <p class="card-text">{{ $task->description }}</p>
                <p class="card-text"><small class="text-muted">Deadline: {{ optional($task->deadline)->format('Y-m-d H:i:s') }}</small></p>
            </div>
        </div>
    @endforeach
</div>