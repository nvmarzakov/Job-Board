<x-layout>
    @foreach ($jobs as $job)
        <x-job-card class="mb-4" :job="$job">
            <x-link-button href="{{ route('jobs.show', $job) }}">
                Show
            </x-link-button>
        </x-job-card>
    @endforeach
</x-layout>