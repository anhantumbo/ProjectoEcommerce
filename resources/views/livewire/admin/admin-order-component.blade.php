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
               All Orders
            
            </div>
              <div class="panel-body">
              @if(Session::has('order_message'))
                            <div class="alert alert-success" role="alert">
                            {{Session::get('order_message')}}
                            </div>
                    @endif
                <table class="table table-striped">
                   <thead>
                   
                     <tr>
                     <th>OrderId</th>
                     <th>Subtotal</th>
                     <th>Desconto</th>
                     <th>tax</th>
                     <th>Total</th>
                     <th>Primeiro Nome</th>
                     <th>Último Nome</th>
                     <th>Telefone</th>
                     <th>Email</th>
                     <th>Estado</th>
                     <th>Data do Pedido</th>
                     <th colspan="2"  class="text-center">Acção</th>
                     
                     
                     </tr>
                   
                   </thead>

                  <tbody>
                    @foreach ($orders as $order)
                    <tr>
                    <td>{{$order->id}}</td>
                    <td>${{$order->subtotal}}</td>
                    <td>${{$order->discount}}</td>
                    <td>${{$order->tax}}</td>
                    <td>${{$order->total}}</td>
                    <td>{{$order->firstname}}</td>
                    <td>{{$order->lastname}}</td>
                    <td>{{$order->mobile}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->created_at}}</td>
                   
                    <td>
                     <a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm"> Detalhes</a>
                                    
                    </td>
                    <td>
                    <div class="dropdown">
                        <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                             <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a></li>
                             <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a></li>
                        </ul>
                    </div>
                    </td>
                    
                   
                    </tr>
                    @endforeach
                  </tbody>
                  
                  
                  
                </table>
                  {{$orders->links()}}
                    
              </div>
            
            </div>
      
      </div>
    </div> 
</div>
