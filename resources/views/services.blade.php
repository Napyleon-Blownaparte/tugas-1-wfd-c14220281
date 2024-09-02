@extends('layouts.app')

@section('main')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observerRight = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeInRight-animation');
                        observerRight.unobserve(entry.target);
                    }
                });
            });

            const observerLeft = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeInLeft-animation');
                        observerLeft.unobserve(entry.target);
                    }
                });
            });

            const observerUp = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeInUp-animation');
                        observerUp.unobserve(entry.target);
                    }
                });
            });

            const cardsRight = document.querySelectorAll('.home-card-right');
            const cardsLeft = document.querySelectorAll('.home-card-left');
            const cardsUp = document.querySelectorAll('.home-card-up');

            cardsRight.forEach(card => {
                observerRight.observe(card);
            });

            cardsLeft.forEach(card => {
                observerLeft.observe(card);
            });

            cardsUp.forEach(card => {
                observerUp.observe(card);
            });
        });
    </script>
    <div class="bg-[#080719] py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="home-card-left mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 pt-8 pb-24">
                <div class="lg:pr-8 lg:pt-4 ">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base font-semibold leading-7 text-indigo-600">Accelerate Your Cloud Journey</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-white font-extrabold sm:text-4xl">Optimize with
                            Precision</p>
                        <p class="mt-6 text-lg leading-8 text-gray-300">Experience seamless cloud integration with our
                            cutting-edge solutions designed to enhance performance and reliability.</p>
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-300 lg:max-w-none">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-white font-extrabold">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Effortless Deployment
                                </dt>
                                <dd class="inline">Deploy applications quickly with our push-to-deploy feature. Simplify
                                    your release process and focus on innovation.</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-white font-extrabold">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Secure SSL Certificates
                                </dt>
                                <dd class="inline">Ensure your data's security with our SSL certificates.</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-white font-extrabold">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                        <path fill-rule="evenodd"
                                            d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Reliable Database Backups
                                </dt>
                                <dd class="inline">Safeguard your data with our automated database backups. Ensure business
                                    continuity with minimal effort.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="relative overflow-hidden w-[46.4em] translate-y-2">
                    <img src="https://r4.wallpaperflare.com/wallpaper/77/154/473/server-room-lights-dark-wallpaper-fcc5c2b733b7e6dfd25afdc81a902f21.jpg"
                        alt="Cloud service infrastructure"
                        class="w-full h-[500px] object-cover rounded-tl-3xl rounded-bl-3xl shadow-lg">
                </div>
            </div>

            <div class="mx-auto max-w-7xl px-6 lg:px-8 pb-24 home-card-up">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold leading-7 text-indigo-600">Transform Your Cloud Experience</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-white font-extrabold sm:text-4xl">Complete Cloud
                        Solutions</p>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Discover our comprehensive cloud services designed to
                        elevate your operations.</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-16 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-white font-extrabold">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                    </svg>
                                </div>
                                Push-to-Deploy
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-300">Streamline your deployment process with our
                                push-to-deploy capability. Fast, efficient, and reliable.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-white font-extrabold">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>
                                Secure SSL Certificates
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-300">Enhance your data protection with SSL
                                certificates. Ensure secure communication and build trust with your clients.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-white font-extrabold">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </div>
                                Simplified Queues
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-300">Manage your cloud resources efficiently with
                                our intuitive queue management. Optimize performance and reduce latency.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-white font-extrabold">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                    </svg>
                                </div>
                                Advanced Security
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-300">Protect your cloud environment with our
                                advanced security features. Stay ahead of threats with robust measures and proactive
                                monitoring.</dd>
                        </div>
                    </dl>
                </div>
            </div>


            <!-- Hero Section -->
            <div class="relative isolate px-6 pt-14 lg:px-8">
                {{-- <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl">
                <svg class="relative left-[calc(50%-13rem)] -z-10 max-w-none -translate-x-1/2 rotate-[30deg] -scale-x-[-1] text-[#151736]" fill="none" viewBox="0 0 1155 678">
                    <path d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z" fill="url(#gradient)" />
                    <defs>
                        <linearGradient id="gradient" x1="0" x2="1" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9089FC" />
                            <stop offset={1} stop-color="#FF80B5" />
                        </linearGradient>
                    </defs>
                </svg>
            </div> --}}
                <div class="mx-auto max-w-3xl text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">Our Cloud Services</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Empowering your business with cutting-edge cloud
                        solutions and unparalleled service.</p>
                </div>
            </div>


            <!-- Services Section -->
            <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-16 home-card-right">
                <div class="grid grid-cols-1 gap-y-16 sm:grid-cols-2 md:grid-cols-3 gap-x-12">
                    <!-- Service 1 -->
                    <div
                        class="relative overflow-hidden rounded-2xl bg-indigo-950 p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                        <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl">
                            <svg class="relative -translate-x-1/2 rotate-[30deg] max-w-none -scale-x-[-1] text-[#151736]"
                                fill="none" viewBox="0 0 1155 678">
                                <path
                                    d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z"
                                    fill="url(#gradient2)" />
                                <defs>
                                    <linearGradient id="gradient2" x1="0" x2="1"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9089FC" />
                                        <stop offset={1} stop-color="#FF80B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold text-white">Cloud Hosting</h3>
                        <p class="mt-4 text-gray-300">Reliable and scalable cloud hosting solutions to keep your
                            applications running smoothly. Enjoy high performance and uptime with our state-of-the-art
                            infrastructure.</p>
                        <a href="#" class="mt-6 inline-block text-sky-600 hover:text-sky-900 font-semibold">Learn
                            More</a>
                    </div>

                    <!-- Service 2 -->
                    <div
                        class="relative overflow-hidden rounded-2xl bg-indigo-950 p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                        <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl">
                            <svg class="relative -translate-x-1/2 rotate-[30deg] max-w-none -scale-x-[-1] text-[#151736]"
                                fill="none" viewBox="0 0 1155 678">
                                <path
                                    d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z"
                                    fill="url(#gradient3)" />
                                <defs>
                                    <linearGradient id="gradient3" x1="0" x2="1"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9089FC" />
                                        <stop offset={1} stop-color="#FF80B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold text-white">Data Backup</h3>
                        <p class="mt-4 text-gray-300">Ensure your data is safe with our automated backup solutions. Our
                            services offer secure, reliable backups with easy recovery options for peace of mind.</p>
                        <a href="#" class="mt-6 inline-block text-sky-600 hover:text-sky-900 font-semibold">Learn
                            More</a>
                    </div>

                    <!-- Service 3 -->
                    <div
                        class="relative overflow-hidden rounded-2xl bg-indigo-950 p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                        <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl">
                            <svg class="relative -translate-x-1/2 rotate-[30deg] max-w-none -scale-x-[-1] text-[#151736]"
                                fill="none" viewBox="0 0 1155 678">
                                <path
                                    d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z"
                                    fill="url(#gradient4)" />
                                <defs>
                                    <linearGradient id="gradient4" x1="0" x2="1"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9089FC" />
                                        <stop offset={1} stop-color="#FF80B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold text-white">Cloud Security</h3>
                        <p class="mt-4 text-gray-300">Protect your assets with our comprehensive cloud security solutions.
                            We provide robust protection against threats with advanced monitoring and encryption.</p>
                        <a href="#" class="mt-6 inline-block text-sky-600 hover:text-sky-900 font-semibold">Learn
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class=" py-40">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Why Choose Us</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-300">Our commitment to excellence and innovation sets us
                            apart. Discover the features that make us your ideal cloud partner.</p>
                    </div>
                    <div class="mt-16 grid grid-cols-1 gap-y-12 sm:grid-cols-2 md:grid-cols-3 gap-x-12 home-card-left">
                        <!-- Feature 1 -->
                        <div
                            class="relative overflow-hidden rounded-2xl bg-indigo-950 p-10 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                            <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl">
                                <svg class="relative -translate-x-1/2 rotate-[30deg] max-w-none -scale-x-[-1] text-[#151736]"
                                    fill="none" viewBox="0 0 1155 678">
                                    <path
                                        d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z"
                                        fill="url(#gradient5)" />
                                    <defs>
                                        <linearGradient id="gradient5" x1="0" x2="1"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#9089FC" />
                                            <stop offset={1} stop-color="#FF80B5" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-extrabold text-white">Scalable Solutions</h3>
                            <p class="mt-4 text-gray-300">Our cloud services are designed to scale with your business
                                needs, providing you with the flexibility to grow without limits.</p>
                        </div>

                        <!-- Feature 2 -->
                        <div
                            class="relative overflow-hidden rounded-2xl bg-indigo-950 p-10 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                            <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl">
                                <svg class="relative -translate-x-1/2 rotate-[30deg] max-w-none -scale-x-[-1] text-[#151736]"
                                    fill="none" viewBox="0 0 1155 678">
                                    <path
                                        d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z"
                                        fill="url(#gradient6)" />
                                    <defs>
                                        <linearGradient id="gradient6" x1="0" x2="1"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#9089FC" />
                                            <stop offset={1} stop-color="#FF80B5" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-extrabold text-white">24/7 Support</h3>
                            <p class="mt-4 text-gray-300">Our dedicated support team is available around the clock to
                                assist with any issues or questions you may have, ensuring seamless service.</p>
                        </div>

                        <!-- Feature 3 -->
                        <div
                            class="relative overflow-hidden rounded-2xl bg-indigo-950 p-10 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                            <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl">
                                <svg class="relative -translate-x-1/2 rotate-[30deg] max-w-none -scale-x-[-1] text-[#151736]"
                                    fill="none" viewBox="0 0 1155 678">
                                    <path
                                        d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z"
                                        fill="url(#gradient6)" />
                                    <defs>
                                        <linearGradient id="gradient6" x1="0" x2="1"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#9089FC" />
                                            <stop offset={1} stop-color="#FF80B5" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-extrabold text-white">High Performance</h3>
                            <p class="mt-4 text-gray-300">Experience top-tier performance with our high-speed
                                infrastructure and optimized cloud solutions tailored to your needs.</p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Testimonials Section -->
            <div class="py-20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">What Our Clients Say</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-300">Hear from our satisfied clients who have
                            experienced the transformative power of our cloud services.</p>
                    </div>
                    <div class="mt-16 flex flex-col gap-y-12 sm:gap-y-16 lg:flex-row lg:gap-x-12 home-card-right">
                        <!-- Testimonial 1 -->
                        <div
                            class="relative overflow-hidden rounded-2xl bg-indigo-950 p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                            <svg class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" fill="none"
                                viewBox="0 0 1155 678">
                                <path
                                    d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z"
                                    fill="url(#gradient8)" />
                                <defs>
                                    <linearGradient id="gradient8" x1="0" x2="1"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9089FC" />
                                        <stop offset={1} stop-color="#FF80B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <blockquote class="text-gray-300">
                                <p class="text-lg font-semibold">“TechSolutions Inc. has transformed our business with
                                    their exceptional cloud services. Our operations are more efficient and scalable than
                                    ever before.”</p>
                                <footer class="mt-4 text-sm font-extrabold text-gray-300">
                                    <p>- Alex Johnson</p>
                                    <p>CEO, FutureTech</p>
                                </footer>
                            </blockquote>
                        </div>

                        <!-- Testimonial 2 -->
                        <div
                            class="relative overflow-hidden rounded-2xl bg-indigo-950 p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                            <svg class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" fill="none"
                                viewBox="0 0 1155 678">
                                <path
                                    d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z"
                                    fill="url(#gradient9)" />
                                <defs>
                                    <linearGradient id="gradient9" x1="0" x2="1"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9089FC" />
                                        <stop offset={1} stop-color="#FF80B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <blockquote class="text-gray-300">
                                <p class="text-lg font-semibold">“Their cloud solutions are reliable and secure. We have
                                    seen a significant improvement in performance and customer satisfaction.”</p>
                                <footer class="mt-4 text-sm font-extrabold text-gray-300">
                                    <p>- Jamie Lee</p>
                                    <p>CTO, InnovateCorp</p>
                                </footer>
                            </blockquote>
                        </div>

                        <!-- Testimonial 3 -->
                        <div
                            class="relative overflow-hidden rounded-2xl bg-indigo-950 p-6 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                            <svg class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" fill="none"
                                viewBox="0 0 1155 678">
                                <path
                                    d="M317.305 641.426C420.704 555.63 545.736 497.472 689.527 469.09C832.668 440.674 988.849 442.594 1161.36 503.291L1170.14 300.178L-208.345 495.01L317.305 641.426Z"
                                    fill="url(#gradient10)" />
                                <defs>
                                    <linearGradient id="gradient10" x1="0" x2="1"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9089FC" />
                                        <stop offset={1} stop-color="#FF80B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <blockquote class="text-gray-300">
                                <p class="text-lg font-semibold">“The customer support is exceptional. Whenever we face
                                    issues, their team is quick to respond and resolve problems efficiently.”</p>
                                <footer class="mt-4 text-sm font-extrabold text-gray-300">
                                    <p>- Morgan Smith</p>
                                    <p>COO, Synergy Solutions</p>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
