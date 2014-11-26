<?php

namespace mbischof\comments\widgets;

use mbischof\comments\models\Comment;
use yii\data\ActiveDataProvider;

class CommentsWidget extends \yii\base\Widget
{
    
    public $model;

    protected function getRecentComments()
    {
        if ($this->model == null) {
            return null;
        }
        
        $query = Comment::find([
            'modelClass' => get_class($this->model),
            'modelId'   => $this->model->id
        ]);
        
        return new ActiveDataProvider(['query' => $query]);
    }

    protected function formModel()
    {
        $comment = new Comment();
        $comment->modelClass = get_class($this->model);
        $comment->modelId = $this->model->id;
        
        return $comment;
    }

    public function run()
    {
        if ($this->disabled) {
            return;
        }
    
        if (isset($_POST['Comment'])) {
            $comment = new Comment();
            $comment->load($_POST['Comment']);
            $comment->modelClass = get_class($this->model);
            $comment->modelId = $this->model->id;
            $comment->save();
        }
        
        echo $this->render('comments', [
            'comments' => $this->getRecentComments(),
            'model' => $this->formModel()
        ]);
    }

}