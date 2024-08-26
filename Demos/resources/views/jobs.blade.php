<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    
    <ul>

    </ul>

    @foreach ($jobs as $job)
        <li>
            <a href="/Demos/public/jobs/{{$job['id']}}">
                <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
            </a>
        </li>
    @endforeach
</x-layout>