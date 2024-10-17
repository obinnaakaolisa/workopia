<x-layout>    
    <x-slot name="title">See Available Jobs</x-slot>    
    <h1>{{$title}}</h1>    
    <ul>
        @forelse ($jobs as $job)
            <li>{{$job}}</li>
        @empty
            <li>No jobs Available</li>        
        @endforelse
    </ul>
</x-layout>