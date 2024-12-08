@extends('layout')

@section('content')
<div class="w-full min-h-screen flex justify-center items-center">
<img src="{{asset('assets/rempah_bg.jpeg')}}" alt="Background" class="absolute top-0 left-0 w-full h-screen object-cover">
    <div class="bg-[rgba(0,0,0,0.3)] backdrop-blur-[20px] rounded-xl border border-white">
        <form id="recipeForm" action="" method="POST" enctype="multipart/form-data"
        x-data="{ password: '', password_confirm: '' }"
        class="w-[95vw] sm:w-[69vw] lg:max-w-4xl flex-col mx-auto mb-10 no-border px-12 pb-12 pt-1 rounded-md">
            @csrf     
            <div class="gap-3 md:gap-10 mb-5 md:mb-10 sm:mx-2">
                <!-- Data Anggota -->
                <div class="w-full">
                    <div class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-[var(--green1)] after:mt-0.5 after:flex-1 after:border-t after:border-[var(--green1)] ">
                        <p class="mx-4 mb-0 text-center font-bold text-white text-xl">
                        DATA RESEP
                        </p>
                    </div> 
                    <div class="grid grid-cols-1 mb-5 md:mb-10 sm:mx-2">
                        <!-- Nama -->
                        <div class="flex-col">
                            <label for="name" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Nama Makanan / Minuman</label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-white bg-[var(--blue1)] border border-e-0 border-gray-300 rounded-s-md">
                                    <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 448 512">
                                        <path d="M416 0C400 0 288 32 288 176l0 112c0 35.3 28.7 64 64 64l32 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-128 0-112 0-208c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7L80 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224.4c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16l0 134.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8L64 16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg>
                                </span>
                                <input type="text" name="name" id="name"
                                    class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5">
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 mb-5 md:mb-10 sm:mx-2">
                        <!-- Pas Foto -->
                        <div class="flex-col">
                            <label class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white" for="food_image">
                                Foto Makanan / Minuman
                            </label>
                            <div class="mb-4" id="imagePreviewContainer">
                                <img id="imagePreview" src="#" alt="Image Preview" class="hidden w-full h-auto rounded-lg">
                            </div>
                            <input class="block w-full text-[3.5vw] sm:text-sm text-white border border-gray-300 rounded-r-lg cursor-pointer bg-transparent backdrop-blur focus:ring-[var(--sand1)] focus:border-[var(--sand1)] placeholder-gray-500" aria-describedby="user_avatar_help" name="food_image" id="food_image" type="file" accept="image/*" onchange="previewImage(event)">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 mb-5 md:mb-10 sm:mx-2">
                        <!-- Bahan -->
                        <div class="flex-col">
                            <label for="ingredients" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Bahan</label>
                            <div class="flex">
                                <textarea name="ingredients" id="ingredients"
                                    class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                                    placeholder="Format: Enter Setiap Bahan"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 mb-5 md:mb-10 sm:mx-2">
                        <!-- Langkah-langkah -->
                        <div class="flex-col">
                            <label for="procedures" class="block mb-2 text-[3.5vw] sm:text-sm font-medium text-white">Langkah-langkah</label>
                            <div class="flex">
                                <textarea name="procedures" id="procedures"
                                    class="rounded-none rounded-e-lg bg-transparent backdrop-blur-2xl border border-gray-300 text-white focus:ring-[var(--sand1)] focus:border-[var(--sand1)] block flex-1 min-w-0 w-full text-[3.5vw] sm:text-sm p-1.5 sm:p-2.5"
                                    placeholder="Format: Enter Setiap Prosedur"></textarea>
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
    </div>
</div>
<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function(e) {
            const image = document.getElementById('imagePreview');
            image.src = e.target.result;
            image.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    }
</script>

<script>
    $('#submit').on('click', function(e) {
        e.preventDefault();

        var form =  $('#recipeForm');
        var url = "{{ route('recipeForm.store') }}"
        var method = form.attr('method');

        //show confirmation dialog
        Swal.fire({
            title: "Are you sure your data is correct?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, submit it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var formData = new FormData(form[0]); // Use FormData to handle file uploads
                $.ajax({
                    url: url,
                    type: method,
                    data: formData,
                    processData: false, //to prevent jQuery from automatically transforming the data into a query string
                    contentType: false,
                    success: async function(response) {
                        if (response.success) {
                            await Swal.fire({
                                title: "Success!",
                                text: response.message,
                                icon: "success",
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "OK"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href =
                                        "{{ route('user.form') }}"; //success => refresh page
                                }
                                setTimeout(() => {
                                    window.location.href =
                                        "{{ route('user.form') }}";
                                }, 1500);

                            });
                        } else {
                            await Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: response.message,
                            });
                        }
                    },
                    error: async function(xhr, textStatus, errorThrown) {
                        await Swal.fire({
                            title: 'Oops!',
                            text: `Something went wrong!: ${xhr.status} - ${textStatus}`,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            } else {
                // User canceled the submission
                Swal.fire({
                    title: "Cancelled!",
                    text: "Your data was not submitted.",
                    icon: "info",
                    confirmButtonText: "OK"
                });
            }
        });
    });
</script>
@endSection
