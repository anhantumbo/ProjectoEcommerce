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
                        Todos Os Slides
                       </div>
                        <div class="col-md-6">
                                <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-right">Adicionar</a>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th>Id</th>
                                <th>Imagem</th>
                                <th>Titulo</th>
                                <th>Subtitulo</th>
                                <th>Preço</th>
                                <th>Link</th>
                                <th>Estado</th>
                                <th>Data</th>
                                <th>Acção</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                            <tr>

                                <td>{{$slider->id}}</td>
                                <td><img src="{{asset('assets/images/sliders')}}/{{$slider->image}}" width="120"></td>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->subtitle}}</td>
                                <td>{{$slider->price}}</td>
                                <td>{{$slider->link}}</td>
                                <td>{{$slider->status == 1 ? 'Active':'Inactive' }}</td>
                                <td>{{$slider->created_at}}</td>
                               
                                <td>
                                    <a href="{{route('admin.edithomeslider',['slider_id'=>$slider->id])}}" ><i class="fa fa-edit fa-2x"></i></a></td>
                                    <td><a href="" wire:click.prevent="deleteSlider({{$slider->id}})" style="margin-left: 10px;"><i class="fa fa-times fa-2x text-danger"></i></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                </div>

            </div>

        </div>

    </div>


</div>


