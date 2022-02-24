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
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('edit/update',Auth::id() )}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Lastname</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="lastname" type="text" placeholder="Lastname" name="lastname"
                            value="{{Auth::user()->lastname}}"
                            >
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Name" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="age">Age</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="age" type="text" placeholder="Age" name="age" value="{{Auth::user()->age}}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Email">Email</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="Email" name="email" value="{{Auth::user()->email}}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Role</label>
                        <select
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="role" type="select" placeholder="Role" name="role" value="{{Auth::user()->role}}">
                            @foreach ($roles as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                                
                            @endforeach
                            </select>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Avatar</label>
                        <select
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="avatar" type="select" placeholder="Avatar" name="avatar_id">
                            @foreach ($avatars as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                            </select>
                        {{-- <label class="block text-gray-700 text-sm font-bold mb-2" for="avatar">Avatar</label>
                        <input
                            class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="avatar" type="file" placeholder="Avatar" name="avatar" value="{{Auth::user()->avatar}}"> --}}
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
