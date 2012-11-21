<?php
namespace Swar\Model;

class Swar
{
    public $id;
    public $content;
    public $title;
    public $date;
    public $created_by;

    public function exchangeArray($data)
    {
        $this->id     = (isset($data['id'])) ? $data['id'] : null;
        $this->content = (isset($data['content'])) ? $data['content'] : null;
        $this->title  = (isset($data['title'])) ? $data['title'] : null;
        $this->date  = (isset($data['date'])) ? $data['date'] : null;
        $this->created_by  = (isset($data['created_by'])) ? $data['created_by'] : null;
    }
}