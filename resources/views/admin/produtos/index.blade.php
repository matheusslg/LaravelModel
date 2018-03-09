@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">Produtos</div>
				<ul class="nav nav-stacked">
					<li>
						<router-link :to="{name: 'criarProduto'}">Novo Produto</router-link>
					</li>
					<li class="active">
						<router-link to="/">Todos os produtos</router-link>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">Produtos</div>
				<div class="panel-body table-responsive">
					<router-view name="produtosIndex"></router-view>
					<router-view></router-view>
				</div>
			</div>
			<footer class="footer">
				<p>Sistema desenvolvido com Laravel + Vue.js + Bootstrap por Matheus Nascimento Cavallini</p>
			</footer>
		</div>
	</div>
</div>
@endsection