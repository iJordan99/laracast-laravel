<x-layout>
	@foreach ($posts as $post)
 		{{-- @dd($loop) Gives information about iteration
	 		<div class="{{ $loop->even ? 'classname' : '' }}"></div>
	    --}}
 		<article>
 			<h1>
 				<a href="/post/{{ $post->slug }}">
 					{{ $post->title }}
 				</a>
 			</h1>
 			<div>
				{{ $post->excerpt }}
 			</div>
 		</article>
 	@endforeach
</x-layout>


