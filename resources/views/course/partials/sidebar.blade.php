@php
$initiallyExpandedModuleId = $module->id ?? null;
@endphp
<div class="col-span-2 flex flex-col gap-4">

    @foreach($course->modules as $mod)
    <div class="flex flex-col rounded-xl bg-secondary"
        x-data="{ expanded: {{ $mod->id == $initiallyExpandedModuleId ? 'true' : 'false' }} }">
        <button class="flex items-center gap-3 p-6" @click="expanded = !expanded">
            <span class="rounded-full size-8 grid text-lg bg-text text-primary font-bold place-items-center"
                :class="{ 'bg-text/60': {{ $module->id }} != {{ $mod->id}}}">{{
                $loop->iteration }}</span>
            <span class="font-bold tracking-wide uppercase">{{ $mod->title }}</span>
        </button>

        <div class="flex flex-col gap-3" x-show="expanded" x-collapse>
            @foreach($mod->videos as $vid)
            <a href="/course/{{ $course->id }}/module/{{ $mod->id }}/video/{{ $vid->id }}"
                class="flex gap-3 pr-6 py-4 pl-7 border-l-4 transition cursor-pointer {{ $video->id == $vid->id ? 'border-l-gray-200 opacity-100' : 'border-l-transparent hover:opacity-85 hover:border-l-gray-200' }} last:mb-6">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-play">
                        <polygon points="6 3 20 12 6 21 6 3" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold tracking-wide">{{ $vid->title }}</span>
                    <span class="font-medium text-sm line-clamp-2 text-balance max-w-md text-text/80">
                        {{ $vid->description }}
                    </span>
                </div>
            </a>
            @endforeach

            @if($mod->videos->count() == 0)
            <div class="flex items-center justify-center p-6">
                <span class="text-text/80 font-semibold">No videos found</span>
            </div>
            @endif


        </div>
    </div>
    @endforeach
</div>