

<!-- resources/views/components/taskcard.blade.php -->
<div class="card" style="width: 18rem;">
    <!-- <img src="{{ $image ?? asset('path/to/default-image.jpg') }}" class="card-img-top" alt="{{ $title ?? 'Default Title' }}"> -->
    <div class="card-body">
        <h5 class="card-title">{{ $title ?? 'Default Title' }}</h5>
        <p class="card-text">{{ $description ?? 'Default description' }}</p>
        <p class="card-text"><small class="text-muted">Deadline: {{ $deadline ?? now()->addDays(10)->format('Y-m-d H:i:s') }}</small></p>
    </div>
</div>
