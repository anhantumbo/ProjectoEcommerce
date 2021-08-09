<div>
    <div class="container" style="padding: 30px 0;">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Todos Produtos
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">Todos os Produtos</a>

                            </div>

                        </div>
                        <div class="panel-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}

                                </div>

                            @endif
                          <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addSlider">
                                
                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Titulo </label>
                                    <div class="col-md-4">
                                       <input type="text" placeholder="Titulo" class="form-control input-md" wire:model="title"/>
                                    </div>
                               </div>
                               <div class="form-group">
                                <label class="col-md-4 control-label"> Subtitulo </label>
                                <div class="col-md-4">
                                <input type="text" placeholder="Subtitulo" class="form-control input-md" wire:model="subtitle"/>
                                </div>
                           </div>
                           <div class="form-group">
                            <label class="col-md-4 control-label"> Preço </label>
                            <div class="col-md-4">
                            <input type="text" placeholder="Preço" class="form-control input-md" wire:model="price"/>
                            </div>
                       </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label"> Link </label>
                               <div class="col-md-4">
                                  <input type="text" placeholder="Link" class="form-control input-md" wire:model="link"/>
                               </div>
                          </div>

                          

                       <div class="form-group">
                        <label class="col-md-4 control-label"> Imagem do Produto </label>
                        <div class="col-md-4">
                            <input type="file"  class="input-file" wire:model="image"/>
                            @if ($image)

                                <img src="{{$image->temporaryUrl()}}" width="120">

                            @endif
                        </div>
                   </div>

                   <div class="form-group">
                            <label class="col-md-4 control-label"> Estado </label>
                            <div class="col-md-4">
                            <select class="form-control " wire:model="status">
                                <option value="0">Inactivo</option>
                                <option value="1">Activo</option>
                            </select>
                            </div>
                        </div>

                  
                           

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                               <button type="submit"  class="btn btn-primary">Enviar</button>
                            </div>
                       </div>

                          </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
