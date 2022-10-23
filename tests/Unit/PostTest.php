<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Models\Post;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_post_index()
    {
        $response = $this->get('/api/posts');

        $response->assertStatus(200);
    }
    
    public function test_store_post()
    {
        $response = $this->post('/api/posts', [
            'title' => 'Natural Life',
            'category_id' => '1',
            'status' => 'Active'
        ]);

        $response->assertStatus(200);
    }

    public function test_delete_post()
    {
        $post = Post::make([
            'title' => 'Natural Life',
            'category_id' => '1',
            'status' => 'Active'
        ]);
        
        if($post)
            $post->delete();

        $this->assertTrue(true);
    }
}
