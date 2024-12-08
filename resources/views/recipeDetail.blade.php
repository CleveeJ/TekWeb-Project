@extends('layout')
@section('style')
@endSection

@section('content')

@include('navbar')
<div class="flex flex-col justify-center items-start min-w-full min-h-screen px-5 py-14 md:px-20 md:py-16">
    <!-- Navigation Back -->
    <div class="w-full flex flex-row items-center space-x-2">
        <a href="{{ route('user.recipes') }}" class="text-sm underline hover:text-[#f1683a]">Recipes</a>
        <span class="text-sm">></span>
        <p class="text-sm">{{$title}}</p>
    </div>

    <!-- Nama Makanan -->
    <div id="judul" class="flex flex-col sm:flex-row justify-center items-center sm:items-start mb-8 mt-2 w-full">
        <img id="gambarMakanan" src="" alt="" class="w-60 h-48 md:w-80 md:h-60 object-cover rounded-3xl border border-2 mb-4 md:mb-0">
        <div class="flex flex-col ml-0 md:ml-14 p-6 md:p-8 justify-center items-center sm:items-start w-full h-full">
            <h1 id="namaMakanan" class="text-2xl md:text-3xl font-bold my-4">Nama Makanan</h1>
            <p id="pembuat" class="text-lg md:text-xl text-gray-600 mt-4 mb-2">User Name</p>
        </div>
    </div>

    <!-- Bahan -->
    <div id="bahan" class="flex flex-col justify-center items-start w-full">
        <h1 class="text-xl md:text-2xl font-bold my-4">Bahan-bahan</h1>
        <ol id="listBahan" class="text-base md:text-lg px-4 md:px-8 list-decimal space-y-2">
            <!-- Buat List Bahan -->
        </ol>
    </div>

    <!-- Langkah -->
    <div id="langkah" class="flex flex-col justify-center items-start w-full">
        <h1 class="text-xl md:text-2xl font-bold my-4">Langkah Pembuatan</h1>
        <ol id="listLangkah" class="text-base md:text-lg px-4 md:px-8 list-decimal space-y-2">
            <!-- Buat List Langkah -->
        </ol>
    </div>

    <!-- Comments -->
    <div id="comments" class="flex flex-col justify-center items-start w-full mt-10 border border-white bg-white/10 backdrop-blur-lg rounded-xl pt-8 px-6 pb-6 shadow-md">
        <h1 class="text-xl md:text-2xl font-bold mb-4 text-white">Comments</h1>
        <form id="commentForm" action="{{ route('comment.store', ['recipe_id' => $recipe_id]) }}" method="POST" class="w-full flex flex-col bg-transparent border border-white/70 rounded-xl p-4 mb-6 shadow-inner backdrop-blur-sm" method="POST" action="/submit-comment">
            @csrf
            <!-- Rating -->
            <div class="flex items-center mb-4">
                <label for="rating" id="ratingLabel" class="mr-3 font-semibold text-white">Your Rating:</label>
                <div id="rating" class="flex space-x-1">
                    <input type="radio" name="rating" value="1" id="rating-1" class="hidden">
                    <label for="rating-1" class="rating-star text-gray-400 text-2xl hover:text-[#f1683a] cursor-pointer">★</label>
                    
                    <input type="radio" name="rating" value="2" id="rating-2" class="hidden">
                    <label for="rating-2" class="rating-star text-gray-400 text-2xl hover:text-[#f1683a] cursor-pointer">★</label>
                    
                    <input type="radio" name="rating" value="3" id="rating-3" class="hidden">
                    <label for="rating-3" class="rating-star text-gray-400 text-2xl hover:text-[#f1683a] cursor-pointer">★</label>
                    
                    <input type="radio" name="rating" value="4" id="rating-4" class="hidden">
                    <label for="rating-4" class="rating-star text-gray-400 text-2xl hover:text-[#f1683a] cursor-pointer">★</label>
                    
                    <input type="radio" name="rating" value="5" id="rating-5" class="hidden">
                    <label for="rating-5" class="rating-star text-gray-400 text-2xl hover:text-[#f1683a] cursor-pointer">★</label>
                </div>
            </div>

            <!-- Comment Box -->
            <textarea id="newComment" 
                    name="comment"
                    placeholder="Write your comment here..." 
                    class="w-full p-3 border border-white/50 bg-transparent rounded-lg text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#f1683a] focus:border-transparent resize-none"
                    rows="4" required></textarea>
            <div class="flex justify-end mt-3">
                <button type="submit" class="bg-[#f1683a] text-white px-6 py-2 rounded-lg hover:bg-[#d8562e]">
                    Post Comment
                </button>
            </div>
        </form>

        <!-- Comments List -->
        <div id="commentsList" class="w-full space-y-4 max-h-96 overflow-y-auto scrollbar-thin scrollbar-thumb-[#f1683a] scrollbar-track-transparent">
            <!-- Example Comment -->
            <div class="flex flex-col bg-transparent border border-white/70 rounded-xl p-4 shadow-inner backdrop-blur-sm">
                <p class="text-sm text-gray-200 mb-2">Posted by <span class="font-bold">User Name</span> on <span class="italic">2024-12-08</span></p>
                <p class="text-base text-white mb-2">This is an example of a user comment.</p>
                <div class="flex items-center">
                    <p class="font-semibold text-white mr-2">Rating:</p>
                    <div class="flex space-x-1">
                        <span class="text-[#f1683a] text-lg">★</span>
                        <span class="text-[#f1683a] text-lg">★</span>
                        <span class="text-[#f1683a] text-lg">★</span>
                        <span class="text-[#f1683a] text-lg">★</span>
                        <span class="text-gray-400 text-lg">★</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection

@section('script')
<script>
    const data = JSON.parse(@json($data));
    console.log(data);

    //Image
    const img = document.getElementById('gambarMakanan');
    img.src = data.food_image;
    img.alt = data.name;
    document.getElementById('namaMakanan').textContent = data.name;
    document.getElementById('pembuat').textContent = data.user.username;

    //Bahan text
    const listBahan = document.getElementById('listBahan');
    listBahan.innerHTML = '';
    var arrayBahan = data.ingredients.split("\n");
    //console.log(arrayBahan);
    arrayBahan.forEach(item => {
        let li = document.createElement('li');
        li.textContent = item.trim();
        listBahan.appendChild(li);
    });

    //Langkah text
    const listLangkah = document.getElementById('listLangkah');
    listLangkah.innerHTML = '';
    var arrayLangkah = data.procedures.split("\n");
    arrayLangkah.forEach(item => {
        let li = document.createElement('li');
        li.textContent = item.trim();
        listLangkah.appendChild(li);
    });

</script>

<script>
    // Rating selection
    let selectedRating = 0;
    const ratingStars = document.querySelectorAll('.rating-star');
    const ratingLabel = document.getElementById('ratingLabel');

    ratingStars.forEach((star, index) => {
        //Hover
        star.addEventListener('mouseover', function () {
            ratingStars.forEach((s, i) => {
                s.classList.remove('text-[#f1683a]');
                s.classList.add('text-gray-400');
                if (i <= index) {
                    s.classList.add('text-[#f1683a]');
                    s.classList.remove('text-gray-400');
                }
            });
        });

        //Reset hover
        star.addEventListener('mouseout', function () {
            ratingStars.forEach((s, i) => {
                s.classList.remove('text-[#f1683a]');
                s.classList.add('text-gray-400');
                if (i < selectedRating) {
                    s.classList.add('text-[#f1683a]');
                    s.classList.remove('text-gray-400');
                }
            });
        });

        //Select rating
        star.addEventListener('click', function () {
            selectedRating = index + 1; // Set the selected rating
            ratingStars.forEach((s, i) => {
                s.classList.remove('text-[#f1683a]');
                s.classList.add('text-gray-400');
                if (i < selectedRating) {
                    s.classList.add('text-[#f1683a]');
                    s.classList.remove('text-gray-400');
                }
            });
        });
    });

    //Comment submission
    $('#commentForm').on('submit', function(e) {
        e.preventDefault();

        var form =  $(this);
        var url = form.attr('action');
        var method = form.attr('method');

        //show confirmation dialog
        Swal.fire({
            title: "Are you sure want to submit?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, submit it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var formData = new FormData(form[0]);
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
                                    window.location.reload();
                                }

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

    //Comment view
    const comments = JSON.parse(@json($comments));
    console.log(comments);
    const commentList = document.getElementById('commentsList');
    commentList.innerHTML = '';
    comments.forEach(comment => {
        commentList.innerHTML +=
        `
        <div class="flex flex-col bg-transparent border border-white/70 rounded-xl p-4 shadow-inner backdrop-blur-sm">
            <p class="text-sm text-gray-200 mb-2">Posted by <span class="font-bold">${comment.user ? comment.user.username : 'Deleted User'}</span> on <span class="italic">${comment.created_at}</span></p>
            <p class="text-base text-white mb-2">${comment.comment.replace(/\n/g, '<br>')}</p>
            <div class="flex items-center">
                <p class="font-semibold text-white mr-2">Rating:</p>
                <div id="viewRating" class="flex space-x-1">
                    ${generateStars(comment.rating)}
                </div>
            </div>
        </div>
        `

    });

    function generateStars(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= rating) {
                stars += `<span class="text-[#f1683a] text-lg">★</span>`; // Filled star
            } else {
                stars += `<span class="text-gray-400 text-lg">★</span>`; // Empty star
            }
        }
        return stars;
    }
</script>
@endSection
