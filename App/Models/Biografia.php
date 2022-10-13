<?php

	namespace App\Models;

	use MF\Model\Model;

	class Biografia extends Model {
		
		protected $id;
		protected $titulo;
		protected $capa;
		protected $descricao;
		protected $conteudo;

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		//RECUPERAR BIOGRAFIA ESPECÍFICA
		public function getBio(){
			
			$query = "select id, titulo, capa, descricao, conteudo, date_format(data, '%Y/%m/%d - %H:%i') as data from noticias where id = :id order by data desc";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':id', $this->__get('id'));
			$stmt->execute();

			return $stmt->fetch();

		}

		//RECUPERA TODAS AS BIOGRAFIAS
		public function getBios($limit, $offset){
			
			$query = "
			select
				id,
				titulo,
				capa,
				descricao,
				conteudo,
				date_format(data, '%Y/%m/%d - %H:%i') as data
			from
				noticias
			where
				classe = 'bio'
			order by
				data desc
			limit
				$offset, $limit";

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		}

		//RECUPERA O TOTAL DE BIOGRAFIAS
		public function getTotalBios(){
			
			$query = "
			select
				count(*)
			from
				noticias
			where
				classe = 'bio'";

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			return $stmt->fetch();

		}

		//PESQUISA DE BIOGRAFIAS EM NEWS
		public function getTodosBiosADM($pesquisa, $limit, $offset){
			
			$query = "select id, titulo, capa, descricao, date_format(data, '%Y/%m/%d - %H:%i') as data from noticias where titulo like :pesquisa and classe = 'bio' order by data desc limit $offset, $limit";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':pesquisa', '%'.$pesquisa.'%');
			$stmt->execute();

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		}

		public function getTotalBiosADM($pesquisa){
			
			$query = "
			select
				count(*)
			from
				noticias
			where
				 classe = 'bio' and titulo like :pesquisa";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':pesquisa', '%'.$pesquisa.'%');
			$stmt->execute();

			return $stmt->fetch();

		}

		//INSERE UMA BIOGRAFIA
		public function inserirBio(){
			
			$query = "insert into noticias(titulo, capa, descricao, conteudo, classe)values(:titulo, :capa, :descricao, :conteudo, :classe)";
			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':titulo', $this->__get('titulo'));
			$stmt->bindValue(':capa', $this->__get('capa'));
			$stmt->bindValue(':descricao', $this->__get('descricao'));
			$stmt->bindValue(':conteudo', $this->__get('conteudo'));
			$stmt->bindValue(':classe', 'bio');
			$stmt->execute();

		}

		//EDITANDO BIOGRAFIA
		public function editarBio(){
			
			$query = "update noticias set titulo = :titulo, capa = :capa, descricao = :descricao, conteudo = :conteudo where id = :id ";
			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':id', $this->__get('id'));
			$stmt->bindValue(':titulo', $this->__get('titulo'));
			$stmt->bindValue(':capa', $this->__get('capa'));
			$stmt->bindValue(':descricao', $this->__get('descricao'));
			$stmt->bindValue(':conteudo', $this->__get('conteudo'));
			$stmt->execute();

		}

		//REMOVENDO BIOGRAFIA
		public function removerBio(){
			
			$query = "delete from noticias where id = :id";
			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':id', $this->__get('id'));
			$stmt->execute();

		}

	}

?>