
<div class="container">
    <h1>Adicionar Nova Notícia</h1>
    <form method="POST" action="processa.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Título</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Título da Notícia">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Destacar na tela Inicial</label>
                <select class="form-control" id="exampleFormControlSelect1" v-model="noticias.destaque" required>
                        
                    <option value=false>Não</option> 
                    <option value=true>Sim</option> 
                
                </select>
            </div>
            
        
        <select class="form-control" id="exampleFormControlSelect1" required>
            <label for="exampleInputPassword1">Tipo da noticia</label>
            <option value="" selected disabled hidden>Escolha o tipo da noticia</option>
            <option value="1">Artigos</option>
            <option value="2">Boletim Portuário</option>
            <option value="3">Caucaia/São Gonçalo</option>
            <option value="4" >Comércio Exterior</option>
            <option value="5">Complexo Portuário</option>
            <option value="6">Destaques Portuários</option> 
            <!-- <option value="direito">Direito Aduaneiro</option> -->
            <option value="7">Entrevistas</option> 
            <option value="8">Eventos</option>
            <option value="9">Logística e Transporte</option>
            <!-- <option value="marketing">Marketing Portuário</option> -->
            <option value="10" >Notícia Internacional</option>
            <option value="11">Notícia Nacional</option> 
            <option value="12" >Portos do Brasil</option>
            <option value="13">Porto e Turismo</option> 
            
        </select>

        <div class="form-group">
            <label for="exampleFormControlFile1">Escolha uma imagem</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>


        <div class="form-group">
                <label for="exampleInputEmail1">Legenda</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Legenda Foto">
                
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Resumo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Resumo">
                
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Conteudo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Conteudo">
                
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Autor</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Autor">
                
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>

    </form>
</div>
