<div class="row" id="result" style="margin-top: 50px;">
	<div class="col-md-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<td>Услуга</td>
					<td>Баланс на начало периода</td>
					<td>Приход</td>
					<td>Расход</td>
					<td>Перерасчет</td>
					<td>Итого</td>
				</tr>
			</thead>
			<tbody>
				<?foreach($this->data as $result):?>
					<tr>
						<pre><?var_dump($result);?></pre>
						<td><?=$result['name'];?></td>
						<td><?=$result['sum_start'];?></td>
						<!--<td><?=$result['comming'];?></td>
						<td><?=$result['expence'];?></td>
						<td><?=$result['recalculation'];?></td>
						<td><?=$result['total'];?></td> -->
					</tr>
				<?endforeach;?>
			</tbody>
		</table>
	</div>
</div>