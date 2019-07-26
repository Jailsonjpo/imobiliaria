@if(isset($registro->imagem))

<div class="file-field">

    <input type="text" name="titulo" class="validate" value="{{isset($registro->titulo) ? $registro->titulo : '' }}">

    <label>Título</label>

</div>

<div class="file-field">

    <input type="text" name="descricao" class="validate" value="{{isset($registro->descricao) ? $registro->descricao : '' }}">

    <label>Descricao</label>

</div>

<div class="file-field">

    <input type="text" name="ordem" class="validate" value="{{isset($registro->ordem) ? $registro->ordem : '' }}">

    <label>Ordem</label>

</div>

<div class="row">
    <div class="file-field">

        <div class="file-fild input-field col m6 ">
        <div class="btn">
            <span>Imagem</span> 
            <input type="file" name="imagem">

        </div>

        <div class="file-path-wrapper">

            <input type="text" class="file-path validate">

        </div>

    </div>

    <div class="col m6 s12">

        <img width="120" src="{{asset($registro->imagem)}}" alt="">
    </div>

    </div>
    </div>
   
@else

<div class="row">

    <div class="file-field input-field col m12 s12">

        <div class="btn">
            <span>Upload de Imagens</span> 
            <input type="file" multiple name="imagens[]">

        </div>

        <div class="file-path-wrapper">

            <input type="text" class="file-path validate">

        </div>

    </div>
    
    </div>
  
@endif




