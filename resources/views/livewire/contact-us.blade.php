@section('title', 'Contact Us')
<div>
    <!-- Contact Us -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl lg:max-w-5xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl ">
                    Contact us
                </h1>
                <p class="mt-1 text-gray-600 ">
                    We'd love to talk about how we can help you.
                </p>
            </div>

            <div class="mt-12 grid items-center lg:grid-cols-2 gap-6 lg:gap-16">
                <!-- Card -->
                <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 ">
                    <h2 class="mb-8 text-xl font-semibold text-gray-800 ">
                        Fill in the form
                    </h2>

                    <x-custom.contact.form />
                </div>
                <!-- End Card -->

                <x-custom.contact.faq />
            </div>
        </div>
    </div>
    <!-- End Contact Us -->
</div>
