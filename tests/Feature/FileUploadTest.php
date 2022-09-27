<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class FileUploadTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function page_contains_a_file_upload_component()
    {
       $user = User::factory()->create();
       $this->actingAs($this->user);
       $this->get(route('upload_file'))->assertSeeLivewire('file-upload');
    }
}
