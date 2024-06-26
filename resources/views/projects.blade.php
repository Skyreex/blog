@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-r from-violet-100 to-indigo-100 flex items-center justify-center h-screen">
        <div
            class="w-11/12 sm:w-11/12 md:w-8/12 lg:w-6/12 backdrop-blur-sm bg-white/40 p-6 rounded-lg shadow-sm border-violet-200 border">
            <div class="w-full flex justify-between items-center p-3">
                <h2 class="text-xl font-semibold">My Project</h2>
                <button id="openModalBtn"
                    class="flex items-center bg-gradient-to-r from-violet-300 to-indigo-300  border border-fuchsia-00 hover:border-violet-100 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">
                    <svg class="w-4 h-4 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <p class="text-white">New Project</p>
                </button>
            </div>
            <div class="w-full flex justify-center p-1 mb-4">
                <div class="relative w-full">
                    <input type="text"
                        class="w-full backdrop-blur-sm bg-white/20 py-2 pl-10 pr-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300"
                        placeholder="Search...">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
                <!-- Card 1 -->
                <div
                    class="backdrop-blur-sm bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-violet-200 hover:border-2 transition-colors duration-300">
                    <h2 class="text-xl font-semibold mb-4">Project 1</h2>
                    <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the
                        project.</p>
                    <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">
                        <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
                            <img src="https://placekitten.com/48/48" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/49/49" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/50/50" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/51/51" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/52/52" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                        </dd>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="backdrop-blur-sm bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-violet-200 hover:border-2 transition-colors duration-300">
                    <h2 class="text-xl font-semibold mb-4">Project 2</h2>
                    <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the
                        project.</p>
                    <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">
                        <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
                            <img src="https://placekitten.com/48/48" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/49/49" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/50/50" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/51/51" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/52/52" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                        </dd>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="backdrop-blur-sm bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-violet-200 hover:border-2 transition-colors duration-300">
                    <h2 class="text-xl font-semibold mb-4">Project 3</h2>
                    <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the
                        project.</p>
                    <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">
                        <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
                            <img src="https://placekitten.com/48/48" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/49/49" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/50/50" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/51/51" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/52/52" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                        </dd>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="backdrop-blur-sm bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-violet-200 hover:border-2 transition-colors duration-300">
                    <h2 class="text-xl font-semibold mb-4">Project 4</h2>
                    <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the
                        project.</p>
                    <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">
                        <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
                            <img src="https://placekitten.com/48/48" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/49/49" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/50/50" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/51/51" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                            <img src="https://placekitten.com/52/52" alt=""
                                class="w-6 h-6 rounded-full bg-violet-100" loading="lazy">
                        </dd>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="myModal"
            class="fixed inset-0 z-10 overflow-hidden backdrop-blur-lg hidden flex items-center justify-center transition-transform duration-300">
            <div
                class="modal-container p-6 backdrop-blur-sm bg-white/90 w-11/12 sm:w-11/12 md:w-8/12 lg:w-6/12 rounded-md shadow-sm">
                <h2 class="text-2xl font-semibold mb-6">Create New Project</h2>
                <label for="projectName" class="block text-sm font-medium text-gray-700 mb-2">Project Name</label>
                <input type="text" id="projectName"
                    class="w-full p-2 mb-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300">

                <!-- Flex layout for lg and md screens -->
                <div class="lg:flex">
                    <div class="lg:w-1/2 lg:pr-4">
                        <label for="projectDescription"
                            class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <input id="projectDescription"
                            class="w-full p-2 mb-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300"></input>
                    </div>
                    <div class="lg:w-1/2">
                        <label for="inviteFriend" class="block text-sm font-medium text-gray-700 mb-2">Invite
                            Friend</label>
                        <input type="text" id="inviteFriend"
                            class="w-full p-2 mb-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300">
                    </div>
                </div>

                <div class="flex justify-end">
                    <button
                        class="bg-gradient-to-r from-violet-300 to-indigo-300  border border-fuchsia-00 hover:border-violet-100 text-white font-semibold py-2 px-4 rounded-md mr-2"
                        onclick="createProject()">Create</button>
                    <button
                        class="bg-gradient-to-r from-gray-100 to-slate-200  border border-fuchsia-00 hover:border-violet-100 text-gray-800 font-semibold py-2 px-4 rounded-md transition-colors duration-300"
                        onclick="closeModal()">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Function to open the modal
        function openModal() {
            document.getElementById("myModal").classList.remove("hidden");
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById("myModal").classList.add("hidden");
        }

        // Function to handle project creation (you can customize this function)
        function createProject() {
            var projectName = document.getElementById("projectName").value;
            var projectDescription = document.getElementById("projectDescription").value;
            var inviteFriend = document.getElementById("inviteFriend").value;

            // Add your logic to handle the project creation here
            console.log("Project Name: " + projectName);
            console.log("Project Description: " + projectDescription);
            console.log("Invite Friend: " + inviteFriend);

            // Close the modal after handling the creation
            closeModal();
        }

        // Event listener to open the modal when the button is clicked
        document.getElementById("openModalBtn").addEventListener("click", openModal);
    </script>
@endsection
