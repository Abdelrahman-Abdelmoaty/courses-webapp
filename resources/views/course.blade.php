@php
    $closeOtherChapters = false;
@endphp


<x-course-layout>
    <div class="grid gap-10 py-6 lg:grid-cols-5">
        <div class="flex flex-col gap-4 lg:col-span-3">

            @if ($activeVideo)
                <div class="flex flex-wrap items-center gap-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-roller-coaster">
                            <path d="M6 19V5" />
                            <path d="M10 19V6.8" />
                            <path d="M14 19v-7.8" />
                            <path d="M18 5v4" />
                            <path d="M18 19v-6" />
                            <path d="M22 19V9" />
                            <path d="M2 19V9a4 4 0 0 1 4-4c2 0 4 1.33 6 4s4 4 6 4a4 4 0 1 0-3-6.65" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-gray-500 dark:text-gray-300">
                            Chapter: {{ $activeChapter->title }} / Module: {{ $activeModule->type }}
                        </span>
                        <span class="text-xl font-bold">
                            {{ $course->title }}
                        </span>
                    </div>
                </div>

                <div class="aspect-video" style="position:relative;"><iframe
                        src="https://player.vimeo.com/video/978258437?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                        frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                        style="position:absolute;top:0;left:0;width:100%;height:100%;" title="test-video"></iframe>
                </div>
                <script src="https://player.vimeo.com/api/player.js"></script>

                <div>
                    <p class="text-2xl font-semibold">
                        {{ $activeVideo->title }}
                    </p>
                    <p class="text-sm font-medium opacity-70">
                        {{ $activeVideo->description }}
                    </p>
                    <div class="flex justify-end gap-3 mt-4">
                        <button
                            class="px-12 py-2 font-bold transition rounded-full bg-primary-dark dark:bg-primary hover:opacity-85 text-primary dark:text-primary-dark">
                            Button
                        </button>
                        <button
                            class="px-12 py-2 font-bold transition rounded-full bg-secondary dark:bg-secondary-dark hover:opacity-85">
                            Button
                        </button>
                        <button
                            class="p-3 font-bold transition rounded-full bg-secondary dark:bg-secondary-dark hover:opacity-85">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                        </button>
                    </div>
                </div>



                <div x-data="{ tab: 'overview' }">
                    <div>
                        <div class="flex mb-5">
                            <button class="my-2 block w-40 transition pb-3.5 pt-4 text-xl hover:font-bold"
                                :class="{ 'font-bold border-b-2 border-b-gray-900 dark:border-b-gray-200': tab == 'overview' }"
                                @click.prevent="tab = 'overview'">Overview</button>
                            <button class="my-2 block w-40 transition pb-3.5 pt-4 text-xl hover:font-bold"
                                :class="{
                                    'font-bold border-b-2 border-b-gray-900 dark:border-b-gray-200': tab ==
                                        'transcripts'
                                }"
                                @click.prevent="tab = 'transcripts'">Transcripts</button>
                        </div>
                    </div>

                    <div>
                        <div x-show="tab == 'overview'">
                            <div class="max-w-3xl font-medium">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis consequuntur
                                    nihil
                                    a
                                    repellat corporis expedita accusantium, dolorem nisi, rem enim, amet magnam in
                                    praesentium
                                    eveniet voluptatibus harum optio quidem fugit?
                                </p>
                                <br>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloremque sunt
                                    quibusdam
                                    harum cupiditate minus eum id delectus, quia iure, doloribus autem non est quod.
                                </p>
                            </div>
                        </div>
                        <div x-show="tab == 'transcripts'">
                            <div class="flex flex-col max-w-3xl gap-3 text-lg font-medium text-text/90">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quasi quaerat
                                    voluptatibus quidem, vero ipsum ad alias explicabo dignissimos libero.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nisi. Optio ut
                                    consectetur
                                    fugiat, eos praesentium illo! Eaque deserunt enim voluptates ratione quas. At a
                                    possimus
                                    ipsum quam iusto qui.
                                </p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dolorem, ex minus
                                    libero, velit quis rem placeat dicta architecto non nulla? Hic architecto, tempore
                                    asperiores laborum dicta nobis magni dolore omnis ex, laudantium veritatis autem
                                    consectetur, fuga eos consequuntur animi!
                                </p>
                                <p class="text-lg font-medium text-text/90">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid temporibus officiis
                                    assumenda ex asperiores magnam laboriosam provident veritatis illum in.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="flex flex-col items-center justify-center bg-gray-200 h-96 dark:bg-gray-800 rounded-xl">
                    <p class="text-2xl font-semibold">
                        {{ $activeChapter->title }}
                    </p>
                    <p class="text-sm font-medium opacity-70">
                        {{ $activeModule->type }}
                    </p>
                </div>
            @endif




        </div>

        <div class="lg:col-span-2">
            @include('course.partials.sidebar', [
                'course' => $course,
                'closeOtherChapters' => $closeOtherChapters,
                'activeChapter' => $activeChapter,
                'activeModule' => $activeModule,
            ])
        </div>

    </div>
</x-course-layout>
