<?php

	namespace App\Models;

	use MF\Model\Model;

	class Noticia extends Model {
		
		protected $id;
		protected $titulo;
		protected $capa;
		protected $descricao;
		protected $conteudo;
		protected $classe;
		protected $idade;

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		//RECUPERA TODOS OS REGISTROS
		public function getTodosRegistros($pesquisa, $limit, $offset){
			
			$query = "select id, titulo, capa, descricao, date_format(data, '%Y/%m/%d - %H:%i') as data from noticias where titulo like :pesquisa order by data desc limit $offset, $limit";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':pesquisa', '%'.$pesquisa.'%');
			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		}

		//RECUPERA QUANTOS REGISTROS HÁ NO BD
		public function getTotalRegistros($pesquisa){
			
			$query = "
			select
				count(*)
			from
				noticias
			where
				titulo like :pesquisa";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':pesquisa', '%'.$pesquisa.'%');
			$stmt->execute();

			return $stmt->fetch();

		}

		//RECUPERAR REGISTRO ESPECÍFICO
		public function getNoticia(){
			
			$query = "select id, titulo, capa, descricao, conteudo, date_format(data, '%Y/%m/%d - %H:%i') as data from noticias where id = :id order by data desc";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':id', $this->__get('id'));
			$stmt->execute();

			return $stmt->fetch();

		}

		//INDEX////////////////////////////////////////////////////////////////////////////////////////////////////
		//NOTÍCIAS DA HOME
		public function getNoticiaHome($classe){
			
			$query = "select id, titulo, capa, descricao, date_format(data, '%Y/%m/%d - %H:%i') as data from noticias where classe = :classe order by data desc";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':classe', $classe);
			$stmt->execute();

			return $stmt->fetch();

		}

		public function getNoticiasHome($classe){
			
			$query = "select id, titulo, capa, descricao, date_format(data, '%Y/%m/%d - %H:%i') as data from noticias where classe = :classe order by data desc limit 1, 2";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':classe', $classe);
			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		}

		//NOTÍCIAS POR CLASSE (BRASIL/MUNDO)
		public function getNoticiasClasse($classe, $limit, $offset){
			
			$query = "select id, titulo, capa, descricao, date_format(data, '%Y/%m/%d - %H:%i') as data from noticias where classe = :classe order by data desc limit $offset, $limit";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':classe', $classe);
			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		}

		public function getTotalClasse($classe){
			
			$query = "
			select
				count(*)
			from
				noticias
			where
				classe = :classe";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':classe', $classe);
			$stmt->execute();

			return $stmt->fetch();

		}

		//NOTICIAS POR IDADE (PRE-HISTORIA/ANTIGA/MEDIA/MODERNA/CONTEMPORANEA)
		public function getNoticiasIdade($idade, $limit, $offset){
			
			$query = "select id, titulo, capa, descricao, date_format(data, '%Y/%m/%d - %H:%i') as data from noticias where idade = :idade order by data desc limit $offset, $limit";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':idade', $idade);
			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		}

		public function getTotalIdade($idade){
			
			$query = "
			select
				count(*)
			from
				noticias
			where
				idade = :idade";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':idade', $idade);
			$stmt->execute();

			return $stmt->fetch();

		}

		//RECUPERAR REGISTROS PARA A PAG FOTOS
		public function getFotos($limit, $offset){
			
			$query = "
			select
				id,
				titulo,
				capa,
				descricao,
				classe,
				date_format(data, '%Y/%m/%d - %H:%i') as data
			from
				noticias
			order by
				data desc
			limit
				$offset, $limit";

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		}

		public function getTotalFotos(){
			
			$query = "
			select
				count(*)
			from
				noticias";

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			return $stmt->fetch();

		}

		//NEWS////////////////////////////////////////////////////////////////////////////////////////////////////
		//RECUPERAR APENAS NOTÍCIAS PARA NEWS
		public function getNoticias($limit, $offset){
			
			$query = "
			select
				id,
				titulo,
				capa,
				descricao,
				conteudo,
				classe,
				idade,
				date_format(data, '%Y/%m/%d - %H:%i') as data
			from
				noticias
			where
				classe = 'mundo' OR classe = 'brasil'
			order by
				data desc
			limit
				$offset, $limit";

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		}

		public function getTotalNoticias(){
			
			$query = "
			select
				count(*)
			from
				noticias
			where
				classe = 'mundo' OR classe = 'brasil'";

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			return $stmt->fetch();

		}

		//PESQUISAS DE NOTÍCIAS EM NEWS
		public function getTodosNoticiasADM($pesquisa, $limit, $offset){
			
			$query = "select id, titulo, capa, descricao, conteudo, classe, idade, date_format(data, '%Y/%m/%d - %H:%i') as data from noticias where titulo like :pesquisa and classe != 'bio' order by data desc limit $offset, $limit";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':pesquisa', '%'.$pesquisa.'%');
			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		}

		public function getTotalNoticiasADM($pesquisa){
			
			$query = "
			select
				count(*)
			from
				noticias
			where
				titulo like :pesquisa and classe != 'bio'";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':pesquisa', '%'.$pesquisa.'%');
			$stmt->execute();

			return $stmt->fetch();

		}

		//INSERIR NOTÍCIA
		public function inserirNoticia(){
			
			$query = "insert into noticias(titulo, capa, descricao, conteudo, classe, idade)values(:titulo, :capa, :descricao, :conteudo, :classe, :idade)";
			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':titulo', $this->__get('titulo'));
			$stmt->bindValue(':capa', $this->__get('capa'));
			$stmt->bindValue(':descricao', $this->__get('descricao'));
			$stmt->bindValue(':conteudo', $this->__get('conteudo'));
			$stmt->bindValue(':classe', $this->__get('classe'));
			$stmt->bindValue(':idade', $this->__get('idade'));
			$stmt->execute();

		}

		//EDIÇÃO DE NOTÍCIA
		public function editarNoticia(){
			
			$query = "update noticias set titulo = :titulo, capa = :capa, descricao = :descricao, conteudo = :conteudo, classe = :classe, idade = :idade where id = :id ";
			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':id', $this->__get('id'));
			$stmt->bindValue(':titulo', $this->__get('titulo'));
			$stmt->bindValue(':capa', $this->__get('capa'));
			$stmt->bindValue(':descricao', $this->__get('descricao'));
			$stmt->bindValue(':conteudo', $this->__get('conteudo'));
			$stmt->bindValue(':classe', $this->__get('classe'));
			$stmt->bindValue(':idade', $this->__get('idade'));
			$stmt->execute();

		}

		//REMOVER NOTÍCIA
		public function removerNoticia(){
			
			$query = "delete from noticias where id = :id";
			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':id', $this->__get('id'));
			$stmt->execute();

		}

	}

?>