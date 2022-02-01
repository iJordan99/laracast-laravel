<x-layout>
	<article>
		{{-- {!!  !!} for escaping as we're in control of content--}}
		<h1>{!! $post->title !!}</h1>

		<div>
			By <a href="">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"><p>{!! $post->category->name !!}</p></a>
			{{-- <p>{!! $post->category->name !!}</p> --}}
		</div>
		<div>
			{!! $post->body !!}
		</div>
	</article>
	<a href="/">Go Back</a>
</x-layout>