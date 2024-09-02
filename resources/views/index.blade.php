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

<div class="relative isolate px-6 pt-14 lg:px-8 bg-cover w-[100%]"
    style="background-image: url('{{ asset('storage/images/index/hero-img.png') }}'); background-size: 110%; background-position: center;">


        <div class="mx-auto max-w-2xl h-[100vh] py-28 animate-fadeInUp-animation">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-8 py-2.5 text-sm leading-6 text-white ring-1 ring-gray-900/10 hover:ring-gray-900/20 animate-fadeInLeft-animation border border-white">
                    Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span
                            class="absolute inset-0" aria-hidden="true"></span>Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Innovative Technology, Transformative Results.</h1>
                <p class="mt-6 text-lg leading-8 text-white animate">At TechSolutions Inc., we provide innovative and tailored technology services to drive your business forward</p>
                <div class="mt-10 flex items-center justify-center gap-x-6 animate-fadeInRight-animation">
                    <a href="/services"
    class="rounded-lg border-4 border-[#1f2453] bg-gray-900 px-7 py-3 text-sm font-semibold text-white shadow-[0_0_15px_#3a429a,0_0_25px_#3a429a,0_0_35px_#3a429a,0_0_45px_#3a429a] transition-all duration-200 ease-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">
    Get started
</a>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-[#080719]">
        <div class="py-24 home-card-right">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                        Unmatched Performance & Security
                    </h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">
                        Our cloud solutions offer the best in speed, reliability, and data protection.
                    </p>
                </div>
                <div class="mt-16 grid grid-cols-1 gap-y-16 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-12">
                    <div class="text-center">
                        <div class="flex justify-center">
                            <svg class="h-12 w-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6M9 8h6M4 6h16M4 10h16M4 14h16M4 18h16" /></svg>
                        </div>
                        <h3 class="mt-6 text-lg font-semibold text-white">
                            High-Speed Connectivity
                        </h3>
                        <p class="mt-4 text-sm text-gray-400">
                            Experience lightning-fast data transfer speeds.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="flex justify-center">
                            <svg class="h-12 w-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10M21 7v10M7 12h10M12 17V7" /></svg>
                        </div>
                        <h3 class="mt-6 text-lg font-semibold text-white">
                            Top-Notch Security
                        </h3>
                        <p class="mt-4 text-sm text-gray-400">
                            Safeguard your media with our state-of-the-art security protocols.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="flex justify-center">
                            <svg class="h-12 w-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354l-1.536 4.593H7.464l-1.536 4.593L12 19.646l6.072-6.106-1.536-4.593h-3.001L12 4.354z" /></svg>
                        </div>
                        <h3 class="mt-6 text-lg font-semibold text-white">
                            Seamless Scalability
                        </h3>
                        <p class="mt-4 text-sm text-gray-400">
                            Scale your media storage effortlessly as your needs grow.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-24 home-card-left">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">From the Blog</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Learn how to grow your business with our expert advice.</p>
                </div>
                <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article class="flex flex-col items-start justify-between transition-transform duration-200 ease-out hover:scale-105 hover:bg-[#151736] p-6 rounded-lg">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2024-09-02" class="text-gray-500">September 2, 2024</time>
                            <a href="#" class="relative z-10 rounded-full bg-blue-500 px-3 py-1.5 font-medium text-white hover:bg-blue-600">Technology</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    How to Optimize Your Cloud Strategy
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-400">
                                Discover the key steps to enhancing your cloud infrastructure and maximizing ROI.
                            </p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">                            <div class="text-sm leading-6">
                                <p class="font-semibold text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        John Doe
                                    </a>
                                </p>
                                <p class="text-gray-500">Senior Cloud Architect</p>
                            </div>
                        </div>
                    </article>

                    <!-- Article 2 -->
                    <article class="flex flex-col items-start justify-between transition-transform duration-200 ease-out hover:scale-105 hover:bg-[#151736] p-6 rounded-lg">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2024-08-25" class="text-gray-500">August 25, 2024</time>
                            <a href="#" class="relative z-10 rounded-full bg-blue-500 px-3 py-1.5 font-medium text-white hover:bg-blue-600">Business</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Scaling Your Startup: Tips from the Experts
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-400">
                                Learn how to effectively scale your startup with advice from industry leaders.
                            </p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">                            <div class="text-sm leading-6">
                                <p class="font-semibold text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Jane Smith
                                    </a>
                                </p>
                                <p class="text-gray-500">Startup Advisor</p>
                            </div>
                        </div>
                    </article>

                    <!-- Article 3 -->
                    <article class="flex flex-col items-start justify-between transition-transform duration-200 ease-out hover:scale-105 hover:bg-[#151736] p-6 rounded-lg">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2024-08-18" class="text-gray-500">August 18, 2024</time>
                            <a href="#" class="relative z-10 rounded-full bg-blue-500 px-3 py-1.5 font-medium text-white hover:bg-blue-600">Security</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Protecting Your Data in the Cloud
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-400">
                                Understand the latest strategies for securing your cloud environment against threats.
                            </p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">                            <div class="text-sm leading-6">
                                <p class="font-semibold text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Mike Jones
                                    </a>
                                </p>
                                <p class="text-gray-500">Cybersecurity Expert</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        {{-- <div class="py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">From the blog</h2>
                <p class="mt-2 text-lg leading-8 text-white">Learn how to grow your business with our expert advice.</p>
              </div>
              <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article class="flex max-w-xl flex-col items-start justify-between hover:position-y:5px;">
                  <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-white">Mar 16, 2020</time>
                    <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                  </div>
                  <div class="group relative">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-white group-hover:text-gray-600">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Boost your conversion rate
                      </a>
                    </h3>
                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-white">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                  </div>
                  <div class="relative mt-8 flex items-center gap-x-4">
                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                    <div class="text-sm leading-6">
                      <p class="font-semibold text-white">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Michael Foster
                        </a>
                      </p>
                      <p class="text-white">Co-Founder / CTO</p>
                    </div>
                  </div>
                </article>
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                      <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                      <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                      <h3 class="mt-3 text-lg font-semibold leading-6 text-white group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Boost your conversion rate
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm leading-6 text-white">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                      <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                      <div class="text-sm leading-6">
                        <p class="font-semibold text-white">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Michael Foster
                          </a>
                        </p>
                        <p class="text-white">Co-Founder / CTO</p>
                      </div>
                    </div>
                  </article>
                  <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                      <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                      <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                      <h3 class="mt-3 text-lg font-semibold leading-6 text-white group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Boost your conversion rate
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm leading-6 text-white">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                      <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                      <div class="text-sm leading-6">
                        <p class="font-semibold text-white">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Michael Foster
                          </a>
                        </p>
                        <p class="text-white">Co-Founder / CTO</p>
                      </div>
                    </div>
                  </article>

                <!-- More posts... -->
              </div>
            </div>
          </div> --}}
          <div class="relative py-24 home-card-up">
            <div class="absolute inset-0 bg-cover bg-center opacity-25" style="background-image: url('https://example.com/path-to-your-image.jpg');"></div>
            <div class="relative mx-auto max-w-7xl px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Ready to Elevate Your Media Management?
                </h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    Join countless businesses that have transformed their media strategies with our cloud solutions.
                </p>
                <div class="mt-10 flex justify-center gap-x-6">
                    <a href="#"
                        class="rounded-lg border-2 border-blue-500 bg-transparent px-7 py-3 text-sm font-semibold text-white shadow-[0_0_15px_#4fd1c5,0_0_25px_#4fd1c5,0_0_35px_#4fd1c5,0_0_45px_#4fd1c5] transition-all duration-200 ease-out hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
