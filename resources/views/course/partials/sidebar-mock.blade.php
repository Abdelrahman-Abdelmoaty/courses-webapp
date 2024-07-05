@php
    $closeOtherChapters = 0;
    $activeChapter = 1;
    $activeModule = 'video';
    $course = (object) [
        'chapters' => [
            (object) [
                'id' => 1,
                'title' => 'Good Planning',
                'modules' => (object) [
                    'video' => (object) [
                        'id' => 1,
                        'title' => 'Intro Video',
                        'description' => 'Description 1',
                        'subtitles' => [
                            (object) [
                                'id' => 1,
                                'title' => 'Subtitle 1',
                                'content' => 'Subtitle content 1',
                                'isDone' => true,
                            ],
                            (object) [
                                'id' => 2,
                                'title' => 'Subtitle 2',
                                'content' => 'Subtitle content 2',
                                'isDone' => false,
                            ],
                        ],
                    ],
                    'excercise' => (object) [
                        'id' => 2,
                        'title' => 'Excercise',
                    ],
                    'assignment' => (object) [
                        'id' => 3,
                        'title' => 'Assignment',
                    ],
                    'quiz' => (object) [
                        'id' => 3,
                        'title' => 'Quiz',
                    ],
                ],
                'isLocked' => false,
            ],
            (object) [
                'id' => 2,
                'title' => 'Creating a Plan',
                'modules' => (object) [
                    'video' => (object) [
                        'id' => 1,
                        'title' => 'Intro Video',
                        'description' => 'Description 1',
                        'subtitles' => [
                            (object) [
                                'id' => 1,
                                'title' => 'Subtitle 1',
                                'content' => 'Subtitle content 1',
                                'isDone' => true,
                            ],
                            (object) [
                                'id' => 2,
                                'title' => 'Subtitle 2',
                                'content' => 'Subtitle content 2',
                                'isDone' => false,
                            ],
                        ],
                    ],
                    'excercise' => (object) [
                        'id' => 2,
                        'title' => 'Excercise',
                    ],
                    'assignment' => (object) [
                        'id' => 3,
                        'title' => 'Assignment',
                    ],
                    'quiz' => (object) [
                        'id' => 3,
                        'title' => 'Quiz',
                    ],
                ],
                'isLocked' => false,
            ],
            (object) [
                'id' => 3,
                'title' => 'Executing the Plan',
                'modules' => (object) [
                    'video' => (object) [
                        'id' => 1,
                        'title' => 'Intro Video',
                        'description' => 'Description 1',
                        'subtitles' => [
                            (object) [
                                'id' => 1,
                                'title' => 'Subtitle 1',
                                'content' => 'Subtitle content 1',
                                'isDone' => true,
                            ],
                            (object) [
                                'id' => 2,
                                'title' => 'Subtitle 2',
                                'content' => 'Subtitle content 2',
                                'isDone' => false,
                            ],
                        ],
                    ],
                    'excercise' => (object) [
                        'id' => 2,
                        'title' => 'Excercise',
                    ],
                    'assignment' => (object) [
                        'id' => 3,
                        'title' => 'Assignment',
                    ],
                    'quiz' => (object) [
                        'id' => 3,
                        'title' => 'Quiz',
                    ],
                ],
                'isLocked' => true,
            ],
        ],
    ];
@endphp




<div class="lg:col-span-2 flex flex-col gap-4 max-lg:w-full" x-data="{
    activeChap: {{ $activeChapter }},
    activeMod: '{{ $activeModule }}',
    currentExpandedModule: '1-{{ $activeChapter }}',
    closeOther: {{ $closeOtherChapters }},
}">

    @foreach ($course->chapters as $chapter)
        <div class="flex flex-col rounded-xl bg-secondary dark:bg-secondary-dark" x-data="{ expanded: currentExpandedModule == '{{ $loop->iteration }}-{{ $chapter->id }}' }">

            <button class="flex items-center gap-3 p-6"
                @click="expanded = !expanded; currentExpandedModule = '{{ $loop->iteration }}-{{ $chapter->id }}';">
                <span
                    class="rounded-full size-8 grid text-lg uppercase bg-secondary-dark dark:bg-secondary text-primary dark:text-primary-dark font-bold place-items-center"
                    :class="{
                        'bg-secondary-dark/60 dark:bg-secondary/60': activeChap != {{ $chapter->id }}
                    }">{{ $loop->iteration }}</span>

                <span class="font-extrabold tracking-wide uppercase"
                    :class="{ 'text-secondary-dark/60 dark:text-secondary/60': activeChap != {{ $chapter->id }} }">{{ $chapter->title }}</span>
                @if ($chapter->isLocked)
                    <span class="ml-auto text-secondary-dark/60 dark:text-secondary/60'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                    </span>
                @else
                    <span class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chevron-down">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </span>
                @endif
            </button>


            @if (!$chapter->isLocked)
                <div class="flex flex-col"
                    x-show="expanded && (!closeOther || currentExpandedModule == '{{ $loop->iteration }}-{{ $chapter->id }}')"
                    x-collapse>

                    <button
                        class="flex gap-3 py-4 pl-7 border-l-4 border-l-transparent transition hover:opacity-85 cursor-pointer last:mb-6"
                        :class="{
                            '!border-l-primary-dark dark:!border-l-primary bg-gray-200 dark:bg-gray-800': activeMod ==
                                'video' && activeChap == {{ $chapter->id }},
                        }"
                        @click="activeChap = {{ $chapter->id }}; activeMod = 'video'">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-play">
                                <polygon points="6 3 20 12 6 21 6 3" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-start mb-2">{{ $chapter->modules->video->title }}</span>
                            <div class="flex flex-col gap-1">
                                @foreach ($chapter->modules->video->subtitles as $subtitle)
                                    <div class="flex items-center gap-2">
                                        @if ($subtitle->isDone)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check-big">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                                <path d="m9 11 3 3L22 4" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle">
                                                <circle cx="12" cy="12" r="10" />
                                            </svg>
                                        @endif
                                        <span
                                            class="text-secondary-dark/80 dark:text-secondary/80 font-medium line-clamp-1">{{ $subtitle->title }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </button>

                    <button
                        class="flex gap-3 py-4 pl-7 border-l-4 border-l-transparent transition hover:opacity-85 cursor-pointer last:mb-6"
                        :class="{
                            '!border-l-primary-dark dark:!border-l-primary bg-gray-200 dark:bg-gray-800': activeMod ==
                                'excercise' && activeChap == {{ $chapter->id }},
                        }"
                        @click="activeChap = {{ $chapter->id }}; activeMod = 'excercise'">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-sticky-note">
                                <path d="M16 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8Z" />
                                <path d="M15 3v4a2 2 0 0 0 2 2h4" />
                            </svg>
                        </div>
                        <span class="font-bold text-start">{{ $chapter->modules->excercise->title }}</span>
                    </button>

                    <button
                        class="flex gap-3 py-4 pl-7 border-l-4 border-l-transparent transition hover:opacity-85 cursor-pointer last:mb-6"
                        :class="{
                            '!border-l-primary-dark dark:!border-l-primary bg-gray-200 dark:bg-gray-800': activeMod ==
                                'assignment' && activeChap == {{ $chapter->id }},
                        }"
                        @click="activeChap = {{ $chapter->id }}; activeMod = 'assignment'">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-book-open-check">
                                <path d="M8 3H2v15h7c1.7 0 3 1.3 3 3V7c0-2.2-1.8-4-4-4Z" />
                                <path d="m16 12 2 2 4-4" />
                                <path d="M22 6V3h-6c-2.2 0-4 1.8-4 4v14c0-1.7 1.3-3 3-3h7v-2.3" />
                            </svg>
                        </div>
                        <span class="font-bold text-start">{{ $chapter->modules->assignment->title }}</span>
                    </button>


                    <button
                        class="flex gap-3 py-4 pl-7 border-l-4 border-l-transparent transition hover:opacity-85 cursor-pointer last:mb-6"
                        :class="{
                            '!border-l-primary-dark dark:!border-l-primary bg-gray-200 dark:bg-gray-800': activeMod ==
                                'quiz' && activeChap == {{ $chapter->id }},
                        }"
                        @click="activeChap = {{ $chapter->id }}; activeMod = 'quiz'">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-notepad-text">
                                <path d="M8 2v4" />
                                <path d="M12 2v4" />
                                <path d="M16 2v4" />
                                <rect width="16" height="18" x="4" y="4" rx="2" />
                                <path d="M8 10h6" />
                                <path d="M8 14h8" />
                                <path d="M8 18h5" />
                            </svg>
                        </div>
                        <span class="font-bold text-start">{{ $chapter->modules->quiz->title }}</span>
                    </button>

                </div>
            @endif

        </div>
    @endforeach
</div>
