<div>
    <style>
        nav svg{

            height: 20px;
        }
        nav .hidden{

            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">

        <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                       <div class="col-md-6">
                        Categorias da Página Incial
                       </div>
                        <div class="col-md-6">
                                <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-right">Escolha a Categoria</a>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent="updateHomeCategory">
                        <div class="form-group" wire:ignore>

                            <label class="col-md-4 control-label">Escolha a Categoria</label>

                            <div class="col-md-4">
                            
                                <select class="sel_categories form-control" name="categories[]" multiple="multiple" wire:model="selected_categories">
                            
                                @foreach($categories as $category)

                                <option value="{{$category->id}}">{{$category->name}}</option>
                                
                                @endforeach


                                </select>
                            </div>
                        
                        </div>

                        <div class="form-group">

                                <label class="col-md-4 control-label">Não há Produto</label>

                                <div class="col-md-4">

                                    <input type="text" class="form-control input-md" wire:model="numberofproducts"/>

                                </div>

                        </div>

                        <div class="form-group">

                                <label class="col-md-4 control-label">Não há Produto</label>

                                <div class="col-md-4">

                                    <button type="submit" class="btn btn-primary">Salvar</button>

                                </div>

                        </div>
                    
                    </form>
                   
                </div>

            </div>

        </div>

    </div>


</div>

@push('scripts')

<script>
  $(document).ready(function(){

    $('.sel_categories').select2();
    $('.sel_categories').on('change',function(e){

        var data =$('.sel_categories').select2("val");
        @this.set('selected_categories',data);
    });

  });

</script>


@endpush


