<x-app-layout>
    <x-slot name="header">
        <div class="container text-center">
            <div class="row">
                <div class="col align-self-start">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Tasks') }}
                    </h2>
                </div>
                <div class="col align-self-end">
                    <a href="/dashboard/create-task" class="btn btn-primary">Request for Help</a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container">
        <div class="row gx-4 gy-4"> <!-- Bootstrap classes to add horizontal and vertical gaps -->
            @foreach ($tasks as $task)
                <div class="col-md-4 col-sm-6 mb-4"> <!-- Bootstrap column with margin-bottom -->
                    <a href="{{ route('taskcard.show', ['id' => $task->id]) }}" class="text-decoration-none text-dark">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $task->title }}</h5>
                                <p class="card-text">{{ $task->description }}</p>
                                <p class="card-text"><small class="text-muted">Deadline:
                                        {{ optional($task->deadline)->format('Y-m-d H:i:s') }}</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
