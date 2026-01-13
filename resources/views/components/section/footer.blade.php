<footer class="pt-20 text-center text-white relative mt-10">
    <div class="absolute wave block md:hidden lg:block overflow-hidden w-full z-0 left-0 leading-none top-[0]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="bg-white" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,101.3C640,128,800,224,960,245.3C1120,267,1280,213,1360,186.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
        </svg>
    </div>
    <div class="absolute inset-0 bg-gradient-to-b from-[#ffffff] to-[#302b88]/80"></div>
    <div class="relative">
        <div class="flex flex-col items-center w-full max-w-4xl m-auto">

            <img src="assets/images/logo/logo-event.png" class="max-w-xs" alt="Icon" class="">

            <div class="border-b border-white m-auto mb-6 mt-4 w-full max-w-2xl">
                <p class="text-[#302b88] mb-6"> <span class="font-semibold">Organized by:</span> <br><span> Indonesian Society for Hand, Upper Limb and Microsurgery (INASHUM) <br>
                        Indonesian Pediatric Orthopaedic Society (INAPOS) <br>
                        Indonesian Distraction Osteogenesis Society (IDOS)
                    </span></p>

                <p class="mb-0 mt-6 font-semibold">Secretariat</p>
                <p>Komplek Duta Merlin Blok C 35-36. <br> Jl. Gajah Mada 3 – 5,
                    Jakarta 10130, Indonesia</p>
                <div class="py-5 mt-3">
                    <ul class="m-0 p-0 flex flex-row gap-5 lg:gap-8 justify-center">
                        <li class="bg-[#b9608d] rounded-md p-2 w-10 hover:bg-[#a45b80] tooltip-bottom tooltip"
                            data-tip="inashumposdos@pharma-pro.com">
                            <a href="mailto:inashumposdos@pharma-pro.com" class="">
                                <i class="fa-solid fa-envelope-open-text text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-[#b9608d] rounded-md p-2 w-10 hover:bg-[#a45b80] tooltip-bottom tooltip"
                            data-tip="+6221 6386 9502">
                            <a href="tel:+622163869502" class="">
                                <i class="fa fa-phone text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-[#b9608d] rounded-md p-2 w-10 hover:bg-[#a45b80] tooltip-bottom tooltip"
                            data-tip="+62 813-1580-9160 ">
                            <a href="tel:+6281315809160 " class="">
                                <i class="fa fa-mobile-screen text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-[#b9608d] rounded-md p-2 w-10 hover:bg-[#a45b80] tooltip-bottom tooltip"
                            data-tip="+62 813-1580-9160 ">
                            <a href="https://wa.me/+6281315809160" class="">
                                <i class="fa fa-whatsapp text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-[#b9608d] rounded-md p-2 w-10 hover:bg-[#a45b80] tooltip-bottom tooltip"
                            data-tip="+62 811-1018-517">
                            <a href="https://wa.me/+628111018517" class="">
                                <i class="fa fa-whatsapp text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-[#b9608d] rounded-md p-2 w-10 hover:bg-[#a45b80] tooltip-bottom tooltip"
                            data-tip="@ig">
                            <a href="javascript:void(0)" class="">
                                <i class="fa fa-instagram text-xl"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pb-10 mt-4">
                <ul class="p-0 m-0 flex flex-row flex-wrap gap-4 lg:gap-6 justify-center">
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a href="/submission"
                            wire:navigate>Submission</a></li>
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a href="/organizing-committee"
                            wire:navigate>Committee</a></li>
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a wire:navigate
                            href="/faculties">Faculties</a></li>
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a wire:navigate
                            href="/program-at-glance">Schedule</a></li>
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a wire:navigate
                            href="/registration">Registration</a></li>
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a wire:navigate
                            href="/visiting">Venue</a></li>
                </ul>
            </div>
        </div>
        <div class="pb-6 pt-1 mt-5">
            <p class="text-xs">MIS - IT Pharma-Pro © {{ now()->year }}</p>
        </div>
    </div>
</footer>