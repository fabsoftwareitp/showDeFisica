<?php

	session_start();

	//arquivos obrigatorios do framework
	require_once 'biblioteca/db.php';
	require_once 'biblioteca/visao.php';
	require_once 'biblioteca/uteis.php';
	require_once 'biblioteca/alert.php';
	require_once 'biblioteca/acesso.php';

	require_once 'app.php'; //arquivo geral da aplicacao

	extract(tratarURL()); //cria as variaveis com nome do controlador, acao e parametros
	//se o arquivo correspondente ao controlador não existir mata a aplicação
	if (!file_exists($nomeControlador)) {
		die("Nao foi encontrado o arquivo: '$nomeControlador' para enviar a solicitacao!");
	}

	//se existir inclui o arquivo
	require_once $nomeControlador;

	try {
		//verifica se NÃO existe a função correspondente a ação no controlador!
		if (!is_callable($nomeAcaoControlador)) {
			die('Não foi encontrada a <code>função</code> correspondente a ação <code>"' . $nomeAcaoControlador . '"</code> do controlador <code>"' . $nomeControlador . '"</code>');
		}

		//aqui serão duas situaões: utilizando a lib de autenticacao ou não
		$released = true;

		if (defined('ACESSO')) {
			$role = getRoleOfControllerAction($nomeAcaoControlador);


			$roles = explode(",", $role);
			$userRole = acessoPegarPapelDoUsuario();
			foreach ($roles as $role) {

				$released = true;
				$role = trim($role);
				if (!empty($role) && $role !== $userRole) {
					// echo "role=$role  userrole=$userRole <BR><BR>";
					//regra nao eh igual a encontrada na action do controlador
					$released = false;
					$authMsg = "O usuário não possui permissão para acessar essa funcionalidade";
				}
				if (empty($role) && !acessoUsuarioEstaLogado()) {
					$released = false;
					$authMsg = "Voce precisa autenticar-se para acessar!";
				}
				if (!empty($role) && $role == "anon") {
					//acesso anonimo
					$released = true;
				}
				if ($released) {
					break;
				}
			}
		}
		if ($released) {
			//echo "acesso permitido";
			call_user_func_array($nomeAcaoControlador, $parametrosControlador); //chama a funcao passando parametros   
		} else {
			//echo "acesso negado";
			alert($authMsg, "warning");
			redirecionar("login");
		}
	} catch (ArgumentCountError $e) {
		echo "chama 404!";
	}

	function getRoleOfControllerAction($nomeAcaoControlador) {
		$rc = new ReflectionFunction($nomeAcaoControlador);
		$role = $rc->getDocComment();
		$role = trim(substr($role, 3, -2));
		return $role;
	}

	function tratarURL() {
		$uri = explode("/", filter_input(INPUT_SERVER, 'REQUEST_URI')); //quebra a URL nos pedaços usando a barra como separador
		/* duas situações possíveis: 
		* 1. seusite.com/{controlador}/{acao}/{param1}/{param2}/..
		* 2. localhost/nomeAplicacao/{controlador}/{acao}/{param1}/{param2}/..
		* TODO: verificar esse ponto.
		*/
		
		$urlBase = URL_BASE;
		$urlDividida = explode("://", $urlBase);
		$urlRestante = explode("/", $urlDividida[1]);

		if(count($urlRestante) > 0 && empty($urlRestante[1])) {
			$indiceBaseURL = 1; //prod
		} else {
			$indiceBaseURL = 2; //local
		}

		$nomeControlador = $uri[$indiceBaseURL]; //recupera o nome do controlador via URL

		if (!$nomeControlador && CONTROLADOR_PADRAO) {
			$nomeControlador = CONTROLADOR_PADRAO;
		}

		$nomeControlador = "controlador/" . $nomeControlador . "Controlador.php";

		//recupera a açao do controlador ou coloca o valor "index"como ação padrão do controlador
		$posicaoIndiceAcaoControlador = $indiceBaseURL + 1;
		$nomeAcaoControlador = (isset($uri[$posicaoIndiceAcaoControlador]) and ! empty($uri[$posicaoIndiceAcaoControlador])) ? $nomeAcaoControlador = $uri[$posicaoIndiceAcaoControlador] : 'index'; //pega a acao
		//recupear os parâmetros da URL, caso não existam retorna um array vazio
		$posicaoIndiceParametros = $indiceBaseURL + 2;
		$parametrosControlador = (count($uri) > $posicaoIndiceParametros) ? array_slice($uri, $posicaoIndiceParametros) : array(); //pega os parametros, se existir

		$url = array(
			"nomeControlador" => $nomeControlador,
			"nomeAcaoControlador" => $nomeAcaoControlador,
			"parametrosControlador" => $parametrosControlador
		);

		return $url;
	}