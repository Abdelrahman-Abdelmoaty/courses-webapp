<x-app-layout>
    <p class="text-sm text-red-500 font-bold py-4">NOTE: This should be the landing page of the application.</p>
    @auth
    <div class="container py-16 flex flex-col items-center">
        <h1 class="text-3xl font-bold mb-12">All Courses</h1>

        <ul class="flex flex-col gap-6">
            @foreach($courses as $course)
            <li>
                <a href="/course/{{ $course->id }}"
                    class="hover:opacity-85 font-semibold transition rounded-lg text-xl px-5 py-2.5 bg-gray-800">

                    {{ $loop->iteration }}. {{ $course->title}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    @else
    <div class="container py-16 flex flex-col items-center">
        <h1 class="text-3xl font-bold">Welcome to the course platform</h1>
        <p class="text-lg text-text/80 text-center mb-12">Please login or register to access the courses.</p>

        <div class="flex gap-5">
            <a href="/login"
                class="hover:opacity-85 font-semibold transition rounded-lg text-xl px-5 py-2.5 bg-gray-800">
                Login
            </a>
            <a href="/register"
                class="hover:opacity-85 font-semibold transition rounded-lg text-xl px-5 py-2.5 bg-gray-800">
                Register
            </a>
        </div>
    </div>
    @endauth
</x-app-layout>