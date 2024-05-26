<x-app-layout>
    <div class="container">
        <div class="mt-4 row">
            <div class="col-12 align-self-start mb-4">
                <span class="fs-3 text-muted lh-sm">
                    Posted by <b class="color-primary">{{ $task->user->name }}</b>
                </span>
            </div>
            <br>
            <div class="col-12 align-self-start">
                <h1 class="">
                    {{ $task->title }}
                </h1>
            </div>
            <div class="col-12 align-self-start">
                <span class="fs-3 text-muted lh-sm">
                    {{ $task->description }}
                </span>
            </div>
            <div class="col-12 align-self-start">
                @forelse ($task->categories as $category)
                    <span class="badge bg-secondary">{{ $category->name }}</span>
                @empty
                    <span>No categories</span>
                @endforelse
            </div>
            <p class="card-text mt-2"><small class="text-muted">Deadline:
                    {{ optional($task->deadline)->format('Y-m-d') }}</small></p>
        </div>
    </div>
</x-app-layout>
