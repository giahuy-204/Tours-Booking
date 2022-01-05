<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .form-error {
        border: 2px solid #e74c3c;
    }
</style>
<main class="main">
    <div class="container" style="margin-bottom: 3rem">
        <div class="py-5 text-center">
            <h2 style="color: darkslategray">Checkout form</h2>
        </div>
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your tour</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <img src="{{$bill->image}}" alt="" style="width: 150px; height: 150px">
                        </div>
                        <div class="about__description">
                            <h5>{{$bill->name}}</h5>
                            <p class="date-start">Date start: {{$bill->date_start}}</p>
                            <p class="number-of-days">Number of days: {{$bill->number_days}}</p>
                            <p>Available: <span class="available">{{$bill->seats}} seats</span></p>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <table width="100%">
                            <tr>
                                <th>Age</th>
                                <th>Price</th>
                            </tr>
                            <tr>
                                <td>Adult (> 17)</td>
                                <td class="adult-price">${{$bill->adult_price}}</td>
                            </tr>
                            <tr>
                                <td>Children (14 - 17)</td>
                                <td class="children-price">${{$bill->children_price}}</td>
                            </tr>
                            <tr>
                                <td>Children (< 14)</td>
                                <td class="y-children-price">${{$bill->youngchildren_price}}</td>
                            </tr>
                        </table>
                    </li>
                    <!-- <button onclick = "calculate()">Calculate</button> -->
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form method="post" class="needs-validation" novalidate="">
                @csrf
                        <div class="form-group">
                            <label for="adult">Number of Adult (> 17)</label>
                            <input type="number" class="form-control{{($errors->first('adult_number') ? " form-error" : "")}}" id="adult_number" name ="adult_number" style="width: 100%" onkeyup="calculate()">
                            @error('adult_number')
                                <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="children">Number of Children (14 - 17)</label>
                            <input type="number" class="form-control{{($errors->first('children') ? " form-error" : "")}}" id="children" name ="children" style="width: 100%" onkeyup="calculate()">
                            @error('children')
                                <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="y-children">Number of Children (< 14)</label>
                            <input type="number" class="form-control{{($errors->first('y_children') ? " form-error" : "")}}" id="y_children" name = "y_children" style="width: 100%" onkeyup="calculate()">
                            @error('y_children')
                                <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <!-- <strong id = "total_price" name = "total_price">$0</strong> -->
                        <input type="text" id = "total_pricedisplay" value = "$0" readonly style="border:0; outline:0">
                        <input type="text" id = "total_price" name = "total_price" hidden>
                    </li>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control{{($errors->first('first_name') ? " form-error" : "")}}" id="first_name" name="first_name" >
                            @error('first_name')
                                <strong>{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control{{($errors->first('last_name') ? " form-error" : "")}}" id="last_name" name ="last_name" >
                            @error('last_name')
                                <strong>{{$message}}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control{{($errors->first('email') ? " form-error" : "")}}" id="email" placeholder="you@example.com" name = "email">
                            @error('email')
                                <strong>{{$message}}</strong>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control{{($errors->first('phone') ? " form-error" : "")}}" id="phone" placeholder="0182777333" name="phone">
                            @error('phone')
                                <strong>{{$message}}</strong>
                            @enderror
                    </div>
                    <hr class="mb-4">
                    <h4 class="mb-3">Payment</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                    checked="" required="">
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                    required="">
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                    required="">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback"> Name on card is required</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback"> Credit card number is required</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            <div class="invalid-feedback"> Expiration date required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback"> Security code required</div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                    <a href="/index" class="btn btn-secondary btn-lg btn-block">Come back home</a>
                </form>
            </div>
        </div>
    </div>
</main>

<script>
    function calculate() {
        document.getElementById("total_pricedisplay").value = "$" +
        (document.getElementById("adult_number").value * {{$bill->adult_price}}+
        document.getElementById("children").value * {{$bill->children_price}}+
        document.getElementById("y_children").value* {{$bill->youngchildren_price}})

        document.getElementById("total_price").value =
        (document.getElementById("adult_number").value * {{$bill->adult_price}}+
        document.getElementById("children").value * {{$bill->children_price}}+
        document.getElementById("y_children").value* {{$bill->youngchildren_price}})
    }
</script>
