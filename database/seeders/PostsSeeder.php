<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Understanding React: The King of Frontend Frameworks',
                'slug' => 'understanding-react',
                'author' => 'Kamisato Ayaka',
                'body' => 'React is one of the most popular frontend frameworks today, widely used by developers to create modern, interactive user interfaces. Developed by Facebook, React uses a component-based architecture that makes building dynamic UIs easier and more efficient. React’s virtual DOM enhances performance by updating only the parts of the UI that change, rather than re-rendering the entire page. Additionally, its vast ecosystem of libraries, combined with strong community support, makes it a great choice for both small and large-scale projects. If you\'re planning to dive into frontend development, mastering React can open doors to countless opportunities. Start with the official React documentation and experiment with building reusable components.'
            ],
            [
                'title' => 'Exploring Vue.js: A Lightweight Alternative to React',
                'slug' => 'exploring-vuejs',
                'author' => 'Kamisato Ayaka',
                'body' => 'Vue.js is a progressive JavaScript framework that has gained traction among developers for its simplicity and flexibility. Created by Evan You, Vue combines the best features of Angular and React while remaining lightweight. Vue’s reactive data binding and component system make it easy to build sophisticated user interfaces with minimal effort.'
            ],
            [
                'title' => 'Mastering Angular for Enterprise Applications',
                'slug' => 'mastering-angular',
                'author' => 'Kamisato Ayaka',
                'body' => 'Angular is a powerful framework for building enterprise-level applications. Developed and maintained by Google, Angular offers a comprehensive solution with features like dependency injection, two-way data binding, and a rich set of tools for testing and performance optimization. It’s an excellent choice for large-scale applications that require robust structure and maintainability.'
            ],
            [
                'title' => 'Why Svelte is the Next Big Thing in Frontend',
                'slug' => 'svelte-next-big-thing',
                'author' => 'Kamisato Ayaka',
                'body' => 'Svelte takes a different approach compared to traditional frameworks like React and Vue. It shifts the work from the browser to the build step, resulting in highly optimized and fast applications. Svelte’s syntax is simple, making it accessible to new developers while providing powerful capabilities for building complex applications.'
            ],
            [
                'title' => 'Getting Started with Next.js for Server-Side Rendering',
                'slug' => 'getting-started-nextjs',
                'author' => 'Kamisato Ayaka',
                'body' => 'Next.js is a React framework for building server-side rendered (SSR) applications with ease. It simplifies the process of creating SEO-friendly and fast-loading websites. With built-in routing, API routes, and static site generation, Next.js is the go-to choice for developers aiming to deliver high-performance web applications.'
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
