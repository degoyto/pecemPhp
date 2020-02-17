
<div class="container">
    <h1>Adicionar Nova Notícia</h1>
    <form method="POST" action="processa"  enctype="multipart/form-data" id="form-noticia">
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
            
            <label for="exampleInputPassword1">Tipo de Notícia</label>
        <select name="tipo" class="form-control" required style="margin-bottom:20px">
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
                <label for="exampleInputEmail1">Autor</label>
                <input type="text" name="autor" class="form-control"  placeholder="Autor" required>
                
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Conteudo</label>
                <textarea name="conteudo" id="summernote"></textarea>
                </textarea>
        </div>

        
        <button type="button" onclick="uploadImage()" class="btn btn-primary">Enviar</button>

        <div class="caixa-confirma-aparece" id="caixa-confirma">
            <div class="container quadro-escolha" style="width:320px">
                <img class='img-aguarde' src="https://lh3.googleusercontent.com/proxy/Mx34DjCzSKkVDz83UVrxsejaXE6aJ5C4hjajENpls4ijPD4bBcAlgSolCenSF1_AHt9FcDHPAD44ul1UkCvJd8VsgnXPpUQXHZHMmE2vMfHq0CPjHG5DjI0TtGc"/>
                <button id="btn-confirma" type="submit" class="btn btn-primary">Enviar</button>
            </div>
            
        </div>
        
        
    </form>
    
    
    
</div>
