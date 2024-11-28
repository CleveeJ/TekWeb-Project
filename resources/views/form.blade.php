@extends('layout')

@section('content')
<div class="w-full min-h-screen bg-red-200 flex justify-center items-center">
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
                                    placeholder="Format: 5 butir telur, 10 gram gula, ..."></textarea>
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
                                    placeholder="Format: Rawat telor, Buang gula, ..."></textarea>
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
