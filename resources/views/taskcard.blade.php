<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

<div class="container">
    <div class="row gx-4 gy-4"> <!-- Bootstrap classes to add horizontal and vertical gaps -->
        @foreach ($tasks as $task)
            <div class="col-md-4 col-sm-6 mb-4"> <!-- Bootstrap column with margin-bottom -->
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $task->title }}</h5>
                        <p class="card-text">{{ $task->description }}</p>
                        <p class="card-text"><small class="text-muted">Deadline: {{ optional($task->deadline)->format('Y-m-d H:i:s') }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</x-app-layout>
