<article {{ $attributes->class(['card rounded-3 border-secondary bg-white p-4 shadow-sm']) }}>
    {{ $slot }}
    {{-- <p>{{ $job->description }}</p>
    <p>{{ $job->location }}</p>
    <p>{{ $job->salary }}</p>
    <p>{{ $job->company }}</p>
    <p>{{ $job->created_at->diffForHumans() }}</p> --}}
</article>