<x-app-layout>
    <div class="grid md:grid-cols-5 gap-10 py-6">
        <div class="col-span-3 flex flex-col gap-4">

            <div>
                <span class="font-bold"> {{ $course->title }} / </span>
                <span class="font-medium text-sm text-text/80">{{ $module->title }} / </span>
                <span class="font-medium text-sm text-text/80">{{ $video->title }}</span>
            </div>

            <iframe class="w-full rounded-xl aspect-video bg-neutral-700"
                src="{{ $course->modules[0]->videos[0]->url }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

            <div>
                <p class="font-semibold text-2xl">
                    {{ $video->title }}
                </p>
                <p class="font-medium text-lg text-text/80">
                    {{ $video->description }}
                </p>
            </div>



            <div x-data="{ tab: 'overview' }">
                <div>
                    <div class="mb-5 flex">
                        <button
                            class="my-2 block w-48 transition pb-3.5 pt-4 text-xl text-text/50 hover:text-text hover:font-bold"
                            :class="{ 'font-bold border-b-2 text-text': tab == 'overview' }"
                            @click.prevent="tab = 'overview'">Overview</button>
                        <button
                            class="my-2 block w-48 transition pb-3.5 pt-4 text-xl text-text/50 hover:text-text hover:font-bold"
                            :class="{ 'font-bold border-b-2 text-text': tab == 'transcripts' }"
                            @click.prevent="tab = 'transcripts'">Transcripts</button>
                    </div>
                </div>

                <div>
                    <div x-show="tab == 'overview'">
                        <div>
                            <p>Course:</p>
                            <p class="font-semibold text-2xl">
                                {{ $course->title }}
                            </p>
                            <p class="font-medium text-lg text-text/80 mb-4">
                                {{ $course->description }}
                            </p>
                        </div>
                        <div>
                            <p>Module:</p>
                            <p class="font-semibold text-2xl">
                                {{ $module->title }}
                            </p>
                            <p class="font-medium text-lg text-text/80 mb-4">
                                {{ $module->description }}
                            </p>
                        </div>
                    </div>
                    <div x-show="tab == 'transcripts'">
                        <div class="flex flex-col gap-3">
                            <p class="font-medium text-lg text-text/90">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.
                                Ratione laudantium
                                illo
                                consequuntur. Deserunt
                                facilis nesciunt laudantium non, quam neque, omnis sit, perferendis magni dicta eveniet?
                                In
                                quis esse
                                nihil facere!</p>
                            <p class="font-medium text-lg text-text/90">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Earum
                                assumenda
                                itaque
                                recusandae alias sunt
                                tenetur, accusantium vero mollitia non? Voluptatem perferendis obcaecati facilis tempore
                                provident
                                numquam
                                aut, soluta sit dolore laborum ipsa quidem illo. Ipsum natus distinctio sed dolorem
                                ducimus
                                ipsam
                                dolorum,
                                obcaecati aliquam id mollitia labore explicabo aut dolore, totam recusandae cumque
                                laboriosam in amet
                                soluta error. Deserunt, non.</p>
                            <p class="font-medium text-lg text-text/90">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.
                                Dignissimos vero
                                placeat
                                dolore illo, tenetur
                                mollitia numquam corrupti sed, quis aliquid facilis. Ipsum, reprehenderit quaerat?
                                Doloribus
                                illum odio
                                mollitia minus cum aspernatur, rem amet, dolorem, asperiores debitis dicta quo. In, rem?
                            </p>
                            <p class="font-medium text-lg text-text/90">Lorem ipsum dolor, sit amet consectetur
                                adipisicing
                                elit.
                                Illum
                                exercitationem
                                consequatur tempore
                                laboriosam, accusantium ratione animi nihil amet itaque dolores vel consectetur. Id
                                neque
                                optio nostrum
                                blanditiis cupiditate, totam suscipit!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-span-2">
            @include('course.partials.sidebar')
        </div>
    </div>
</x-app-layout>