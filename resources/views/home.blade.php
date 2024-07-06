<x-app-layout>
    <p class="p-12 font-bold text-red-500">
        This should be the landing page
    </p>

    @foreach ($courses as $course)
        <a href="/course/{{ $course->slug }}" class="p-12 font-bold text-red-500">
            {{ $course->title }}
        </a>
    @endforeach
</x-app-layout>
