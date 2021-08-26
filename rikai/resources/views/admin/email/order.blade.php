<h2>Hi {{$cart->user()->value('name')}}</h2>
<p>
   <b>{{__('message.buybook_successful')}}</b>
</p>
<div class="row">
   <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{__('message.Sale_Book')}}</h4>
            <div class="table-responsive">
               @if(session()->has('checkoutFailMessage'))
               <span class="fail" role="alert">
               <strong>{{ session()->get('checkoutFailMessage') }}</strong>
               </span>
               @endif
               @if(session()->has('requestResolve'))
               <span class="success" role="alert">
               <strong>{{ session()->get('requestResolve') }}</strong>
               </span>
               @endif
               <table class="table">
                  <thead>
                     <tr>
                        <th>{{__('message.Name_Book')}}</th>
                        <th>{{ __('message.stock') }}</th>
                        <th>{{__('message.Quantity')}}</th>
                        <th>{{ __('message.pricePerBook') }}</th>
                        <th>{{__('message.price')}}</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($cart->cartItems()->get() as $item)
                     <tr class="item">
                        <td>{{ $item->book->title }}</td>
                        <td class="stock">{{ $item->book->quantity }}</td>
                        <td class="quantity">{{ $item->quantity }}</td>
                        <td>{{ $item->book->price }}</td>
                        <td class="unit-total">{{ $item->total_price }}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="col-md-6 grid-margin stretch-card">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title">{{ __('message.card') }}</h4>
         <div class="form-group row">
            <div class="col">
               <label>{{ __('message.nameOfCard') }}</label>
            </div>
            <div class="col">
               <label>{{ $cart->name_of_card }}</label>
            </div>
            <div class="col">
               <label>{{ __('message.creditCardNumber') }}</label>
            </div>
            <div class="col">
               <label>{{ $cart->credit_card_number }}</label>
            </div>
         </div>
      </div>
      <div class="card-body">
         <h4 class="card-title">{{__('message.Checkout')}}</h4>
         <div class="form-group row">
            <div class="col">
               <label>{{__('message.Total')}}</label>
            </div>
            <div class="col">
               <label id="sum" cartid="{{ $cart->id }}">$ {{ $cart->total_price }}</label>
            </div>
         </div>
      </div>
   </div>
</div>