<?php

class articlesAdministration
{
    public function publish($illustrationUrl = false, $title = false, $author = false, $categorie = false, $article = false)
    {
        $database = new database();
        $folder_out = "./app/pages/articles/publications/";
        $filename = str_replace(" ", "_", $title);
        $filename = str_replace("/", "-", $filename);
        $filename = str_replace("?", "", $filename);
        $filename = $filename . ".html";
        $data['illustration_url'] = $illustrationUrl;
        $data['title'] = $title;
        $data['author'] = $author;
        $data['categorie'] = $categorie;
        $data['article'] = $folder_out.$filename;
        $database->insert("blog_articles", $data);
        if(file_put_contents($folder_out.$filename, $article))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}