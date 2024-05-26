<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task Details') }}
        </h2>
    </x-slot>



    <div class="row g-0 text-center">
        <div class="col-sm-6 col-md-8">
            <div class="card-body">
                <h2 class="h2">{{ $task->title }}</h2>
                <p class="card-text">{{ $task->description }}</p>
                <p class="card-text"><small class="text-muted">Deadline:
                        {{ optional($task->deadline)->format('Y-m-d') }}</small></p>
            </div>
        </div>
        <div class="col-6 col-md-4">

        </div>
    </div>

</x-app-layout>