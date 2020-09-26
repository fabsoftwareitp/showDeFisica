<div class="welcome">
	<img src="publico/img/elements/ausronauta.png">

	<p>Um novo jeito de aprender <span>ciência</span></p>

	<div class="curve fundo"></div>

	<a href="#sobre">&#9660;</a>
</div>

<div class="div-about fundo" id="sobre">
	<div class="about-text">
		<p class="sobre">Sobre o Projeto</p>
		<p>Show de física é um projeto no campo da Educação e Ciência. Sua missão é contribuir para o ensino de conceitos físicos por meio de diferentes e divertidos métodos de apredizagem.</p>
	</div>

	<div class='atom'>
		<div class='line'>
			<div class='neutrino'></div>
		</div>

		<div class='line'>
			<div class='neutrino b'></div>
		</div>

		<div class='line'>
			<div class='neutrino c '></div>
		</div>
		<div class='quark animated pulse infinite'></div>
	</div>
</div>

<div class="agenda fundo">
	<h3>Próximos eventos</h3>
	<div class="scrolldiv">
		<?php foreach($events as $event):?>
			<a class="link_event" href="./overview/visualizar/<?=$event['id_overview']?>">
				<div class="link_div">
					<img src="<?=$event['banner']?>">

					<div class="desc">
						<p><?=$event['title']?></p>
						<?php 
							if(isset($event)){
								$explode = explode('-',$event['date_show']);
								$date_show = $explode[2].'/ '.$explode[1].'/ '.$explode[0];
							}
						?>
						<p><?=$date_show?></p>
					</div>
				</div>
			</a>
		<?php endforeach;?>
	</div>
</div>

<div class="contact fundo">
	<p>Deseja o Show de Física em sua Escola ?</p>
	<a href="./pages/contact">Entre em contato</a>
</div>

<div class="news">
	<div class="ultimas-noticias">
		<p>Últimas Notícias</p>

		<?php if(acessoUsuarioEstaLogado()):?>
			<a href="./news/adicionar">
				<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
			</a>
		<?php endif;?>
	</div>

	<div class="descricao-noticia">
		<?php foreach($news as $notice):?>
			<a href="./news/visualizar/<?=$notice['id_news']?>" class="caixa-noticia">
				<div>
					<img src="<?=$notice['images']?>">
					<p><?=$notice['title']?></p>
				</div>
			</a>
		<?php endforeach;?>
	</div>
</div>

<div class="apoie">
	<p>Gostou da ideia e quer apoiar o projeto?</p>
	<a href="./pages/contact">Torne-se um apoiador</a>
</div>