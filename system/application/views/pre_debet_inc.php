<?php echo form_open("billing/debet_inc"); ?>
Период
<select name=period_id>
<?php foreach ($period->result() as $p):?>
	<option value=<?php echo $p->id;?>><?php echo $p->name;?></option>
<?php endforeach;?>
</select>
<br>

<br>
<br>
<input type=submit value='Выдать отчет' />
</form>
