<div class="relative flex flex-col bg-gray-300">
    <img class="absolute top-0 bottom-0 z-0 h-full w-full object-cover"
        src="https://assets.nflxext.com/ffe/siteui/vlv3/e178a4e7-4f52-4661-b2ae-41efa25dca7c/60dd20cf-7213-48a1-b253-6484d62d96a8/IN-en-20210222-popsignuptwoweeks-perspective_alpha_website_small.jpg"
        alt="">
    <div class="absolute top-0 bottom-0 left-0 right-0 z-10 h-full w-full bg-black opacity-60"></div>

    @auth
        <div class="z-30 flex flex-row justify-end px-12 py-4">
            <div class="cursor-pointer rounded bg-red-600 px-4 py-1 text-gray-100">
                <a href="{{ route('netflix.index') }}" clas="px-4 py-1 text-gray-100 bg-red-600 rounded cursor-pointer">
                    Watch Movie &rsaquo;
                </a>
            </div>
        </div>
    @endauth

    <div class="z-30 flex flex-col items-center justify-center py-48 text-gray-100 lg:py-32">
        <h1 class="w-full px-12 text-center text-4xl font-bold md:w-1/2 lg:px-0 lg:text-6xl">Unlimited movies,
            TV shows and more.</h1>
        <p class="mt-6 px-12 text-center text-xl md:text-2xl">Watch anywhere. Cancel anytime.</p>
        <x-newsletter />
    </div>
</div>

