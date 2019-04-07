<?php
namespace App\Lib\Services;

class ArticleService
{
    /**
     * Add an array with the given json files from the app_data directory
     *
     * @return array
     */
    public function getFiles(): array
    {
        $files = [
            'jbl' => file_get_contents(ROOT . DS . 'app_data/json/jbl-ulse-3-im-test_104454.json'),
            'teufel' => file_get_contents(ROOT . DS . 'app_data/json/teufel-real-blue-im-test_104508.json')
        ];

        return $files;
    }

    /**
     * JSON Decode the given files
     *
     * @param array $files files array
     * @return array
     */
    public function decodeFiles(array $files): array
    {
        $articles = [];
        foreach ($files as $key => $file) {
            $decodedFile = json_decode($file);
            if ($decodedFile !== null) {
                $articles[$key] = $decodedFile;
            }
        }
        // error handler
        return $articles;
    }
}
