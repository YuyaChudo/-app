<h2>日記を編集する</h2>

<?php 
echo $this->Form->create('Post',array('action'=>'edit'));
echo $this->Form->input('title');
echo $this->Form->input('body',array('rows'=>3));
echo $this->Form->end('保存する');
?>

<p><?php echo $this->Html->link("戻る", '/posts/'); ?></p>
