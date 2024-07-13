<x-card class="mb-4">
    <div class="mb-4 d-flex justify-content-between">
        <h2 class="">{{ $job->title }}</h2>
        <div class="text-black-50">
            €{{ number_format($job->salary, 2) }}
        </div>
    </div>

    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <div class="me-4">
               Company Name 
            </div>
            <div>
                {{ $job->location }}
            </div>
        </div>
        <div class="d-flex">
            <x-tag>
                {{ Str::ucfirst($job->experience) }}
            </x-tag>
            <x-tag>
                {{ $job->category }}
            </x-tag>
                
            
        </div>
    </div>
    <p class="mb-4">
        {{ nl2br($job->description) }}
    </p>

    {{ $slot }}
</x-card>