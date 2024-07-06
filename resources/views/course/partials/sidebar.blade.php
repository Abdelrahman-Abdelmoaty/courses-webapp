<div class="flex justify-end gap-3 mb-4">
    <button class="p-4 transition rounded-full bg-secondary dark:bg-secondary-dark hover:opacity-85">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-calendar-clock">
            <path d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5" />
            <path d="M16 2v4" />
            <path d="M8 2v4" />
            <path d="M3 10h5" />
            <path d="M17.5 17.5 16 16.3V14" />
            <circle cx="16" cy="16" r="6" />
        </svg>
    </button>
    <button class="p-4 transition rounded-full bg-secondary dark:bg-secondary-dark hover:opacity-85">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-search">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
        </svg>
    </button>
</div>


<div class="flex flex-col gap-4 lg:col-span-2 max-lg:w-full" x-data="{
    activeChap: {{ $activeChapter->id }},
    activeMod: '{{ $activeModule->type }}',
    selectedChap: {{ $activeChapter->id }},
    activeVid: {{ $activeVideo ? $activeVideo->id : 'null' }},
    closeOther: {{ $closeOtherChapters ? 'true' : 'false' }},
}">

    @foreach ($course->chapters as $chapter)
        <div class="flex flex-col rounded-xl bg-secondary dark:bg-secondary-dark" x-data="{ expanded: activeChap == {{ $chapter->id }} }">


            <button class="flex items-center gap-3 p-6" @click="expanded = !expanded; selectedChap={{ $chapter->id }}">
                <span
                    class="grid text-lg font-bold uppercase rounded-full size-8 bg-secondary-dark dark:bg-secondary text-primary dark:text-primary-dark place-items-center"
                    :class="{
                        'bg-secondary-dark/60 dark:bg-secondary/60': activeChap != {{ $chapter->id }}
                    }">{{ $loop->iteration }}</span>

                <span class="font-extrabold tracking-wide uppercase"
                    :class="{ 'text-secondary-dark/60 dark:text-secondary/60': activeChap != {{ $chapter->id }} }">
                    {{ $chapter->title }}
                </span>

                @if ($chapter->isLocked)
                    <span class="ml-auto text-secondary-dark/60 dark:text-secondary/60">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                    </span>
                @else
                    <span class="ml-auto transition"
                        :class="{ 'transform -rotate-180': selectedChap == {{ $chapter->id }} }">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chevron-down">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </span>
                @endif
            </button>




            @if (!$chapter->isLocked)
                @foreach ($chapter->modules as $module)
                    <div class="flex flex-col" x-show="closeOther? selectedChap=={{ $chapter->id }} : expanded"
                        x-collapse>
                        <button
                            class="flex gap-3 py-4 transition border-l-4 cursor-pointer pl-7 border-l-transparent hover:opacity-85"
                            :class="{
                                '!border-l-primary-dark dark:!border-l-primary bg-gray-200 dark:bg-gray-800': activeMod ==
                                    `{{ $module->type }}` && activeChap == {{ $chapter->id }},
                            }"
                            @click="activeChap = {{ $chapter->id }}; activeMod = '{{ $module->type }}'; window.location.href = `/course/{{ $course->slug }}/chapter/{{ $chapter->id }}/module/{{ $module->id }}`">
                            <div>
                                @if ($module->type == 'lesson')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play">
                                        <polygon points="6 3 20 12 6 21 6 3" />
                                    </svg>
                                @elseif($module->type == 'quiz')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard">
                                        <path
                                            d="M18 2h-3a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2H4a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z" />
                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1" />
                                    </svg>
                                @elseif($module->type == 'assignment')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                        <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                                    </svg>
                                @elseif($module->type == 'exercise')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                        <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                                    </svg>
                                @endif


                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-start">{{ $module->type }}</span>
                                <div class="flex flex-col gap-2">
                                    @foreach ($module->videos as $video)
                                        <a href="/course/{{ $course->slug }}/chapter/{{ $chapter->id }}/module/{{ $module->id }}/video/{{ $video->id }}"
                                            class="flex items-center gap-2 transition text-secondary-dark/60 dark:text-secondary/60 hover:scale-110 first:mt-2"
                                            :class="{
                                                '!text-secondary-dark dark:!text-secondary': activeVid ==
                                                    {{ $video->id }} && activeChap == {{ $chapter->id }},
                                            }">
                                            @if ($video->isDone)
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
                                            <span class="font-bold line-clamp-1">
                                                {{ $video->title }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </button>
                    </div>
                @endforeach
            @endif


        </div>
    @endforeach
</div>
