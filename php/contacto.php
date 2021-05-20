	<div id="stilo-consult" style="background: #00BFFF;">
		<div class="video stilo-video" style="background-image: url(images/jnsolution.png);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			<h2>Contate-me</h2>	
			<form name="formcontato" method="POST" action="salva_mensagem.php">
					<div class="row form-group">
							<div class="col-md-12">
							<input type="text" name="nome" placeholder="Nome Completo" class="form-control" required>
						</div>	
					</div>
					<div class="row form-group">
							<div class="col-md-12">
							<input type="email" name="email" placeholder="Seu melho e-mail" class="form-control" required>
						</div>	
					</div>
					<div class="row form-group">
							<div class="col-md-12">
							<input type="text" name="assunto" placeholder="Assunto do contato" class="form-control" required>
						</div>	
					</div>
					<div class="row form-group">	
						<div class="col-md-12">
							<textarea name="mensagem" class="form-control" placeholder="Diga algo sobre nós" cols="30" rows="10"></textarea>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" value="Enviar" onclick="return validar_form_contato()" class="btn">
					</div>
			</form>

		</div>
	</div>