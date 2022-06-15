@extends ('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        
        <p>By. Reza Arya in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        
        {{-- this happens if there's an html or other language element inside the data --}}
        {!! $post->body !!}
        {{-- <h2>{{ $post['title'] }}</h2> --}}
        {{-- <p>{{ $post['body'] }}</p> --}}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection


Post::create([
    'title' => 'Judul Ketiga',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum pertama',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis iure eius, distinctio recusandae, quam sedaccusantium labore impedit minus commodi alias, perspiciatis debitis cumque? Nihil sapiente aperiam sit mollitiaeaque.</p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur ullam a quam veritatis atque harum reprehenderit ipsa quisquam molestias? Voluptatibus saepe ex aliquid id praesentium nemo voluptatem quibusdam recusandae assumenda quasi quisquam, eius et molestias commodi dolor asperiores accusamus rerum quis earum porro voluptates perspiciatis aliquam? Impedit, necessitatibus sapiente.'
])
