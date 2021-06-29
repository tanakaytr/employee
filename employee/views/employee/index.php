<?php $this->setLayoutVar('title', '一覧画面') ?>

<h2>一覧画面</h2>
<h3><a href="<?php echo $base_url; ?>/employee/new">新規追加</a></h3>
<?php if(isset($message)): ?>
<div id="message"><?php echo $message; ?></div>
<?php endif; ?>
<table>
<tr>
<th>部署ID</th>
<th>部署名</th>
<th>編集</th>
</tr>
<?php foreach($employees as $employee): ?>
<tr>
<td><?php echo $employee["dept_id"]; ?></td>
<td><?php echo $employee["dept_name"]; ?></td>
<td><a href="<?php echo $base_url; ?>/employee/edit?ID=<?php echo $employee["ID"]; ?>">編集</a></td>
</tr>
<?php endforeach; ?>
</table>