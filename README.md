# Faucethub-PaymentUI
Payment UI for Faucethub for Faucet Owners who want a local API to access Payment Methods

## Installation
This code was tested using XAMPP. Install XAMPP and import the whole folder into the htdocs file.
Once the Apache module is running, navigate from your chosen browser to the localhost -> the file directory (PaymentUI). (i.e. localhost/PaymentUI)

## How to Use
Key in your API Key to access the API.
Select from 1 of the 4 request types:
1) Check Address Existence - Required Address and Currency Ticker - This checks if the address for that specific currency is existant in the faucethub address lists.
2) Check Own Balance - Required Currency Ticker - This checks the balance of your own faucethub account for that particular currency.
3) Pay User - Required Address, Currency Ticker and Amount - This pays the user with the entered address, an amount in satoshis or 10^-8, in the selected currency.
4) Recent Payouts Made - Required Currency Ticker - this checks the recent payouts made by the faucet whose API Key is being used. (Currently not working properly)

Feedback from the faucethub API is displayed on screen after every API request. Please record the required information after each request as these responses are not recorded and will be cleared after a refresh or when the next request is made.

### Important Notes
Note that the API Key is kept temporarily using PHP Sessions. Thus, once the session is closed the recorded key is lost and has to be retyped the next time the App is used.

Note that the API Key that is recorded in the PHP Session is not cross checked with Faucethub's API unless a request is made. Thus, please ensure that the API Key is correctly keyed in first before trying to make any API Requests.

You are required to obtain your faucet API Key from faucethub's faucet owner/manager system.

PHP Sessions containing the payment information, like address, type of currency and amount except the API Key, are cleared after every API request.


## TODO
Add group payment option via upload of .csv files.

### Liability
This is free and unencumbered software released into the public domain.

Anyone is free to copy, modify, publish, use, compile, sell, or distribute this software, either in source code form or as a compiled binary, for any purpose, commercial or non-commercial, and by any means.

In jurisdictions that recognize copyright laws, the author or authors of this software dedicate any and all copyright interest in the software to the public domain. We make this dedication for the benefit of the public at large and to the detriment of our heirs and successors. We intend this dedication to be an overt act of relinquishment in perpetuity of all present and future rights to this software under copyright law.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
