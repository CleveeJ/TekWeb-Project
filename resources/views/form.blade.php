@extends('layout')

@section('content')

<div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="drama"
    role="tabpanel"
    aria-labelledby="drama">
    
    <form id="registFormDrama" action="{{ route('dramaParticipantRegist.store') }}" method="POST" enctype="multipart/form-data"
    x-data="{ password: '', password_confirm: '' }"
    class="w-[95vw] sm:w-[69vw] lg:max-w-4xl flex-col mx-auto mb-10 no-border px-12 pb-12 pt-1 rounded-md">
    @csrf     
    <div class="gap-3 md:gap-10 mb-5 md:mb-10 sm:mx-2">
        <!-- Data Anggota -->
        <div class="w-full">
            <div class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-[var(--green1)] after:mt-0.5 after:flex-1 after:border-t after:border-[var(--green1)] ">
                <p class="mx-4 mb-0 text-center font-bold text-white">
                DATA PESERTA
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-3 mb-5 md:mb-10 sm:mx-2">
                <!-- Nama -->
                <div class="flex-col">
                    <label for="name" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Nama Anggota</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="white" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" name="name" id="name"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="Nama Lengkap" value="{{ session('name') }}">
                    </div>
                </div>
                <!-- Email -->
                <div class="flex-col">
                    <label for="email" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Email</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="white" viewBox="0 0 24 24">
                                <path
                                    d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z" />
                                <path
                                    d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z" />
                            </svg>
                        </span>
                        <input type="text" name="email" id="email"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="Email Petra" value="{{ session('email') }}" readonly>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-3 mb-5 md:mb-10 sm:mx-2">
                <!-- NRP -->
                <div class="flex-col">
                    <label for="nrp" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">NRP</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="white" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" name="nrp" id="nrp"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="">
                    </div>
                </div>
                <!-- Jurusan -->
                <div class="flex-col">
                    <label for="major" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Jurusan</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="white" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" name="major" id="major"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="">
                    </div>
                </div>
                <!-- IPK -->
                <div class="flex-col">
                    <label for="ipk" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">IPK (ex: 3.80)</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="white" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" name="ipk" id="ipk"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-3 mb-5 md:mb-10 sm:mx-2">
                <!-- Nomor Telepon -->
                <div class="flex-col">
                    <label for="phone_number" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Nomor Telepon</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                        </span>
                        <input type="text" name="phone_number" id="phone_number"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="Nomor Aktif"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                    </div>
                </div>
                <!-- ID Line -->
                <div class="flex-col">
                    <label for="line_id" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">ID Line</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" height="24" fill="white" viewBox="0 0 512 512">
                            <path d="M311 196.8v81.3c0 2.1-1.6 3.7-3.7 3.7h-13c-1.3 0-2.4-.7-3-1.5l-37.3-50.3v48.2c0 2.1-1.6 3.7-3.7 3.7h-13c-2.1 0-3.7-1.6-3.7-3.7V196.9c0-2.1 1.6-3.7 3.7-3.7h12.9c1.1 0 2.4 .6 3 1.6l37.3 50.3V196.9c0-2.1 1.6-3.7 3.7-3.7h13c2.1-.1 3.8 1.6 3.8 3.5zm-93.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 2.1 1.6 3.7 3.7 3.7h13c2.1 0 3.7-1.6 3.7-3.7V196.8c0-1.9-1.6-3.7-3.7-3.7zm-31.4 68.1H150.3V196.8c0-2.1-1.6-3.7-3.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 1 .3 1.8 1 2.5c.7 .6 1.5 1 2.5 1h52.2c2.1 0 3.7-1.6 3.7-3.7v-13c0-1.9-1.6-3.7-3.5-3.7zm193.7-68.1H327.3c-1.9 0-3.7 1.6-3.7 3.7v81.3c0 1.9 1.6 3.7 3.7 3.7h52.2c2.1 0 3.7-1.6 3.7-3.7V265c0-2.1-1.6-3.7-3.7-3.7H344V247.7h35.5c2.1 0 3.7-1.6 3.7-3.7V230.9c0-2.1-1.6-3.7-3.7-3.7H344V213.5h35.5c2.1 0 3.7-1.6 3.7-3.7v-13c-.1-1.9-1.7-3.7-3.7-3.7zM512 93.4V419.4c-.1 51.2-42.1 92.7-93.4 92.6H92.6C41.4 511.9-.1 469.8 0 418.6V92.6C.1 41.4 42.2-.1 93.4 0H419.4c51.2 .1 92.7 42.1 92.6 93.4zM441.6 233.5c0-83.4-83.7-151.3-186.4-151.3s-186.4 67.9-186.4 151.3c0 74.7 66.3 137.4 155.9 149.3c21.8 4.7 19.3 12.7 14.4 42.1c-.8 4.7-3.8 18.4 16.1 10.1s107.3-63.2 146.5-108.2c27-29.7 39.9-59.8 39.9-93.1z"/>
                        </svg>
                        </span>
                        <input type="text" name="line_id" id="line_id"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="">
                    </div>
                </div>
                <!-- Instagram -->
                <div class="flex-col">
                    <label for="instagram" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Instagram</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" height="24" fill="white" viewBox="0 0 448 512">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                        </svg>
                        </span>
                        <input type="text" name="instagram" id="instagram"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="Akun Utama">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-3 mb-5 md:mb-10 sm:mx-2">
                <!-- Pas Foto -->
                <div class="flex-col">
                    <label class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white" for="self_photo">
                        Pas Foto 3x4 (Max 5 MB)
                    </label>
                    <input class="block w-full text-[3.5vw] sm:text-sm text-white border border-gray-300 rounded-r-lg cursor-pointer bg-transparent backdrop-blur focus:ring-[var(--sand1)] focus:border-[var(--sand1)] placeholder-gray-500" aria-describedby="user_avatar_help" name="self_photo" id="self_photo" type="file" accept="image/*">
                </div>
            
                <!-- Jadwal Hidup -->
                <div class="flex-col">
                    <label class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white" for="life_schedule_photo">
                        Jadwal Hidup (Max 5 MB)
                    </label>
                    <input class="block w-full text-[3.5vw] sm:text-sm text-white border border-gray-300 rounded-r-lg cursor-pointer bg-transparent backdrop-blur focus:ring-[var(--sand1)] focus:border-[var(--sand1)]" aria-describedby="user_avatar_help" name="life_schedule_photo" id="life_schedule_photo" type="file" accept="image/*" >
                </div>
            
                <!-- SS Transkrip -->
                <div class="flex-col">
                    <label class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white" for="transcript_photo">
                        SS Transkrip (Max 5 MB)
                    </label>
                    <input class="block w-full text-[3.5vw] sm:text-sm text-white border border-gray-300 rounded-r-lg cursor-pointer bg-transparent backdrop-blur focus:ring-[var(--sand1)] focus:border-[var(--sand1)]" aria-describedby="user_avatar_help" name="transcript_photo" id="transcript_photo" type="file" accept="image/*" >
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 md:gap-3 mb-5 md:mb-10 sm:mx-2">
                <!-- Tipe Konsumsi -->
                <div class="flex-col">
                    <label class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white" for="dietary">Tipe Konsumsi</label>
                    <ul class="items-center w-full text-sm font-medium text-gray-900 border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" type="radio" value="normal" name="dietary" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-white dark:text-gray-300">Normal</label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-id" type="radio" value="vege" name="dietary" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-white dark:text-gray-300">Vege</label>
                            </div>
                        </li>
                        <li class="w-full">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-military" type="radio" value="vegan" name="dietary" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="horizontal-list-radio-military" class="w-full py-3 ms-2 text-sm font-medium text-white dark:text-gray-300">Vegan</label>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Alergi Makanan -->
                <div class="flex-col">
                    <label for="allergy" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Alergi</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M236.4 61.4L227 75.5c-21.3 32-59.4 48.5-97.3 42.1l-59.6-9.9C33.4 101.6 0 129.9 .1 167.1c0 15.9 6.4 31.2 17.6 42.5l29.2 29.2c11 11 17.2 25.9 17.2 41.5c0 15.8-6.4 30.9-17.7 42L33.3 335.1C22.2 345.9 16 360.7 16 376.2c0 36.8 34.1 64.2 70.1 56.2l62.3-13.8c7.7-1.7 15.7-2.6 23.6-2.6l10 0c27.2 0 53.7 9.3 75 26.3L287.8 467c10.5 8.4 23.6 13 37 13c32.7 0 59.3-26.5 59.3-59.3l0-25.2c0-34.9 21.4-66.2 53.9-78.8l36.9-14.3c22.4-8.7 37.2-30.3 37.2-54.3c0-28.1-20.1-52.3-47.8-57.3l-28-5.1c-36.5-6.7-65.4-34.5-73.6-70.7l-7.1-31.5C348.9 53.4 322.1 32 291.3 32c-22 0-42.6 11-54.9 29.4zM160 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 16a16 16 0 1 1 32 0 16 16 0 1 1 -32 0zm0 80a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                        </span>
                        <input type="text" name="allergy" id="allergy"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="Ditulis '-' bila tidak ada">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-3 mb-5 md:mb-10 sm:mx-2">
                <!-- Riwayat Penyakit -->
                <div class="flex-col">
                    <label for="disease" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Riwayat Penyakit</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="white" viewBox="0 0 512 512">
                                <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/>
                            </svg>
                        </span>
                        <input type="text" name="disease" id="disease"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="Ditulis '-' bila tidak ada">
                    </div>
                </div>
                <!-- Penjelasan Penyakit -->
                <div class="flex-col">
                    <label for="disease_description" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Penjelasan Penyakit</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" height="24" fill="white" viewBox="0 0 512 512">
                                <path d="M96 352L96 96c0-35.3 28.7-64 64-64l256 0c35.3 0 64 28.7 64 64l0 197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7L160 416c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-48 0 0-48c0-8.8-7.2-16-16-16l-32 0zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-160 0C60.9 512 0 451.1 0 376L0 152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88l160 0z"/>
                            </svg>
                        </span>
                        <input type="text" name="disease_description" id="disease_description"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="Ditulis '-' bila tidak ada">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <button type="submit" id="submitDrama"
        class="place-content-center text-white hover:bg-cyan-200/75 ring-2
        ring-cyan-200/75 font-semibold rounded text-sm w-full sm:w-[50%]
        px-5 py-2.5 text-center transition-colors duration-300">SUBMIT</button>
    </div>
</form>
</div>

@endSection