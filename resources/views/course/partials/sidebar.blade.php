<div x-data="{ open: false }">

    <button
        class="fixed top-0 right-0 z-50 inline-flex items-center justify-center p-4 transition-opacity duration-150 ease-in-out rounded-md lg:hidden hover:opacity-85"
        @click="open=!open">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-square-play">
            <rect width="18" height="18" x="3" y="3" rx="2" />
            <path d="m9 8 6 4-6 4Z" />
        </svg>
    </button>


    <div class="top-0 left-0 z-40 transition-transform duration-500 max-lg:h-screen max-lg:overflow-y-scroll max-lg:w-full max-lg:px-4 max-lg:fixed max-lg:translate-x-full bg-primary dark:bg-primary-dark max-lg:pt-20"
        :class="{ '!translate-x-0': open }">


        <div class="flex justify-end gap-3 mb-4">
            <button class="p-4 transition-opacity rounded-full bg-secondary dark:bg-secondary-dark hover:opacity-85">
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
            <button class="p-4 transition-opacity rounded-full bg-secondary dark:bg-secondary-dark hover:opacity-85">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-search">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
            </button>
        </div>


        <div class="flex flex-col gap-4 lg:col-span-2 max-lg:w-full" x-data="{
            chapterId: '{{ $chapter->id }}',
            episodeId: '{{ $episode->id }}',
            chap: '{{ $chapter->id }}',
            closeOtherChapters: '{{ $collapse_chapters }}'
        }">

            @foreach ($course->chapters as $courseChapter)
                <div class="flex flex-col rounded-xl bg-secondary dark:bg-secondary-dark" x-data="{ expanded: chapterId == '{{ $courseChapter->id }}' }">

                    <button class="flex items-center gap-3 p-6"
                        @click="expanded = !expanded; chap =  '{{ $courseChapter->id }}' == chap ? '' : '{{ $courseChapter->id }}'">
                        <span
                            class="grid text-lg font-bold uppercase rounded-full size-8 bg-secondary-dark dark:bg-secondary text-primary dark:text-primary-dark place-items-center"
                            :class="{
                                'bg-secondary-dark/60 dark:bg-secondary/60': chapterId != `{{ $courseChapter->id }}`
                            }">
                            {{ $loop->iteration }}
                        </span>

                        <span class="font-extrabold tracking-wide uppercase"
                            :class="{ 'text-secondary-dark/60 dark:text-secondary/60': chapterId != `{{ $courseChapter->id }}` }">
                            {{ $courseChapter->name }}
                        </span>

                        <span class="ml-auto transition-transform"
                            :class="{ '-rotate-180': '{{ $courseChapter->id }}' == chap }">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-down">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </span>

                        {{-- @if ($chapter->isLocked)
                    <span class="ml-auto text-secondary-dark/60 dark:text-secondary/60">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                    </span>\
                @endif --}}
                    </button>




                    @foreach ($courseChapter->episodes as $chapterEpisode)
                        <div class="flex flex-col"
                            x-show="closeOtherChapters? '{{ $courseChapter->id }}' == chap : expanded" x-collapse>
                            <button
                                class="flex gap-3 py-4 transition-opacity border-l-4 cursor-pointer pl-7 border-l-transparent hover:opacity-85"
                                :class="{
                                    '!border-l-primary-dark dark:!border-l-primary bg-gray-200 dark:bg-gray-800': episodeId ==
                                        `{{ $chapterEpisode->id }}`,
                                }"
                                @click="episodeId = '{{ $chapterEpisode->id }}'; chapterId = '{{ $courseChapter->id }}'; activeEpisode = {{ json_encode($chapterEpisode) }}; activeChapter = {{ json_encode($courseChapter) }}; open=false; history.pushState({}, '', `/episode/{{ $chapterEpisode->uuid }}`)">

                                <svg :class="{
                                    'hidden': {{ $chapterEpisode->is_seen }},
                                }"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-play">
                                    <polygon points="6 3 20 12 6 21 6 3" />
                                </svg>

                                <svg :class="{
                                    'hidden': !{{ $chapterEpisode->is_seen }},
                                }"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-circle-check-big">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                    <path d="m9 11 3 3L22 4" />
                                </svg>


                                <span class="font-bold text-start">{{ $chapterEpisode->name }}</span>
                            </button>
                        </div>
                    @endforeach


                </div>
            @endforeach
        </div>
    </div>
</div>
