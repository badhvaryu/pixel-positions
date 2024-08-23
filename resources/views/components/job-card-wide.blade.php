@props(['job'])

<x-panel class="flex gap-x-6">
    <div class="flex box">
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 text-xl transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>

    </div>
</x-panel>
