<script>
    const closeOtherChapters = true;
    const episodeHeaderVariant = 'default'; // default, no-icon, title-only
</script>

<x-course-layout>
    <div class="grid gap-10 py-6 lg:grid-cols-5" x-data="{
        activeEpisode: {{ json_encode($episode) }},
        activeChapter: {{ json_encode($chapter) }},
    }">
        <div class="flex flex-col gap-4 lg:col-span-3">
          
            <div class="flex flex-wrap items-center gap-4">
                <div :class="{ 'hidden': episodeHeaderVariant === 'no-icon' || episodeHeaderVariant ===  'title-only' }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-roller-coaster">
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
                    <span class="text-sm font-semibold text-gray-500 dark:text-gray-300"
                        :class="{ 'hidden': episodeHeaderVariant === 'title-only' }">
                        Chapter: <span x-text="activeChapter.name"></span>
                    </span>
                    <span class="text-xl font-bold" :class="{ '!text-2xl': episodeHeaderVariant === 'title-only' }">
                        {{ $course->name }}
                    </span>
                </div>
            </div>

            {{-- Vimeo Player --}}
            <div class="aspect-video" style="position:relative;"><iframe
                    src="https://player.vimeo.com/episode/978258437?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" title="test-video"></iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>

            <div>
                <p class="text-2xl font-semibold" x-text="activeEpisode.name"></p>
                <p class="max-w-3xl text-sm font-medium opacity-70" x-text="activeEpisode.description"></p>
                <div class="flex justify-end gap-3 mt-4">
                    <button
                        class="flex items-center justify-center gap-2 px-3 py-2 font-bold transition-opacity rounded-full max-lg:text-sm lg:px-8 bg-primary-dark dark:bg-primary hover:opacity-85 text-primary dark:text-primary-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-heart">
                            <path
                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                        </svg>
                        Button
                    </button>
                    <button
                        class="flex items-center justify-center gap-2 px-3 py-2 font-bold transition-opacity rounded-full max-lg:text-sm lg:px-8 bg-primary-dark dark:bg-primary hover:opacity-85 text-primary dark:text-primary-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-zap">
                            <path
                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
                        </svg>
                        Button
                    </button>
                    <button
                        class="p-3 font-bold transition-opacity rounded-full bg-secondary dark:bg-secondary-dark hover:opacity-85">
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
                        <button class="my-2 block w-40 pb-3.5 pt-4 text-xl hover:font-bold"
                            :class="{ 'font-bold border-b-2 border-b-gray-900 dark:border-b-gray-200': tab == 'overview' }"
                            @click.prevent="tab = 'overview'">Overview</button>
                        <button class="my-2 block w-40 pb-3.5 pt-4 text-xl hover:font-bold"
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




        </div>

        <div class="lg:col-span-2">
            @include('course.partials.sidebar', [
                'course' => $course,
                'chapter' => $chapter,
                'episode' => $episode,
            ])
        </div>

    </div>
</x-course-layout>
