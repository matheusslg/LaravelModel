
<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Voltar</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Criar Produto</div>
            <div class="panel-body">
                <form v-on:submit="salvar()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Nome</label>
                            <input type="text" v-model="produto.nome" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Descrição</label>
                            <input type="text" v-model="produto.descricao" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Preço</label>
                            <input type="text" v-model="produto.preco" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Criar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                produto: {
                    nome: '',
                    descricao: '',
                    preco: ''
                }
            }
        },
        methods: {
            salvar() {
                event.preventDefault();
                var app = this;
                var novoProduto = app.produto;
                axios.post('/api/produtos', novoProduto)
                    .then(function (resp) {
                        app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Não foi possível criar o produto.");
                    });
            }
        }
    }
</script>
