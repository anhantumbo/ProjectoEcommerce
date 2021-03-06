<div>
    <div class="container" style="padding: 30px 0;">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                 Editar Produto
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Todos os Produtos</a>

                            </div>

                        </div>
                        <div class="panel-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}

                                </div>

                            @endif
                          <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                                 <div class="form-group">
                                     <label class="col-md-4 control-label"> Nome do Produto </label>
                                     <div class="col-md-4">
                                        <input type="text" placeholder="Nome do Produto" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                                        @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Produto Slug </label>
                                    <div class="col-md-4">
                                       <input type="text" placeholder="Produto Slug" class="form-control input-md" wire:model="slug"/>
                                       @error('slug') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                               </div>
                               <div class="form-group">
                                <label class="col-md-4 control-label"> Pequena Descri????o </label>
                                <div class="col-md-4" wire:ignore>
                                   <textarea  placeholder="Pequena Descri????o" id="short_description" class="form-control" wire:model="short_description"></textarea>
                                   @error('short_description') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                           </div>
                           <div class="form-group">
                            <label class="col-md-4 control-label"> Descri????o do Produto </label>
                            <div class="col-md-4" wire:ignore>
                               <textarea  placeholder="Descri????o do Produto" id="description" class="form-control" wire:model="description"></textarea>
                               @error('description') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                       </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label"> Pre??o Regular </label>
                               <div class="col-md-4">
                                  <input type="text" placeholder="Pre??o Regular" class="form-control input-md" wire:model="regular_price"/>
                                  @error('regular_price') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label"> Pre??o de Venda </label>
                            <div class="col-md-4">
                               <input type="text" placeholder="Pre??o de Venda" class="form-control input-md" wire:model="sale_price"/>
                              
                            </div>
                       </div>
                       <div class="form-group">
                            <label class="col-md-4 control-label"> SKU </label>
                            <div class="col-md-4">
                            <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU">
                            @error('SKU') <p class="text-danger">{{$message}}</p>@enderror
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"> Stock </label>
                            <div class="col-md-4">
                            <select class="form-control " wire:model="stock_status">
                                <option value="instock">Dispon??vel</option>
                                <option value="outstock">Indispon??vel</option>
                            </select>
                            @error('stock_status') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Facturado </label>
                            <div class="col-md-4">
                            <select class="form-control " wire:model="featured">
                                <option value="0">N??o</option>
                                <option value="1">Sim</option>
                            </select>
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"> Quantidade </label>
                            <div class="col-md-4">
                               <input type="text" placeholder="Quantidade" class="form-control input-md" wire:model="quantity">
                               @error('quantity') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                       </div>

                       <div class="form-group">
                        <label class="col-md-4 control-label"> Imagem do Produto </label>
                        <div class="col-md-4">
                            <input type="file"  class="input-file" wire:model="newimage"/>
                            @if ($newimage)

                            <img src="{{$newimage->temporaryUrl()}}" width="120">
                            @else

                            <img src="{{asset('assets/images/products')}}/{{$image}}" width="120">
                            @endif
                            @error('newimage') <p class="text-danger">{{$message}}</p>@enderror
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="col-md-4 control-label"> Galeria de Images </label>
                        <div class="col-md-4">
                            <input type="file"  class="input-file" wire:model="newimages" multiple/>
                            @if ($newimages)
                                @foreach($newimages as $newimage)
                                @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="120">     
                                @endif

                                @endforeach
                            
                            @else

                            @foreach($images as $image)
                                    @if($image)
                                    <img src="{{asset('assets/images/products')}}/{{$image}}" width="120">
                                    @endif

                            
                            @endforeach
                            
                            @endif
                           
                        </div>
                   </div>


                           <div class="form-group">
                            <label class="col-md-4 control-label"> Categorias </label>
                            <div class="col-md-4">
                            <select class="form-control " wire:model="category_id">
                                <option value="">Escolha a Categoria</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                @error('category_id') <p class="text-danger">{{$message}}</p>@enderror
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

    @push('scripts')

<script>

    $(function(){

     tinymce.init({
      selector:'#short_description',
      setup:function(editor){
          editor.on('Change',function(e){

            tinyMCE.triggerSave();
            var sd_data = $('#short_description').val();
            @this.set('short_description',sd_data);
          });
      }


     });

     tinymce.init({

        selector: '#description',
        setup:function(editor){
            editor.on('Change',function(e){
                tinyMCE.triggerSave();
                var d_data = $('#description').val();
                @this.set('description',d_data);


            });
        }
     });

    });




</script>


@endpush
