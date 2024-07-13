<x-layout>
    @foreach ($jobs as $job)
        <article class="card">
            <h1>{{ $job->title }}</h        1>
            <p>{{ $job->description }}</p>
            <p>{{ $job->location }}</p>
            <p>{{ $job->salary }}</p>
            <p>{{ $job->company }}</p>
            <p>{{ $job->created_at->diffForHumans() }}</p>
        </article>
    @endforeach
</x-layout>