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

      <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">
               All Orders
            
            </div>
              <div class="panel-body">
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
                     <th>Acção</th>
                     
                     
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
                    <td>{{$order->created_at}}</td>
                    <td>
                     <a href="{{route('user.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm"> Detalhes</a>
                                    
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
