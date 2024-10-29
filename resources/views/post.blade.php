<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- <h3 class="text-xl">Ini adalah halaman blog!</h3> --}}

  <article class="py-8 max-w-screen-md">
    <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{ $post['title'] }}</h2>

    <div class="text-base text-gray-500">
      <a href="#">{{ $post['author'] }}</a> | 1 July 2005
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Back to posts</a>
  </article>


</x-layout>