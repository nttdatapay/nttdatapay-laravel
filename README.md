# nttdatapay-laravel

## Prerequisites
- PHP 7.3 to 8.4
- UAT MID and keys will be provided by the NTT DATA Payment Services.

## Installation
1. Refer to the code from `Http/Controllers` to create the payment request and handle the response section.

2. Add the `cacert.pem` file to the controller folder itself.

3. Call the createTokenId function to get the AtomtokenId.

4. Replace the necessary data in the index function(payurl, amount, login, password, productid, returnurl etc.)

5. In the views folder in `atompay.blade.php` we call openPay() which will open the payment page.

6. Configure the `atomcheckout.js` in accordance with UAT and Production environments. Also, change all necessary information.

7. To avoid the CSRF token issue, add `/response` to `Http/Middleware/VerifyCsrfToken.php`.
