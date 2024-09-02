@extends('layouts.app')

@section('main')
<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="isolate px-6 py-24 bg-[#080719] sm:py-32 lg:px-8">
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl tracking-tight text-white font-extrabold sm:text-4xl">Contact Our Cloud Solutions Team</h2>
    <p class="mt-2 text-lg leading-8 text-gray-300">Connect with our experts to find out how our cloud services can transform your business.</p>
  </div>
  <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-white font-extrabold">First Name</label>
        <div class="mt-2.5">
          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 font-extrabold shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="last-name" class="block text-sm font-semibold leading-6 text-white font-extrabold">Last Name</label>
        <div class="mt-2.5">
          <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 font-extrabold shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="company" class="block text-sm font-semibold leading-6 text-white font-extrabold">Company</label>
        <div class="mt-2.5">
          <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 font-extrabold shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold leading-6 text-white font-extrabold">Email</label>
        <div class="mt-2.5">
          <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 font-extrabold shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm font-semibold leading-6 text-white font-extrabold">Phone Number</label>
        <div class="relative mt-2.5">
          <div class="absolute inset-y-0 left-0 flex items-center">
            <label for="country" class="sr-only">Country</label>
            <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
              <option>US</option>
              <option>CA</option>
              <option>EU</option>
            </select>
            <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </div>
          <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 font-extrabold shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="message" class="block text-sm font-semibold leading-6 text-white font-extrabold">Message</label>
        <div class="mt-2.5">
          <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 font-extrabold shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>
      </div>
      <div class="flex gap-x-4 sm:col-span-2">
        <div class="flex h-6 items-center">
          <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
          <button type="button" class="flex w-8 flex-none cursor-pointer rounded-full bg-gray-200 p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
            <span class="sr-only">Agree to policies</span>
            <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
            <span aria-hidden="true" class="h-4 w-4 translate-x-0 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
          </button>
        </div>
        <label class="text-sm leading-6 text-gray-300" id="switch-1-label">
          By selecting this, you agree to our
          <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
        </label>
      </div>
    </div>
    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Contact Us</button>
    </div>
  </form>
  <div class="mx-auto mt-16 max-w-4xl text-center pt-16">
      <h3 class="text-2xl font-bold text-white">Frequently Asked Questions</h3>
      <div class="mt-8 space-y-6">
          <div class=" bg-indigo-950 p-12 rounded-lg shadow-lg">
              <h4 class="text-xl font-semibold text-white">How do I get started with your cloud services?</h4>
              <p class="mt-2 text-gray-300">To get started, simply reach out to our sales team. We’ll help you choose the right cloud solution tailored to your business needs and guide you through the setup process.</p>
          </div>
          <div class="bg-indigo-950 p-12 rounded-lg shadow-lg">
              <h4 class="text-xl font-semibold text-white">What kind of support do you offer?</h4>
              <p class="mt-2 text-gray-300">We provide comprehensive 24/7 support for all our cloud services. From initial setup to ongoing maintenance, our support team is always available to ensure your cloud infrastructure runs smoothly.</p>
          </div>
          <div class="bg-indigo-950 p-12 rounded-lg shadow-lg">
              <h4 class="text-xl font-semibold text-white">Can I customize my cloud solution?</h4>
              <p class="mt-2 text-gray-300">Absolutely! Our cloud solutions are highly customizable. Our team will work with you to design and implement a solution that meets your specific requirements and scales with your business.</p>
          </div>
      </div>
  </div>
  <section class="relative isolate overflow-hidden pt-24">
      <div class="mx-auto max-w-2xl lg:max-w-4xl">
        <figure class="mt-10">
          <blockquote class="text-center text-xl leading-8 text-white font-extrabold sm:text-2xl sm:leading-9">
            <p>“Partnering with this cloud provider has been a game-changer for our business. Their solutions are robust, scalable, and the support team is exceptional. We couldn't be happier with the results.”</p>
          </blockquote>
          <figcaption class="mt-10">
            <img class="mx-auto h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
              <div class="font-semibold text-white">Judith Black</div>
              <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                <circle cx="1" cy="1" r="1" />
              </svg>
              <div class="text-gray-300">CEO of Workcation</div>
            </div>
          </figcaption>
        </figure>
      </div>
    </section>

</div>



@endsection
