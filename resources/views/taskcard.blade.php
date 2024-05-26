<x-app-layout>
    <div class="container">
        <div class="mt-4 row">
            <div class="col-6 align-self-start">
                <h1 class="">
                    Tasks
                </h1>
            </div>
            <div class="col-6">
                <a href="/dashboard/create-task" class="btn btn-primary btn-lg align-self-end float-md-end">Request for
                    Help</a>
            </div>
            <div class="col-6 align-self-start">
                <span class="fs-3 text-muted lh-sm">
                    @if (count($tasks) == 0)
                        There are <b class="color-primary">no</b> tasks near you. You can
                        get the ball rolling!
                    @elseif (count($tasks) == 1)
                        There is <b class="color-primary">1</b> task near you.
                    @else
                        There are <b class="color-primary">{{ count($tasks) }}</b> tasks near you.
                    @endif
                </span>
            </div>
        </div>

        <div class="row gx-4 gy-4 mt-4"> <!-- Bootstrap classes to add horizontal and vertical gaps -->
            @foreach ($tasks as $task)
                <div class="col-md-4 col-sm-6 mb-4"> <!-- Bootstrap column with margin-bottom -->
                    <div class="card">
                    <a href="{{ route('taskcard.show', ['id' => $task->id]) }}" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <h5 class="card-title">{{ $task->title }}</h5>
                            <p class="card-text">{{ $task->description }}</p>
                                    <p class="card-text">
                            @forelse ($task->categories as $category)
                                <span class="badge bg-secondary">{{ $category->name }}</span>
                            @empty
                                <span>No categories</span>
                            @endforelse
                        </p>
                        <p class="card-text"><small class="text-muted">Deadline:
                            {{ optional($task->deadline)->format('Y-m-d H:i:s') }}</small></p>
                        </div>
                    </a>
                </div>
</div>
            @endforeach
        </div>
        {{ $tasks->links() }} <!-- Pagination links -->
    </div>


</x-app-layout>

<!-- <style>

</style>
