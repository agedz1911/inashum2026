<div>
    <section class="w-full pt-24 pb-3 px-2 lg:px-4 ">
        <div class="border-b-2 border-dashed border-accent/50 pb-10">
            <div class="">
                <div class="text-center pb-6 w-60 m-auto">
                    
                    <h2 class="mb-1 text-[#302b88] text-xl md:text-3xl font-bold uppercase">SPONSors</h2>
                </div>
                <div class="mt-10">
                    <div class="mb-4 flex items-center justify-end gap-2 px-2" x-data="carouselSetupControls()">
                        <button type="button"
                            class="btn btn-sm btn-outline border border-[#b9608d] rounded-full"
                            @click="$dispatch('sponsor-carousel-prev')">
                            <i class="fa-solid text-[#b9608d] fa-chevron-left"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-outline border border-[#b9608d] rounded-full"
                            @click="$dispatch('sponsor-carousel-next')">
                            <i class="fa-solid text-[#b9608d] fa-chevron-right"></i>
                        </button>
                    </div>
                    <div x-data="carouselSetup()" x-init="startInterval()" @resize.window="handleResize()"
                        @mouseenter="stopInterval()" @mouseleave="startInterval()"
                        @sponsor-carousel-prev.window="prevSlide()" @sponsor-carousel-next.window="nextSlide()"
                        class="w-full mx-auto overflow-hidden bg-base-100 rounded-box px-4 py-8 md:px-6 md:py-12">
                        <div class="flex transition-transform duration-700 ease-in-out"
                            :style="`transform: translateX(-${(currentIndex * 100) / effectiveVisibleItems}%)`">
                            @foreach ($sponsors as $sponsor)
                            <div class="flex-none border-r border-gray-300 last:border-0 px-3"
                                :style="`width: ${100 / effectiveVisibleItems}%`">
                                <div class="tooltip tooltip-accent" data-tip="{{$sponsor->category}}">
                                    <div class="flex h-24 items-center justify-center p-2 opacity-75 hover:opacity-100 text-center md:h-28">
                                        <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                            target="_blank" class="flex h-full w-full items-center justify-center">
                                            {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                                class="max-h-full w-auto max-w-full object-contain" alt="' . $sponsor->company . '" />' : '<small
                                                class="text-center text-accent">' . $sponsor->company . '</small>' !!}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="text-center my-10">
                    <a class="btn bg-[#b9608d] hover:bg-[#a45b80] text-white rounded-xl uppercase" href="/sponsors">VIEW
                        MORE Sponsors</a>
                </div>
            </div>
        </div>
    </section>
</div>