<?php

namespace App\Helpers;

use Google_Client;
use Google_Service_Drive;

class GoogleDrive
{
    public static function listFiles()
    {
        $apiKey = env("GOOGLE_API_KEY", "AIzaSyBwSflbQCEy6vazwRuWAbKJW44BQZmHY0g");

        $creds_path = public_path('creds.json');
        putenv("GOOGLE_APPLICATION_CREDENTIALS={$creds_path}");

        $client = new Google_Client();
        $client->setApplicationName("Files Fetcher");
        $client->setDeveloperKey($apiKey);
        $client->useApplicationDefaultCredentials();
        $client->setScopes(Google_Service_Drive::DRIVE_METADATA_READONLY);

        $service = new Google_Service_Drive($client);
        $resp = $service->files->listFiles([
            'q' => "'12ezEA9Pt9wIEJlRZi7TyI9kPC-Htlcq_' in parents",
            'fields' => 'files(webViewLink, size, id, name, mimeType)'
        ]);

        return $resp->files;
    }
}
