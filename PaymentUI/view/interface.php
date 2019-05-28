<h1 class="text-center my-4"> Welcome to QuickPay </h1>
<div class="container">
    <form method="post" action="main/accessMethod">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="wallet_address">Wallet Address</label>
                <input class="form-control mr-sm-2" type="text" name="wallet_address" placeholder="Wallet Address" aria-label="Wallet Address">
            </div>
            <div class="form-group col-md-2">
                <label for="currency">Currency Ticker*</label>
                <input class="form-control mr-sm-2" type="text" name="currency" placeholder="BTC (Required)" aria-label="Currency Ticker" required>
            </div>
            <div class="form-group col-md-3">
                <label for="currency">Amount (in Satoshis)</label>
                <input class="form-control mr-sm-2" type="text" name="amount" placeholder="100 (Only if required)" aria-label="Payment Amount">
            </div>
            <div class="form-group col-md-3">
                <label for="request_type">Request Type</label>
                    <select class="form-control" name="request_type">
                        <option selected value="checkAddress">Check Address Existence</option>
                        <option value="checkOwnBalance">Check Own Balance</option>
                        <option value="pay">Pay User</option>
                        <option value="recentPayout">Recent Payouts Made</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-3">
                <button class="btn btn-outline-primary" type="submit">Submit Request</button>
            </div>
        </div>
    </form>
</div>
<div class="container">
    <?php if(!empty(Session::getSession('result'))): ?>
        <h3 class="my-1"> Server Response: </h3>
        <table class="table table-hover table-dark">
          <tbody>
            <?php foreach(Session::getSession('result') as $key => $value): ?>
            <tr>
              <th scope="row"><?= $key ?></th>
              <td><?= $value ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
    <?php elseif (!empty(Session::getSession('error'))): ?>
        <h4><?= Session::getSession('error') ?></h4>
    <?php endif; ?>
    <?php Session::createSession('result', ''); Session::createSession('error', ''); ?>
</div>

