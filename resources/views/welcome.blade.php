<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite('resources/css/app.css')

    </head>
    <body class="bg-dark-green text-accent-light flex p-6 lg:p-8 min-h-screen flex-col lg:flex-row">
    <div class="lg:basis-1/3 p-8 lg:p-24 items-center lg:justify-center">
        <h1 class="text-5xl">Katey Boster</h1>
        <h2>Backend Web Developer</h2>
        <p class="italic">Laravel | PHP | Tailwind | MySQL</p>
    </div>

    <div class="lg:hidden">
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-64 h-1 my-8 bg-accent-content border-0 rounded-sm dark:bg-gray-700">
            <div class="absolute px-4 -translate-x-1/2 text-accent-bright bg-dark-green left-1/2 dark:bg-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                </svg>
            </div>
        </div>
    </div>

    <div class="lg:basis-2/3 lg:pt-24">
        <p>
            Bacon ipsum dolor amet ham hock chicken pork chop meatball jerky pig tenderloin burgdoggen. Tenderloin
            porchetta rump buffalo andouille pork doner venison. Prosciutto pork chop turkey buffalo. Short ribs swine
            leberkas alcatra pastrami meatball. Leberkas short ribs burgdoggen, shankle ham ribeye tail short loin
            salami.
        </p>

        <p>
            Bacon shoulder hamburger venison ham hock. Tenderloin jerky burgdoggen beef buffalo porchetta beef ribs
            salami bacon alcatra hamburger meatloaf shank. Pork ham porchetta andouille flank cupim tail bresaola jowl.
            Tongue chicken pastrami tenderloin, t-bone ham filet mignon ribeye brisket. Venison meatball picanha sirloin
            pig boudin. Ribeye salami jerky frankfurter pork belly beef ribs meatball strip steak bresaola tongue
            alcatra biltong pork sausage.
        </p>

        <p>
            Brisket burgdoggen kevin ground round hamburger, short loin cupim bresaola. Shankle chislic corned beef
            sirloin brisket tenderloin. Chicken shank strip steak buffalo. Picanha shank burgdoggen sausage tongue
            venison chislic meatloaf corned beef pork chop bresaola shankle cupim swine tri-tip.
        </p>

        <p>
            Shank picanha frankfurter meatloaf chislic tenderloin jowl ham hock. Fatback tri-tip ham hock landjaeger
            prosciutto capicola jerky cupim. Tongue pork chop tail flank doner fatback biltong short loin chicken ground
            round strip steak short ribs. Meatball chuck bresaola, cow flank pig pork loin chislic ground round sausage
            boudin. Ham ground round brisket, drumstick pork filet mignon cupim rump venison beef jerky bresaola sausage
            tail.
        </p>

        <p>
            Swine alcatra jerky salami filet mignon cow. Ground round leberkas swine pancetta andouille. Drumstick
            pancetta strip steak, t-bone flank hamburger boudin sausage beef pork loin pastrami rump picanha pork belly.
            Ball tip burgdoggen kielbasa shoulder pastrami ham. Frankfurter drumstick doner sausage bacon t-bone
            burgdoggen short loin ham. Brisket picanha fatback venison chicken. Picanha biltong pig ground round jowl.
        </p>
    </div>
    {{--        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">--}}
{{--            @if (Route::has('login'))--}}
{{--                <nav class="flex items-center justify-end gap-4">--}}
{{--                    @auth--}}
{{--                        <a--}}
{{--                            href="{{ url('/dashboard') }}"--}}
{{--                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"--}}
{{--                        >--}}
{{--                            Dashboard--}}
{{--                        </a>--}}
{{--                    @else--}}
{{--                        <a--}}
{{--                            href="{{ route('login') }}"--}}
{{--                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"--}}
{{--                        >--}}
{{--                            Log in--}}
{{--                        </a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a--}}
{{--                                href="{{ route('register') }}"--}}
{{--                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">--}}
{{--                                Register--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </nav>--}}
{{--            @endif--}}
{{--        </header>--}}
{{--        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">--}}
{{--            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">--}}
{{--                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">--}}
{{--                    <h1 class="mb-1 font-bold text-2xl">Katey Boster</h1>--}}
{{--                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Back-End Web Engineer</p>--}}
{{--                </div>--}}
{{--            </main>--}}
{{--        </div>--}}

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
