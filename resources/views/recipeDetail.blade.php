@extends('layout')
@section('style')
@endSection

@section('content')

@include('navbar')
<div class="flex flex-col justify-center items-start min-w-full min-h-full px-5 py-10 md:px-20 md:py-16">
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
</div>
@endSection

@section('script')
<script>
    const data = JSON.parse(@json($data));
    console.log(data);

    const img = document.getElementById('gambarMakanan');
    img.src = data.food_image;
    img.alt = data.name;
    document.getElementById('namaMakanan').textContent = data.name;
    document.getElementById('pembuat').textContent = data.user.name;

    const listBahan = document.getElementById('listBahan');
    listBahan.innerHTML = '';
    var arrayBahan = data.ingredients.split('/n');
    arrayBahan.forEach(item => {
        let li = document.createElement('li');
        li.textContent = item.trim();
        listBahan.appendChild(li);
    });

    const listLangkah = document.getElementById('listLangkah');
    listLangkah.innerHTML = '';
    var arrayLangkah = data.procedures.split('/n');
    arrayLangkah.forEach(item => {
        let li = document.createElement('li');
        li.textContent = item.trim();
        listLangkah.appendChild(li);
    });

</script>
@endSection
