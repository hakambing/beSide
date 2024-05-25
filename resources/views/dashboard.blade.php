<div class="container">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tasks') }}
            </h2>
        </x-slot>

        <div class="card" style="width: 18rem;">
            <img src="public\images\beSide-logo.png" class="card-img-top" alt="">
            <a href="#">
                <div class="card-body">
                    <h5 class="card-title">Move furniture</h5>
                    <p class="card-text">I need help moving my sofa</p>
                    <p class="card-text"><small class="text-muted">Deadline: 05/05/2024</small></p>
                </div>
            </a>
        </div>
    </x-app-layout>
</div>