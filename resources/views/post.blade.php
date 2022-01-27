<x-layout>
	<article>
		{{-- {!!  !!} for escaping as we're in control of content--}}
		<h1>{!! $post->title !!}</h1>

		<a href="#"><p>{!! $post->category->name !!}</p></a>
		<div>
			{!! $post->body !!}
		</div>
	</article>
	<a href="/">Go Back</a>
</x-layout>