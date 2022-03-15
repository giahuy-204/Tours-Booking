<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    body {
        font-family: 'Montserrat', sans-serif
    }

    .card {
        border: 1px solid;
    }
    .logo {
        background-color: #eeeeeea8
    }

    .totals tr td {
        font-size: 13px
    }

    .footer {
        background-color: #eeeeeea8
    }

    .footer span {
        font-size: 12px
    }

    .product-qty span {
        font-size: 12px;
        color: black;
    }
</style>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="invoice p-5">
                    <h5>Your order Confirmed!</h5> <span class="font-weight-bold d-block mt-4">Hello, {{Session('bill')->first_name}} {{Session('bill')->last_name}}</span>
                    <span>Your order has been confirmed. We will contact you soon!</span>
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="py-2"><span class="d-block text-muted">Order Date</span> <span>{{Session('bill')->date_booked}} (UTC Time)</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="py-2"><span class="d-block text-muted">Order No</span>
                                        <span>{{Session('bill')->id}}</span></div>
                                </td>
                                <td>
                                    <div class="py-2"><span class="d-block text-muted">Payment</span> <span><img
                                            src="https://downloadlogomienphi.com/sites/default/files/logos/download-logo-vector-vi-vnpay-mien-phi.jpg"
                                            width="20"/></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td>
                                    <h4>Bill details</h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60%"><span class="font-weight-bold">Adult (>17)</span>
                                    <div class="product-qty"><span class="d-block">Number: {{Session('bill')->adult_number}}</span></div>
                                </td>
                                <td width="20%">
                                    <div class="text-right"><span class="font-weight-bold">${{Session('bill')->adult_price}}</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="60%"><span class="font-weight-bold">Children (14-17)</span>
                                    <div class="product-qty"><span class="d-block">Number: {{Session('bill')->children_number}}</span></div>
                                </td>
                                <td width="20%">
                                    <div class="text-right"><span class="font-weight-bold">${{Session('bill')->children_price}}</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="60%"><span class="font-weight-bold">Children (<14)</span>
                                    <div class="product-qty"><span class="d-block">Number: {{Session('bill')->youngchildren_number}}</span></div>
                                </td>
                                <td width="20%">
                                    <div class="text-right"><span class="font-weight-bold">${{Session('bill')->youngchildren_price}}</span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                            <table class="table table-borderless">
                                <tbody class="totals">
                                <tr class="border-top border-bottom">
                                    <td>
                                        <div class="text-left"><span class="font-weight-bold">Total</span></div>
                                    </td>
                                    <td>
                                        <div class="text-right"><span class="font-weight-bold">${{Session('bill')->total_price}}</span></div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="font-weight-bold mb-0">Thanks for choosing us!</p> <span>Wanderer</span>
                    <br>
                    <br>
                    <a href="/index"><button class = "btn btn-secondary">Back to HomePage</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
