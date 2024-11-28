@extends('layout')

@section('content')

<form id="registFormDrama" action="" method="POST" enctype="multipart/form-data"
x-data="{ password: '', password_confirm: '' }"
class="w-[95vw] sm:w-[69vw] lg:max-w-4xl flex-col mx-auto mb-10 no-border px-12 pb-12 pt-1 rounded-md">
    @csrf     
    <div class="gap-3 md:gap-10 mb-5 md:mb-10 sm:mx-2">
        <!-- Data Anggota -->
        <div class="w-full">
            <div class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-[var(--green1)] after:mt-0.5 after:flex-1 after:border-t after:border-[var(--green1)] ">
                <p class="mx-4 mb-0 text-center font-bold text-white">
                DATA RESEP
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-3 mb-5 md:mb-10 sm:mx-2">
                <!-- Nama -->
                <div class="flex-col">
                    <label for="name" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Nama Makanan / Minuman</label>
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
                            placeholder="Nama Lengkap">
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
            <div class="grid grid-cols-1 mb-5 md:mb-10 sm:mx-2">
                <!-- Pas Foto -->
                <div class="flex-col">
                    <label class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white" for="self_photo">
                        Foto Makanan / Minuman (Max 5 MB)
                    </label>
                    <input class="block w-full text-[3.5vw] sm:text-sm text-white border border-gray-300 rounded-r-lg cursor-pointer bg-transparent backdrop-blur focus:ring-[var(--sand1)] focus:border-[var(--sand1)] placeholder-gray-500" aria-describedby="user_avatar_help" name="self_photo" id="self_photo" type="file" accept="image/*">
                </div>
            </div>

            <div class="grid grid-cols-1 mb-5 md:mb-10 sm:mx-2">
                <!-- Bahan -->
                <div class="flex-col">
                    <label for="allergy" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Bahan</label>
                    <div class="flex">
                        <textarea name="allergy" id="allergy"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="Ditulis '-' bila tidak ada"></textarea>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-3 mb-5 md:mb-10 sm:mx-2">
                <!-- Langkah-langkah -->
                <div class="flex-col">
                    <label for="disease" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Langkah-langkah</label>
                    <div class="flex">
                        <textarea name="disease" id="disease"
                            class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                            placeholder="Ditulis '-' bila tidak ada"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <button type="submit" id="submit"
        class="place-content-center text-white hover:bg-cyan-200/75 ring-2
        ring-cyan-200/75 font-semibold rounded text-sm w-full sm:w-[50%]
        px-5 py-2.5 text-center transition-colors duration-300">SUBMIT</button>
    </div>
</form>

@endSection