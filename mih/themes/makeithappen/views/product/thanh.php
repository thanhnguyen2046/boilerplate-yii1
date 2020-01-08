<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
?>
<h1>Manage Thanh</h1>

<?php
foreach ($model->search()->getData() as $user){
    foreach ($user->thanhthanh as $post){
        echo $user->username . " " .$post->title . " ".$post->content."<br/>";
    }
}
?>

