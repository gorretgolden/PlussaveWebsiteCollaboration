<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class InstagramService
{
    protected $accessToken;
    protected $apiUrl = 'https://graph.instagram.com/me/media';

    public function __construct()
    {
        $this->accessToken = env('INSTAGRAM_ACCESS_TOKEN');
    }

    public function fetchLatestPosts($limit = 6)
    {
        $response = Http::get($this->apiUrl, [
            'fields' => 'id,caption,media_type,media_url,thumbnail_url,permalink,timestamp',
            'access_token' => $this->accessToken,
            'limit' => $limit,
        ]);

        return $response->json()['data'];
    }
}



?>
