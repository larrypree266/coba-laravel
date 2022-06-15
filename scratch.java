Category::create([
    'name' => 'Personal',
    'slug' => 'personal',
])

Post::create([
    'title' => 'Judul Ke ketiga',
    'category_id' => 3,
    'slug' => 'judul-ke-tiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ratione eos adipisci facilis quisquam blanditiis omnis aperiam distinctio cupiditate minima!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis iure eius, distinctio recusandae, quam sedaccusantium labore impedit minus commodi alias, perspiciatis debitis cumque? Nihil sapiente aperiam sit mollitiaeaque.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur ullam a quam veritatis atque harum reprehenderit ipsa quisquam molestias? Voluptatibus saepe ex aliquid id praesentium nemo voluptatem quibusdam recusandae assumenda quasi quisquam, eius et molestias commodi dolor asperiores accusamus rerum quis earum porro voluptates perspiciatis aliquam? Impedit, necessitatibus sapiente.</p>',
])