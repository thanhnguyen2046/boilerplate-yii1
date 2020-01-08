<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
?>
<h1>Manage Thanh</h1>

<?php
foreach ($model->search()->getData() as $post){

        echo $post->title . "<br> - ". $post->user->username . "<br/>";

        foreach ($post->comments as $comment){
            echo " + Comment ne: ".  $comment->content . "<br/>";
        }

}
?>

