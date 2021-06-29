<?php $this->setLayoutVar('title', '編集画面') ?>
<h2>編集</h2>

<?php if(isset($errors) && count($errors) > 0): ?>
<?php echo $this->render('errors', ['errors' => $errors]); ?>
<?php endif; ?>
<form action="<?php echo $base_url; ?>/employee/edit" method="post">
<table>
<tr>
<th>部署名</th>
<td><input type="text" name="dept_name" value="<?php echo $this->escape($employee["dept_name"]); ?>" /></td>
</tr>
<tr>
<td colspan="2">
<input type="hidden" name="ID" value="<?php echo $employee["ID"]; ?>"/>
<input type="submit" value="登録" />
</td>
</tr>
</table>
</form>