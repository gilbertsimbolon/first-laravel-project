<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- <h3 class="text-xl">Ini adalah halaman blog!</h3> --}}


  @foreach ($posts as $post)
    
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
    <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{ $post['title'] }}</h2>
    </a>
    <div class="text-base text-gray-500">
      <a href="#">{{ $post['author'] }}</a> | 1 July 2005
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
  </article>
  @endforeach


</x-layout>