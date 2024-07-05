<x-course-layout>
    <div class="grid lg:grid-cols-5 gap-y-10 lg:gap-x-10 py-6">
        <div class="lg:col-span-3 flex flex-col gap-4">
            <div class="flex items-center gap-4">
                <div>
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
                    <span class="font-semibold text-sm text-gray-500 dark:text-gray-300"> Advanced Motion Methods</span>
                    <span class="font-bold text-xl">Week 3 / A Solid Foundation</span>
                </div>
            </div>

            <div class="aspect-video bg-secondary dark:bg-secondary-dark"></div>

            {{-- <div>
                <p class="font-semibold text-2xl">
                    Video Title
                </p>
                <p class="font-medium text-lg text-text/80">
                    Video Description
                </p>
            </div> --}}



            <div x-data="{ tab: 'overview' }">
                <div>
                    <div class="mb-5 flex">
                        <button class="my-2 block w-40 transition pb-3.5 pt-4 text-xl hover:font-bold"
                            :class="{ 'font-bold border-b-2 border-b-gray-900 dark:border-b-gray-200': tab == 'overview' }"
                            @click.prevent="tab = 'overview'">Overview</button>
                        <button class="my-2 block w-40 transition pb-3.5 pt-4 text-xl hover:font-bold"
                            :class="{ 'font-bold border-b-2 border-b-gray-900 dark:border-b-gray-200': tab == 'transcripts' }"
                            @click.prevent="tab = 'transcripts'">Transcripts</button>
                    </div>
                </div>

                <div>
                    <div x-show="tab == 'overview'">
                        <p class="max-w-3xl font-medium">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis consequuntur nihil a
                            repellat corporis expedita accusantium, dolorem nisi, rem enim, amet magnam in praesentium
                            eveniet voluptatibus harum optio quidem fugit?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloremque sunt quibusdam
                            harum cupiditate minus eum id delectus, quia iure, doloribus autem non est quod.
                        </p>
                    </div>
                    <div x-show="tab == 'transcripts'">
                        <div class="flex flex-col gap-3">
                            <p class="font-medium text-lg text-text/90">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quasi quaerat
                                voluptatibus quidem, vero ipsum ad alias explicabo dignissimos libero.
                            </p>
                            <p class="font-medium text-lg text-text/90">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nisi. Optio ut consectetur
                                fugiat, eos praesentium illo! Eaque deserunt enim voluptates ratione quas. At a possimus
                                ipsum quam iusto qui.
                            </p>
                            <p class="font-medium text-lg text-text/90">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dolorem, ex minus
                                libero, velit quis rem placeat dicta architecto non nulla? Hic architecto, tempore
                                asperiores laborum dicta nobis magni dolore omnis ex, laudantium veritatis autem
                                consectetur, fuga eos consequuntur animi!
                            </p>
                            <p class="font-medium text-lg text-text/90">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid temporibus officiis
                                assumenda ex asperiores magnam laboriosam provident veritatis illum in.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-span-2">
            @include('course.partials.sidebar-mock')
        </div>

    </div>
</x-course-layout>
