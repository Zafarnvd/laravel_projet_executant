<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Avatar') }}
        </h2>
    </x-slot>
    <div class="flex">
        <div class="min-h-screen flex">
            <div class="py-12 px-10 w-1/4 flex flex-auto flex-col">
                <div class="flex items-center space-x-4 p-2 bg-indigo-600 rounded-md">
                    <div>
                        <p class="text-lg text-white font-semibold">Dashboard</p>
                    </div>
                </div>
                <div class="mt-8">
                    <ul class="space-y-10">
                        @admin
                        <li>
                            <a href="{{route('index')}}"
                                class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                                </svg>
                                Users</a>
                        </li>
                        @endadmin
                        @admin
                        <li>
                            <a href="/avatars"
                                class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200"
                                hover:text-indigo-600>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                Avatars</a>
                        </li>
                        @admin
                        <li>
                            <a href="/categories"
                                class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200"
                                hover:text-indigo-600>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Categories</a>
                        </li>
                        @endadmin
                        @admin
                        <li>
                            <a href="/images"
                                class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200"
                                hover:text-indigo-600>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Images</a>
                        </li>
                        @endadmin
                        <li>
                            <a href="/galleries"
                                class="flex items-centerx text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Gallerie</a>
                        </li>
                    </ul>
                </div>
                <div class="flex mt-20 space-x-4 items-center">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </div>
                </div>
            </div>

            {{-- tableau --}}
            <!-- component -->
            <div>
                <div class="flex">

                    @foreach ($avatars as $avatar)
                    
                    <div class="flex flex-col items-center justify-center bg-white p-6 shadow rounded-lg">
                        {{-- <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40"> --}}
                            <img class="rounded-full object-cover " src="{{ asset('storage'.$avatar->img) }}" alt="" class="h-full w-full" />
                        {{-- </div> --}}
                        {{-- {{dd($avatar)}} --}}
                        
                        <h2 class="mt-4 font-bold text-xl">{{ $avatar->name }}</h2>
                        <form method="POST" action="/avatars/delete/{{$avatar->id}}">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                    
                    @endforeach
                </div>

            </div>
            {{-- tableau --}}

            {{-- <table class="max-w-5xl mx-auto h-5 table-auto w-full m-16">

                <tbody class="bg-gray-200">
                    @foreach ($avatars as $avatar)

                    <tr class="bg-white border-b-2 border-gray-200">
                        <td class="px-16 py-2 flex flex-row items-center">
                            <img class="h-8 w-8 rounded-full object-cover " src="{{ asset("img/".$avatar->url) }}"
                                alt="" />
                        </td>
                        <td>
                            <span class="text-center ml-2 font-semibold">{{ $avatar->name }}</span>
                        </td>

                        <td class="px-16 py-2">
                            <span class="text-yellow-500 flex">
                                <form action="{{ route("avatar.destroy",$avatar->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-700 m-1"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                            </span>
                            </button>

                            </form>
                        </td>
                    </tr>
                    <tr>

                    </tr>

                    @endforeach


                </tbody>
            </table> --}}
        </div>
    </div>
</x-app-layout>
