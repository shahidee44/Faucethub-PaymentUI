<div id="main">
    <!-- JUMBOTRON -->
    <div class="jumbotron text-center">

        <h1><strong>QuickPay</strong></h1>

        <p class="lead">QuickPay payment UI was designed due to the lack of manual payment methods that can be easily implemented for Faucethub. It provides a clean interface with no fuss for faucet owners using Faucethub to pay their users. Feel free to fork and improve on the code!</p>

    </div>
    <div class="container">
        <?php if(empty(Session::getSession('api_key'))): ?>
            <h2 class="text-center my-5"> Please input your API Key to get started </h2>
        <?php else: ?>
            <?php include('interface.php') ?>
        <?php endif ?>
    </div>
</div>