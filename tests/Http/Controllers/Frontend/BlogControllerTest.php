<?php

namespace App\Tests\Http\Controllers\Frontend;

use App\Tests\AbstractTestCase;
use App\Post;
use App\Tag;
use App\User;

class BlogControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_has_an_index_page_listing_blog_posts()
    {
        $this->visit('/blog');
        $this->assertViewHas('posts');
    }

    /** @test */
    public function it_has_a_page_showing_a_single_post()
    {
        $user = factory(User::class)->create();
        factory(Post::class)->create(['title' => 'Post Title', 'slug' => 'post-title', 'published' => 1, 'author_id' => $user->id]);
        $this->visit('/blog/post-title');
        $this->assertViewHas('post');
    }

    /** @test */
    public function it_has_a_page_listing_posts_from_a_tag()
    {
        $tag = factory(Tag::class)->create();
        $this->visit('/blog/tag/' . $tag->slug);
        $this->assertViewHas('posts');
    }
}
