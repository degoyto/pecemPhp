
<div class="container">
    <h1>Adicionar Nova Notícia</h1>
    <form method="POST" action="processa"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Título</label>
                <input type="text" name="titulo" class="form-control" placeholder="Título da Notícia" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Destacar na tela Inicial</label>
                <select name="destacar" class="form-control" id="exampleFormControlSelect1" required>
                        
                    <option value=0>Não</option> 
                    <option value=1>Sim</option> 
                
                </select>
            </div>
            
        
        <select name="tipo" class="form-control" required>
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
            <input name="imagem" type="file" class="form-control-file" id="foto" required>
            <img id="imagem"/>
            
        </div>

        <div class="form-group" style="display:none">
                <label for="exampleInputEmail1">Link da imagem</label>
                <input id="teste" name="link-image" type="text" class="form-control" >        
        </div>

        <div class="form-group">
                <label for="exampleInputEmail1">Legenda</label>
                <input type="text" name="legenda" class="form-control" placeholder="Legenda Foto">
                
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Resumo</label>
                <input type="text" name="resumo" class="form-control"  placeholder="Resumo">
                
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Conteudo</label>
                <input type="text" name="conteudo" class="form-control"  placeholder="Conteudo" required>
                
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Autor</label>
                <input type="text" name="autor" class="form-control"  placeholder="Autor" required>
                
        </div>

        
        <button type="button" onclick="uploadImage()" class="btn btn-primary">Enviar</button>
        <div class="caixa-confirma" id="caixa-confirma">
            <p id="titulo-confirma">Aguarde</p>
            <button id="btn-confirma" type="submit" class="btn btn-primary">Adicionar</button>
        </div>
        
        
    </form>
</div>
