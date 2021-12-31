<x-layout>
	<article>
		{{-- {!!  !!} for escaping as we're in control of content--}}
		<h1>{!! $post->title !!}</h1>

		<div>
			{!! $post->body !!}
		</div>
	</article>
	<a href="/">Go Back</a>
</x-layout>