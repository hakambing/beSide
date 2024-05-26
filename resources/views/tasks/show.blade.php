<x-app-layout>
    <div class="container">
        <div class="mt-4 row">
            <div class="col-6">
                <div class="row">
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
            <div class="col-6">
                <div class="form-group mb-4">
                    <label for="exampleFormControlTextarea1">Type in an introduction message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <a href="/dashboard/create-task" class="btn btn-primary btn-lg align-self-end float-md-end w-100">Apply
                    to help out!</a>
            </div>

        </div>

    </div>
</x-app-layout>
