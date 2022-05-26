@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                    Hello Tim!
                    <br>
                    I'm excited to work with you soon!
                </h1>
                <a
                    href="/login"
                    class="text-center bg-gray-50 text-black py-2 px-4 font-bold text-xl uppercase"
                    style="border: solid black 2px;">
                    Login
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://caleblent.com/CalebBlog.png" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                This is my demo project.
            </h2>

            <p class="py-8 text-gray-500 text-s">
                I had built a Todo app but couldn't get the environment set up right. I had better success creating this blog.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Built with the PHP Laravel framework.
            </p>

            <a
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Check out blog posts
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm going to become proficient in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            PHP Laravel
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Wordpress
        </span>
        <span class="font-extrabold block text-4xl py-1">
            FileMaker
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Security
        </span>
    </div>

    <div class="text-center py-10">
        <!-- <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Post
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Below is the most recent post. More available on the <a href="/blog"> blog page</a>.
        </p> -->
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-blue-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <!-- <span class="uppercase text-xs">
                    PHP
                </span> -->

                <h3 class="text-xl font-bold py-3">
                    I'm a tad bit biased, but I think I would make an excellent addition to the Luminfire team!
                </h3>

                <h3 class="text-xl font-bold pt-3 pb-10">
                    I have a passion for mathematics and computer science technologies, and would love to develop software with new technologies.
                </h3>

                <a
                    href="https://caleblent.com/"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Portfolio site
                </a>
            </div>
        </div>
        <div>
            <img src="https://caleblent.com/LetsTalkBusiness.png" alt="">
        </div>
    </div>
@endsection
