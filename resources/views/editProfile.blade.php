<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex">
                    <div>

                        <div class="mx-5 mt-5">
                            <button class="w-full bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                <a href="{{ route('editProfile') }}">Edit Profile</a>
                            </button>
                        </div>
                        
                        <div class="mx-5 mt-5 mb-5">
                            <button class="w-full bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                <a href="{{ route('messages') }}">Messages</a>
                            </button>
                        </div>


                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">

                        <div class="flex items-center justify-center">
                            <div class="bg-white w-1/3 mt-10 rounded-lg">
                              <div class="flex items-center justify-center pt-10 flex-col">
                                <img src="https://i.pinimg.com/originals/a8/bc/90/a8bc90ea196737604770aaf9c2d56a51.jpg" class="rounded-full w-48">
                                <h1 class="text-gray-800 font-semibold text-xl mt-5">Donnie Atwood</h1>
                                <h1 class="text-gray-500 text-sm">Seoul, South Korea</h1>
                                  <h1 class="text-gray-500 text-sm p-4 text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                  </h1>
                              </div>
                              <div class="flex justify-between p-4">
                                <div>
                                  <h1 class="text-xs uppercase text-gray-500">Membership</h1>
                                  <h1 class="text-xs text-yellow-500">Basic</h1>
                                </div>
                                <div>
                                  <button class="text-xs text-green-300 border-2 py-1 px-2 border-green-300">Get Bee-Certified</button>
                                </div>
                              </div>
                            </div>
                          
                          </div>


                          <div class="w-full">
                            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                              <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                  Bio
                                </label>
                                <textarea class="resize rounded-md w-full"></textarea>
                              </div>

                              <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                  Location
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="US">
                              </div>

                              <div class="flex items-center justify-center">
                                <button class="inline-block align-baseline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                  Update Profile
                                </button>
                                
                              </div>
                            </form>
                            <p class="text-center text-gray-500 text-xs">
                              &copy;2020 Acme Corp. All rights reserved.
                            </p>
                          </div>
                          

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
