<x-app-layout>
    <a href="/login" class="block p-4 font-bold text-red-500 b"> Login </a>

    <p class="p-12 font-bold text-red-500">This should be the landing page</p>

    <div class="flex flex-col gap-2">
        @foreach ($course->chapters as $chapter)
        <span class="font-bold">Chapter: {{ $chapter->name }}</span>
        @foreach ($chapter->episodes as $episode)
        <a
            href="/episode/{{ $episode->uuid }}"
            class="p-2 font-bold text-red-500"
        >
            {{ $episode->name }}
        </a>
        @endforeach @endforeach
    </div>
</x-app-layout>
