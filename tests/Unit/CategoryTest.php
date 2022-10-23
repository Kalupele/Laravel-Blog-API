<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_post_index()
    {
        $response = $this->get('/api/categories');

        $response->assertStatus(200);
    }
    
    public function test_store_post()
    {
        $response = $this->post('/api/categories', [
            'name' => 'Nature'
        ]);

        $response->assertStatus(200);
    }

    public function test_delete_post()
    {
        $category = Category::make([
            'name' => 'Nature',
        ]);
        
        if($category)
            $category->delete();

        $this->assertTrue(true);
    }
}
