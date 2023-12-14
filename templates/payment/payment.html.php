<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4"> <i class="fab fa-paypal text-info"></i>Payment Details</h3>

                    <!-- Payment Form -->
                    <form action="<?= site_url('/payment') ?>" method="post">
                        <div class="mb-3">
                            <label for="gcashEmail" class="form-label">Paypal Email</label>
                            <p class="small">(<i class="fab fa-paypal text-info"></i>PayPal)</p>
                            <input type="text" class="form-control" name="gcashEmail" id="gcashEmail" placeholder="1234 5678 9012 3456">
                        </div>

                        <div class="mb-3">
                            <label for="currency" class="form-label">Currency</label>
                            <select class="form-control" id="currency" name="currency">
                                <option value="USD">USD</option>
                                <option value="PHP">PHP</option>
                                <option value="BIT">BIT</option>
                                <option value="ETH">ETH</option>
                            </select>
                        </div>                        
                        <button type="submit" class="btn btn-primary" name="payment_submit" value="1">Add Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</header>