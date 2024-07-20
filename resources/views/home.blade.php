<x-app-layout>
    <p class="p-12 font-bold text-red-500">
        This should be the landing page
    </p>

    <div class="flex flex-col gap-2">
        @foreach ($courses as $course)
            <a href="/course/{{ $course->id }}" class="p-2 font-bold text-red-500">
                {{ $course->name }}
            </a>
        @endforeach
    </div>
</x-app-layout>
