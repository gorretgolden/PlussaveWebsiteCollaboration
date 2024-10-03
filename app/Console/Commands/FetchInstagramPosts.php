<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use App\Models\InstagramPost;
use App\Services\InstagramService;

class FetchInstagramPosts extends Command
{
    protected $signature = 'instagram:fetch-posts';
    protected $description = 'Fetch latest Instagram posts and save them in the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(InstagramService $instagramService)
    {
        $posts = $instagramService->fetchLatestPosts();

        foreach ($posts as $post) {
            InstagramPost::updateOrCreate(
                ['instagram_id' => $post['id']],
                [
                    'caption' => $post['caption'] ?? null,
                    'media_type' => $post['media_type'],
                    'media_url' => $post['media_url'],
                    'thumbnail_url' => $post['thumbnail_url'] ?? null,
                    'permalink' => $post['permalink'],
                    'posted_at' => \Carbon\Carbon::parse($post['timestamp']),
                ]
            );
        }

        $this->info('Instagram posts fetched and saved successfully!');
    }
}
