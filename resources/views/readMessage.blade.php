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
                            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                <a href="{{ route('editProfile') }}">Edit Profile</a>
                            </button>
                        </div>
                        
                        <div class="mx-5 mt-5 mb-5">
                            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                <a href="{{ route('messages') }}">Messages</a>
                            </button>
                        </div>


                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="flex flex-col justify-center items-center bg-gray-100 mt-11">

                            <img  class="rounded-full w-48" src="https://i.pinimg.com/originals/a8/bc/90/a8bc90ea196737604770aaf9c2d56a51.jpg">
                            <p class="text-xl pb-3 text-center">Donnie Atwood</p>
                            
                            <p class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus debitis laboriosam eligendi corrupti dolor! Eaque laborum accusamus quae nesciunt quisquam beatae laudantium modi, aut culpa dignissimos odit natus iure quia reiciendis, esse libero nihil impedit eos delectus quo. Molestias nobis veniam ipsa similique ex eum. Pariatur possimus consectetur, tenetur velit quas voluptatum, consequatur molestiae reiciendis sint, dolore atque. Error, quasi?</p>

                            <form action="#" class="w-full">                       
                              <div class="p-3">
                                <input class="block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700 leading-5 focus:outline-none focus:ring-2 focus:ring-light-blue-300" type="text" placeholder="Subject" required>
                              </div>
                              
                              <div class="p-3">
                                <textarea class="resize-none border rounded-md block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700 leading-5 focus:outline-none focus:ring-2 focus:ring-light-blue-300 h-56" placeholder="Message" required></textarea>
                              </div>
                              <div class="p-3 pt-4">
                              <button class="w-full bg-gray-700 hover:bg-gray-900 text-white font-bold py-3 px-4 rounded text-2xl">
                              Reply
                              </button>
                            </form>
                        </div>


                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
