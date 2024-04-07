<x-layout>
    <div class="row d-flex justify-content-center">
        <div class="col-10">
        @foreach($jobs as $job)
            <x-card class="mb-4">
                <div class="d-flex justify-content-between mb-2">
                    <h5 class="fw-bold">{{$job->title}}</h4>
                    <div>€ {{ number_format($job->salary)}}</div>
                </div>
                <div class="d-flex justify-content-between align-items-align-items-center mb-4">
                    <div class="d-flex gap-4">
                        <div>Company name</div>
                        <div>{{ $job->location}}</div>
                    </div>
                    <div class="d-flex gap-2 fs-6">
                        <div class="rounded border px-2 py-1">{{ Str::ucfirst($job->experience)}}</div>
                        <div class="rounded border px-2 py-1">{{$job->category}}</div>
                    </div>
                    
                </div>
                <p class="fs-6">{!! nl2br(e($job->description))!!}</p>
            </x-card>
        @endforeach
        </div>
 
    </div>

</x-layout>