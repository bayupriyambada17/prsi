<footer class="mt-auto w-full py-10 px-4 sm:px-6 lg:px-8 mx-auto bg-white ">
    <div class="mx-auto container">
        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 mb-10">
            <div class="col-span-full hidden lg:col-span-1 lg:block">
                <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 "
                    href="{{ route('home') }}" wire:navigate aria-label="Brand">
                    <img src="{{ asset('img/prsi.png') }}" alt="logo-prsi" class="w-16">
                </a>
                <p class="mt-3 text-xs sm:text-sm text-gray-600 ">
                    © {{ date('Y') }} PRSI.
                </p>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-900 uppercase ">
                    Product
                </h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">Pricing</a>
                    </p>
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">Changelog</a>
                    </p>
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">Docs</a>
                    </p>
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">Download</a>
                    </p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-900 uppercase ">
                    Company
                </h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">About us</a>
                    </p>
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">Blog</a>
                    </p>
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">Careers</a>
                        <span class="inline text-blue-600 ">— We're hiring</span>
                    </p>

                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-900 uppercase ">
                    Resources
                </h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">Community</a>
                    </p>
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">Help & Support</a>
                    </p>
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">eBook</a>
                    </p>
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">What's New</a>
                    </p>
                    <p>
                        <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 "
                            href="#">Status</a>
                    </p>
                </div>
            </div>
            <!-- End Col -->


        </div>
        <!-- End Grid -->
    </div>
</footer>
