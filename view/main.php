<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/main.js"></script>
	<title>Главная</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Введите данные!</h1>
			</div>
			<form>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<label for="date">Выберите отчетный месяц</label>
					<input type="date" class="form-control" name="date" required>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<label for="type">Выберите тип клиента</label>
					<select class="form-control" name="type">
						<option value="">---</option>
						<?foreach($this->data['types'] as $type):?>
							<option value="<?=$type['type']?>"><?=$type['type']==1?'Физическое лицо':'Юридическое лицо'?></option>
						<?endforeach;?>
					</select>
				</div>
				<div class="col-xs-12">
					<hr />
					<input type="submit" class="btn btn-primary" value="Смотреть">
				</div>
			</form>
		</div>
		<div class="out" style="margin-top: 20px;"></div>
	</div>
</body>
</html>