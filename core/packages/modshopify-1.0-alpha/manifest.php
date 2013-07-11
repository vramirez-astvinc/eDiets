<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:
 
The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.
 
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
',
    'readme' => '--------------------
Extra: modShopify
Developer: Marc Loehe (@boundaryfunc)
--------------------
Version: 1.0
 
A modX extra to show Shopify Products.
',
    'changelog' => 'Changelog

ModShopify 1.0-alpha
====================================
- Initial commit
',
    'setup-options' => 'modshopify-1.0-alpha/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'b7f23ba6deb1b6f56a42296033ee75f8',
      'native_key' => 'modshopify',
      'filename' => 'modNamespace/20f8fef0e5db41a91f5c4c3fd8110d6b.vehicle',
      'namespace' => 'modshopify',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c853e58112c848c3839343f31e1e5dfe',
      'native_key' => 'modshopify.api_key',
      'filename' => 'modSystemSetting/50950db0556053a30abf910e7881533a.vehicle',
      'namespace' => 'modshopify',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7bf44dc57013c2dfa04868bc5c170377',
      'native_key' => 'modshopify.auth_secret',
      'filename' => 'modSystemSetting/690a259258a1ba0d6bd85dbd1a23cf3f.vehicle',
      'namespace' => 'modshopify',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e82fac64ac247e7bdde158106dc1ba6e',
      'native_key' => 'modshopify.auth_token',
      'filename' => 'modSystemSetting/52ea738d50ae3c41c92d8355186b8c21.vehicle',
      'namespace' => 'modshopify',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3c5f4f04a2077c6a4c0a3220e8d7f5f4',
      'native_key' => 'modshopify.shop_domain',
      'filename' => 'modSystemSetting/0b60a998442a279c5715d4612f55971e.vehicle',
      'namespace' => 'modshopify',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'a31328ae892c16d6f15b05aff9769340',
      'native_key' => 1,
      'filename' => 'modCategory/2293b97fd130b4340125316b3e6ba715.vehicle',
      'namespace' => 'modshopify',
    ),
  ),
);