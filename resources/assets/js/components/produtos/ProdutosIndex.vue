<template>
    <div>
        <!--<div class="form-group">
            <router-link :to="{name: 'criarProduto'}" class="btn btn-success">Novo Produto</router-link>
        </div>-->

        <div class="panel panel-default">
            <div class="panel-heading">Lista de Produtos</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th width="117">Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="produto, index in produtos">
                        <td>{{ produto.nome }}</td>
                        <td>{{ produto.descricao }}</td>
                        <td>{{ produto.preco }}</td>
                        <td>
                            <router-link :to="{name: 'editarProduto', params: {id: produto.id}}" class="btn btn-xs btn-primary">
                                Editar
                            </router-link>
                            <a href="#" class="btn btn-xs btn-danger" v-on:click="deletar(produto.id, index)">Apagar</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                produtos: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/produtos')
                .then(function (resp) {
                    app.produtos = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Não foi possível carregar os produtos.");
                });
        },
        methods: {
            deletar(id, index) {
                if (confirm("Você tem certeza que deseja deletar este produto?")) {
                    var app = this;
                    axios.delete('/api/produtos/' + id)
                        .then(function (resp) {
                            app.produtos.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Não foi possível deletar este produto.");
                        });
                }
            }
        }
    }
</script>