
<div class="welcome">
	<img src="publico/img/elements/ausronauta.png">
	<p>Um novo jeito de aprender <span>ciência</span></p>
	<div class="curve fundo"></div>
	<a href="#sobre">&#9660;</a>
</div>

<div class="about fundo" id="sobre">
	<div class="about-text">
		<p class="sobre">Sobre o Projeto</p>
		<p>Show de física é um projeto no campo da Educação e Ciência. Sua missão é contribuir para o ensino de conceitos físicos por meio de diferentes e divertidos métodos de apredizagem.</p>
	</div>
	<div class="container">
		<div class='atom'>
			<div class='line'>
				<div class='neutrino a'></div>
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
	
</div>

<div class="agenda fundo">
	<input type="radio" name="nav-agenda" id="n1" checked>
	<input type="radio" name="nav-agenda" id="n2">
	<input type="radio" name="nav-agenda" id="n3">

	<p class="title-slide">Agenda</p>

	<div class="slide">
		<div class="item-list">
			<div class="description">
				<p class="info-title">Itapetininga</p>
				<p class="info-sub">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque omnis quibusdam repellat voluptas temporibus </p>
			</div>

			<div class="banners">
				<div class="date">
					<img src="publico/img/banner/cartaz 25.09.19.jpeg" alt="">

					<div class="saiba-mais">
						<p>25 set</p>
						<a href="">Saiba-mais &#10148;</a>
					</div>
				</div>

				<div class="date">
					<img src="publico/img/banner/show dia 19.10.png" alt="">

					<div class="saiba-mais">
						<p>19 out</p>
						<a href="">Saiba-mais &#10148;</a>
					</div>
				</div>

				<div class="date">
					<img src="publico/img/banner/show dia feira de ciencias outubro.png" alt="">

					<div class="saiba-mais">
						<p>24 out</p>
						<a href="">Saiba-mais &#10148;</a>
					</div>
				</div>
			</div>
		</div>

		<div class="item-list">
			<div class="description">
				<p class="info-title">Itú</p>
				<p class="info-sub">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque omnis quibusdam repellat voluptas temporibus</p>
			</div>

			<div class="banners">
				<div class="date">
					<img src="publico/img/banner/cartaz 25.09.19.jpeg" alt="">

					<div class="saiba-mais">
						<p>18 fev</p>
						<a href="">Saiba-mais &#10148;</a>
					</div>
				</div>

				<div class="date">
					<img src="publico/img/banner/show dia 19.10.png" alt="">

					<div class="saiba-mais">
						<p>20 mar</p>
						<a href="">Saiba-mais &#10148;</a>
					</div>
				</div>

				<div class="date">
					<img src="publico/img/banner/show dia feira de ciencias outubro.png" alt="">

					<div class="saiba-mais">
						<p>05 abr</p>
						<a href="">Saiba-mais &#10148;</a>
					</div>
				</div>
			</div>
		</div>

		<div class="item-list">
			<div class="description">
				<p class="info-title">Itapeva</p>
				<p class="info-sub">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque omnis quibusdam repellat voluptas temporibus</p>
			</div>

			<div class="banners">
				<div class="date">
					<img src="publico/img/banner/cartaz 25.09.19.jpeg" alt="">

					<div class="saiba-mais">
						<p>02 jun</p>
						<a href="">Saiba-mais &#10148;</a>
					</div>
				</div>

				<div class="date">
					<img src="publico/img/banner/show dia 19.10.png" alt="">

					<div class="saiba-mais">
						<p>13 ago</p>
						<a href="">Saiba-mais &#10148;</a>
					</div>
				</div>

				<div class="date">
					<img src="publico/img/banner/show dia feira de ciencias outubro.png" alt="">

					<div class="saiba-mais">
						<p>11 nov</p>
						<a href="">Saiba-mais &#10148;</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="navigation">
		<label class="lbl-slide s1" for="n1"><div class="circle"></div></label>
		<label class="lbl-slide s2" for="n2"><div class="circle"></div></label>
		<label class="lbl-slide s3" for="n3"><div class="circle"></div></label>
	</div>
</div>

<div class="contact fundo">
	<p>Deseja o Show da Física em sua Escola ?</p>
	<a href="pages/contact">Entre em contato</a>
</div>

<div class="news">
	<div class="ultimas-noticias">
		<p>Últimas Notícias e Atualizações</p>

		<?php if(acessoUsuarioEstaLogado()):?>
			<a href="news/adicionar">
				<p>Adicionar</p>
				<svg id="plus-circle" class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="#da3241" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
					<path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
					<path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
				</svg>
			</a>
		<?php endif;?>
	</div>

	<div class="descricao-noticia">
		<?php foreach($news as $notice):?>
			<a href="news/visualizar/<?=$notice['id_news']?>" class="caixa-noticia">
				<div class="img-caixa-noticia">
					<img src="<?=$notice['images']?>" alt="">
				</div>

				<p class="title"><?=$notice['title']?></p>
				<p><?=$notice['subtitle']?></p>
			</a>
		<?php endforeach;?>
	</div>
</div>

<div class="apoie">
	<p>Gostou da ideia e quer apoiar o projeto?</p>
	<a href="pages/support">Torne-se um apoiador</a>
</div>