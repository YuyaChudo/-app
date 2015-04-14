<h2>日記投稿</h2>

<?php 
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->end('日記を投稿する');



?>

<p><?php echo $this->Html->link("戻る", '/posts/'); ?></p>