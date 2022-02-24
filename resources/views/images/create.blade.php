<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
    </x-slot>
    <!--  Application Details Start -->
    <div class="w-full bg-grey-500">
        <div class="container mx-auto py-8">
            <div class="w-96 mx-auto bg-white rounded shadow">
                <div class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500">Student Application
                </div>
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('categories.store' )}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">name</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="name" name="name"
                            >
                    </div>
                
                    <div class="flex justify-center">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Changer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  Application Details End -->
</x-app-layout>
