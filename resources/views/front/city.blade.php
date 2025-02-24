@extends('layouts.app')
@section('title')
    Gym di {{ $city->name }} City
@endsection
@section('content')
    <nav class="relative flex items-center justify-between w-full max-w-[1280px] mx-auto px-10 mt-10">
        <a href="index.html">
            <img src="assets/images/logos/Logo.svg" class="flex shrink-0" alt="logo">
        </a>
        <ul class="flex items-center gap-6 justify-end">
            <li>
                <a href="#" class="leading-19 tracking-03 text-[#141414]">Subscribe Plan</a>
            </li>
            <li>
                <a href="#" class="leading-19 tracking-03 text-[#141414]">Blog</a>
            </li>
            <li>
                <a href="#" class="leading-19 tracking-03 text-[#141414]">Testimonial</a>
            </li>
            <li>
                <a href="#" class="leading-19 tracking-03 text-[#141414]">About</a>
            </li>
            <li>
                <a href="#"
                    class="leading-19 tracking-0.5 text-white font-semibold rounded-[22px] py-3 px-6 bg-[#606DE5]">My
                    Subscription</a>
            </li>
        </ul>
    </nav>
    <section id="latest" class="flex flex-col w-full max-w-[1280px] gap-8 mx-auto px-10 mt-[120px]">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-4">
                <h2 class="font-['ClashDisplay-SemiBold'] text-5xl leading-[59px] tracking-05">Jakarta</h2>
                <p class="leading-19 tracking-03 opacity-60">Finding FitCamp gym location nearby “Jakarta” city</p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6">
            <a href="details.html" class="card">
                <div class="flex flex-col rounded-3xl p-8 gap-6 bg-white">
                    <div class="title flex flex-col gap-2">
                        <h3 class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Fitcamp Senayan City Victory</h3>
                        <div class="flex items-center gap-1">
                            <img src="assets/images/icons/location.svg" class="flex shrink-0" alt="icon">
                            <p class="text-sm leading-19 tracking-03 opacity-50">Senayan, Jakarta Selatan</p>
                        </div>
                    </div>
                    <div class="thumbnail flex rounded-3xl h-[200px] bg-[#06425E] overflow-hidden">
                        <img src="assets/images/thumbnails/th1.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-['ClashDisplay-SemiBold']">Facilities</p>
                        <button class="font-semibold text-xs leading-14 tracking-05 text-fitcamp-royal-blue">View
                            all</button>
                    </div>
                    <div class="grid grid-cols-3 justify-between gap-3">
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Sauna.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Sauna</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Relax Body</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Shower Room.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Shower</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">After Gym</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Locker.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Locker</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Saving Bag</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border-black/10">
                    <div class="flex items-center gap-3">
                        <img src="assets/images/icons/Daily Time.svg" class="w-10 h-10" alt="icon">
                        <div class="flex flex-col gap-2">
                            <p class="font-['ClashDisplay-SemiBold'] text-sm leading-17 tracking-05">Opening Work</p>
                            <p class="text-xs leading-14 tracking-05 opacity-50">08:00 AM - 09:00 PM</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div class="flex flex-col rounded-3xl p-8 gap-6 bg-white">
                    <div class="title flex flex-col gap-2">
                        <h3 class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">FItcamp Blok A Jaya</h3>
                        <div class="flex items-center gap-1">
                            <img src="assets/images/icons/location.svg" class="flex shrink-0" alt="icon">
                            <p class="text-sm leading-19 tracking-03 opacity-50">Senayan, Jakarta Selatan</p>
                        </div>
                    </div>
                    <div class="thumbnail flex rounded-3xl h-[200px] bg-[#06425E] overflow-hidden">
                        <img src="assets/images/thumbnails/th2.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-['ClashDisplay-SemiBold']">Facilities</p>
                        <button class="font-semibold text-xs leading-14 tracking-05 text-fitcamp-royal-blue">View
                            all</button>
                    </div>
                    <div class="grid grid-cols-3 justify-between gap-3">
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Sauna.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Sauna</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Relax Body</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Shower Room.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Shower</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">After Gym</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Locker.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Locker</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Saving Bag</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border-black/10">
                    <div class="flex items-center gap-3">
                        <img src="assets/images/icons/Daily Time.svg" class="w-10 h-10" alt="icon">
                        <div class="flex flex-col gap-2">
                            <p class="font-['ClashDisplay-SemiBold'] text-sm leading-17 tracking-05">Opening Work</p>
                            <p class="text-xs leading-14 tracking-05 opacity-50">08:00 AM - 09:00 PM</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div class="flex flex-col rounded-3xl p-8 gap-6 bg-white">
                    <div class="title flex flex-col gap-2">
                        <h3 class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Fitcamp Cipete Raya</h3>
                        <div class="flex items-center gap-1">
                            <img src="assets/images/icons/location.svg" class="flex shrink-0" alt="icon">
                            <p class="text-sm leading-19 tracking-03 opacity-50">Senayan, Jakarta Selatan</p>
                        </div>
                    </div>
                    <div class="thumbnail flex rounded-3xl h-[200px] bg-[#06425E] overflow-hidden">
                        <img src="assets/images/thumbnails/th3.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-['ClashDisplay-SemiBold']">Facilities</p>
                        <button class="font-semibold text-xs leading-14 tracking-05 text-fitcamp-royal-blue">View
                            all</button>
                    </div>
                    <div class="grid grid-cols-3 justify-between gap-3">
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Sauna.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Sauna</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Relax Body</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Shower Room.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Shower</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">After Gym</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Locker.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Locker</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Saving Bag</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border-black/10">
                    <div class="flex items-center gap-3">
                        <img src="assets/images/icons/Daily Time.svg" class="w-10 h-10" alt="icon">
                        <div class="flex flex-col gap-2">
                            <p class="font-['ClashDisplay-SemiBold'] text-sm leading-17 tracking-05">Opening Work</p>
                            <p class="text-xs leading-14 tracking-05 opacity-50">08:00 AM - 09:00 PM</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div class="flex flex-col rounded-3xl p-8 gap-6 bg-white">
                    <div class="title flex flex-col gap-2">
                        <h3 class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Fitcamp Senayan City Victory</h3>
                        <div class="flex items-center gap-1">
                            <img src="assets/images/icons/location.svg" class="flex shrink-0" alt="icon">
                            <p class="text-sm leading-19 tracking-03 opacity-50">Senayan, Jakarta Selatan</p>
                        </div>
                    </div>
                    <div class="thumbnail flex rounded-3xl h-[200px] bg-[#06425E] overflow-hidden">
                        <img src="assets/images/thumbnails/th4.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-['ClashDisplay-SemiBold']">Facilities</p>
                        <button class="font-semibold text-xs leading-14 tracking-05 text-fitcamp-royal-blue">View
                            all</button>
                    </div>
                    <div class="grid grid-cols-3 justify-between gap-3">
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Sauna.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Sauna</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Relax Body</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Shower Room.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Shower</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">After Gym</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Locker.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Locker</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Saving Bag</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border-black/10">
                    <div class="flex items-center gap-3">
                        <img src="assets/images/icons/Daily Time.svg" class="w-10 h-10" alt="icon">
                        <div class="flex flex-col gap-2">
                            <p class="font-['ClashDisplay-SemiBold'] text-sm leading-17 tracking-05">Opening Work</p>
                            <p class="text-xs leading-14 tracking-05 opacity-50">08:00 AM - 09:00 PM</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div class="flex flex-col rounded-3xl p-8 gap-6 bg-white">
                    <div class="title flex flex-col gap-2">
                        <h3 class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Fitcamp Senayan City Victory</h3>
                        <div class="flex items-center gap-1">
                            <img src="assets/images/icons/location.svg" class="flex shrink-0" alt="icon">
                            <p class="text-sm leading-19 tracking-03 opacity-50">Senayan, Jakarta Selatan</p>
                        </div>
                    </div>
                    <div class="thumbnail flex rounded-3xl h-[200px] bg-[#06425E] overflow-hidden">
                        <img src="assets/images/thumbnails/th5.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-['ClashDisplay-SemiBold']">Facilities</p>
                        <button class="font-semibold text-xs leading-14 tracking-05 text-fitcamp-royal-blue">View
                            all</button>
                    </div>
                    <div class="grid grid-cols-3 justify-between gap-3">
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Sauna.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Sauna</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Relax Body</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Shower Room.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Shower</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">After Gym</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Locker.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Locker</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Saving Bag</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border-black/10">
                    <div class="flex items-center gap-3">
                        <img src="assets/images/icons/Daily Time.svg" class="w-10 h-10" alt="icon">
                        <div class="flex flex-col gap-2">
                            <p class="font-['ClashDisplay-SemiBold'] text-sm leading-17 tracking-05">Opening Work</p>
                            <p class="text-xs leading-14 tracking-05 opacity-50">08:00 AM - 09:00 PM</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div class="flex flex-col rounded-3xl p-8 gap-6 bg-white">
                    <div class="title flex flex-col gap-2">
                        <h3 class="font-['ClashDisplay-SemiBold'] leading-19 tracking-05">Fitcamp Senayan City Victory</h3>
                        <div class="flex items-center gap-1">
                            <img src="assets/images/icons/location.svg" class="flex shrink-0" alt="icon">
                            <p class="text-sm leading-19 tracking-03 opacity-50">Senayan, Jakarta Selatan</p>
                        </div>
                    </div>
                    <div class="thumbnail flex rounded-3xl h-[200px] bg-[#06425E] overflow-hidden">
                        <img src="assets/images/thumbnails/th6.png" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-['ClashDisplay-SemiBold']">Facilities</p>
                        <button class="font-semibold text-xs leading-14 tracking-05 text-fitcamp-royal-blue">View
                            all</button>
                    </div>
                    <div class="grid grid-cols-3 justify-between gap-3">
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Sauna.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Sauna</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Relax Body</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Shower Room.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Shower</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">After Gym</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 items-center text-center">
                            <img src="assets/images/icons/Locker.svg" class="w-10 h-10" alt="icon">
                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm leading-16 tracking-05">Locker</p>
                                <p class="opacity-50 text-sm leading-16 tracking-05">Saving Bag</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border-black/10">
                    <div class="flex items-center gap-3">
                        <img src="assets/images/icons/Daily Time.svg" class="w-10 h-10" alt="icon">
                        <div class="flex flex-col gap-2">
                            <p class="font-['ClashDisplay-SemiBold'] text-sm leading-17 tracking-05">Opening Work</p>
                            <p class="text-xs leading-14 tracking-05 opacity-50">08:00 AM - 09:00 PM</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <footer class="flex flex-col w-full max-w-[1312px] mx-auto rounded-[32px] bg-black p-[120px] mt-[120px] mb-16">
        <div class="flex justify-between">
            <div class="flex flex-col gap-6 max-w-[306px] text-start">
                <img src="assets/images/logos/Logo-2.svg" class="h-12 w-fit" alt="icon">
                <p class="tracking-03 text-white">Largest gym in Indonesia, top-tier facilities, premium amenities, and
                    nationwide access to all gym location</p>
            </div>
            <nav class="flex gap-16 justify-end text-white">
                <ul class="flex flex-col gap-4">
                    <p class="font-semibold tracking-03">More to Know</p>
                    <li>
                        <a href="#" class="tracking-03">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="tracking-03">Subscription</a>
                    </li>
                    <li>
                        <a href="#" class="tracking-03">Testimonial</a>
                    </li>
                    <li>
                        <a href="#" class="tracking-03">About</a>
                    </li>
                </ul>
                <ul class="flex flex-col gap-4">
                    <p class="font-semibold tracking-03">Contact Us</p>
                    <li>
                        <a href="#" class="tracking-03">021 543 545 676</a>
                    </li>
                    <li>
                        <a href="#" class="tracking-03">@fitcamp.bodyfit</a>
                    </li>
                    <li>
                        <a href="#" class="tracking-03">admin@fitcamp.com</a>
                    </li>
                </ul>
            </nav>
        </div>
        <hr class="border-white/50 mt-16">
        <div class="flex items-center justify-between mt-[30px]">
            <p class="font-semibold tracking-03 text-white">© 2024 fitcampcorporation</p>
            <ul class="flex items-center justify-end gap-6 text-white">
                <li>
                    <a href="#" class="tracking-03">Term of Services</a>
                </li>
                <li>
                    <a href="#" class="tracking-03">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="tracking-03">Cookies</a>
                </li>
                <li>
                    <a href="#" class="tracking-03">Legal</a>
                </li>
            </ul>
        </div>
    </footer>
@endsection
