<x-app-layout>
    <div class="container">
        <div class="mt-4 row">
            <div class="col-12 align-self-start">
                <h1 class="">
                    {{ $task->title }}
                </h1>
            </div>
            <div class="col-12 align-self-start">
                <span class="fs-3 text-muted lh-sm">
                    {{ $task->description }}
                    {{ dd($task) }}
                </span>
            </div>
            <p class="card-text mt-2"><small class="text-muted">Deadline:
                {{ optional($task->deadline)->format('Y-m-d') }}</small></p>
        </div>
    </div>
</x-app-layout>