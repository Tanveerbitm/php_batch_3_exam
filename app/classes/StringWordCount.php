<?php


namespace App\classes;


class StringWordCount
{
    protected $string;
    protected $word;
    protected $character;

    public function __construct($post=null)
    {

        $this->string = $post['string'];

    }

    public function index()
    {
        header("Location: pages/index.php");
    }

    public function getWordString()
    {
        $this->word          = str_word_count($this->string);
        $this->character     = (strlen($this->string) - count_chars($this->string,0)[32]);
        return
            [
                'word'      => $this->word,
                'character' => $this->character,
                'string'    => $this->string,
            ];
    }


}