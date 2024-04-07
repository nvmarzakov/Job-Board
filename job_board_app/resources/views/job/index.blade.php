<x-layout>
    <div class="row d-flex justify-content-center">
        <div class="col-10">
        @foreach($jobs as $job)
            <x-card class="mb-4">
                {{$job->title}}
            </x-card>
        @endforeach
        </div>
 
    </div>

</x-layout>