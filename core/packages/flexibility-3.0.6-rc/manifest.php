<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'Flexibility
Copyright 2012 Menno Pietersen <info@designfromwithin.com>

Flexibility is free software; you can redistribute it and/or modify it
under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
 
Flexibility is distributed in the hope that it will be useful, but WITHOUT ANYWARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with Flexibility (gpl-3.0.txt); if not, write to the Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA',
    'readme' => 'Flexibility - version 3.0.6-rc
http://flexibilitymodx.com/

This package is meant to be used once to quick-start MODX website projects. It will install a lot of things and provide a nice responsive MODX website based on the Foundation framework from ZURB.

-----------------------------------------------------------------------------------------------------------
!!! ATTENTION !!!
-----------------------------------------------------------------------------------------------------------

- The Slider items Template Variable (called \'multiItemsGrid\') will not work after install, you need to open the \'multiItemsGrid\' Template Variable, and re-save it.
Simply go to: \'Elements\' tree > \'Template Variables\' > \'Flexibility\' and open the \'multiItemsGrid\' Template Varibale.
Edit any field (like the name, remove the final \'e\' and retype it) and save the Template Varibale. Now the Slider Items option will work as expected.
- If you change or edit any Chunk, Snippet, Template Variable or Plugin that was included in the Flexibility package, please rename it! Or it will be overwritten on any future updates.
- Any needed packages (like Wayfinder) will be installed automatically by the Flexibility package. You will be able to update and edit any sub-packages at a later date.

-----------------------------------------------------------------------------------------------------------
ABOUT
-----------------------------------------------------------------------------------------------------------

"Flexibility" is a HTML5/CSS3/jQuery based frontend MODx Revolution template based on the "Foundation 3.2" (http://foundation.zurb.com/).
With this package you will have a fully functional website with a dropdown nav, contact form, slider and a image gallery.

"Flexibility" is designed and coded by Menno Pietersen
Portfolio & blog: DESIGNfromWITHIN http://designfromwithin.com
Twitter: MennoPP https://twitter.com/MennoPP

-----------------------------------------------------------------------------------------------------------
QUICKSTART
-----------------------------------------------------------------------------------------------------------

1. Download and install Flexibility from the MODX package manager.

-----------------------------------------------------------------------------------------------------------
MANUAL INSTALL
-----------------------------------------------------------------------------------------------------------

1. Install MODx Revolution on your website.

2. download the package and upload the "flexibility-3.0.6-rc.transport.zip" file to "<your_modx_install>/core/packages/" (You only need the transport.zip file, do not unzip it yourself)

3. Install the "Flexibility" package: Go to "System" > "Package Management" > "Add New Package" > "Search Locally for Packages" > "Yes".

(to be sure clear your cache > "Site" > "Clear Cache")

-----------------------------------------------------------------------------------------------------------
ADDING AND CHANGING CONTENT
-----------------------------------------------------------------------------------------------------------

Your MODX website needs three main thing:

1. A Logo.
- Add this under "Resources" > "Site settings" > "Template Variables" tab > "Logo"

2. E-mail adress for the contact form.
- Add this under "Resources" > "Site settings" > "Template Variables" > "Email adress for the contactform"

3. Content for the footer.
- Select how many footer boxes you want under "Resources" > "Site settings" > "Template Variables" > "Footer boxes"
- Add content for each footer box under "Resources" > "Site settings" > "Template Variables" > "Footer-content box 1", "Footer-content box 2", "Footer-content box 3" and "Footer-content box 4"

4. (optional) Slides/content for the slider.
- Add this under "Resources" > "Site settings" > "Template Variables" > "Slider items"
- Activate the slider on any page under: "Template Variables".

5. Other page content is added the normal way on each resource, see the "Template Variables" tab on each resource for extra options. 

-----------------------------------------------------------------------------------------------------------
UPDATE instructions:
-----------------------------------------------------------------------------------------------------------

- All sub-packages (like Wayfinder) are installed by Flexibility and you will be able to remove/update each sub-package under "System" > "Package Management".
- You can update the package via package installer, Flexibility will not override excisiting Resources.

-----------------------------------------------------------------------------------------------------------
CREDITS:
-----------------------------------------------------------------------------------------------------------

ALL supporters and contributors:
- http://foundation.zurb.com/
- http://html5boilerplate.com/ (not used but got me started....)
- the MODX Revolution team for the whole MODX system
- Anselm Hannemann for the MODx Boilerplate, http://anselm.novolo.de/
- The MODX community for all the great tips and support!

-----------------------------------------------------------------------------------------------------------
BUGS and FEATURE REQUESTS:
-----------------------------------------------------------------------------------------------------------

Please post on GitHub (https://github.com/DESIGNfromWITHIN/Flexibility) or e-mail me at: info@designfromwithin.com',
    'changelog' => 'Changelog for Flexibility

flexibility-3.0.6-rc.transport (18 januari 2013)
====================================
- Added a mobile input navigation for smaller screens
- The full template should now be faster and more streamlined

flexibility-3.0.5-rc.transport (12 december 2012)
====================================
- Changed UPDATE_OBJECT back to TRUE (xPDOTransport::UPDATE_OBJECT => true), this was not working... Will try to create a seperate update package to Flexibility.

flexibility-3.0.4-rc.transport (4 december 2012)
====================================
- Fixed Slider MIGX items (again)

flexibility-3.0.3-rc.transport (14 november 2012)
====================================
- Fixed Slider MIGX item, should work fine now

flexibility-3.0.2-rc.transport (6 november 2012)
====================================
- Flexibility is a Release Candidate now!
- Updated to Foundation 3.2
- Changed UPDATE_OBJECT to FALSE (xPDOTransport::UPDATE_OBJECT => false), should prevent overwriting content on existing Flexibility installs.
- Added slide content
- Updated formit to 2.1.2-pl
- Updated getresources to 1.5.1-pl
- Updated migx to 2.3.2-pl

flexibility-3.0.1-alpha.transport (3 september 2012)
====================================
- Updated to Foundation 3.1.1
- Tested for MODX Revolution 2.2.5-pl

flexibility-3.0.0-alpha.transport (16 august 2012)
====================================
- Updated to Foundation 3.0

flexibility-2.1.1-alpha.transport (16 august 2012)
====================================
- Updated FormIt to formit-2.1.1-pl.transport
- Updated Gallery to gallery-1.5.2-pl.transport
- Updated GetResources to getresources-1.5.0-pl.transport
- Updated MIGX to migx-2.3.0-pl.transport
- Updated SimpleSearch to simplesearch-1.6.0-pl.transport
- Updated TinyMCE to tinymce-4.3.3-pl.transport
- Updated TinyMCE to tinymce-4.3.3-pl.transport

flexibility-2.1.0-alpha.transport (2 august 2012)
====================================
- Fixed the Image slider (many thanks to: Designforge)
- Updated MIGX to migx-2.2.3-pl.transport

flexibility-2.0.9-alpha.transport (7 july 2012)
====================================
- Added the first commit adding the In-Field-Labels jquery plugin (many thanks to: frogabog)

flexibility-2.0.8-alpha.transport (5 june 2012)
====================================
- Fixed the php thumb bug and gallery
- Added the latest version of fancybox.js
- Updated packages Articles to articles-1.6.1-pl.transport
- Updated packages Simple Search to simplesearch-1.6.0-pl.transport
- Updated packages MIGX to migx-2.0.1-pl.transport
- Updated packages Gallery to gallery-1.5.0-pl.transport
- Added "\'gallery.thumbs_prepend_site_url\' => true" setting to the install
- Added "\'phpthumb_allow_src_above_docroot\' => true" setting to the install

flexibility-2.0.6-alpha.transport (11 march 2012)
====================================
- Changed TV order
- Removed unwanted code
- Added Public License
- Remove includeTemplate code, now using Media Sources
- Updated packages (FormIt, getResources, simplesearch, TinyMCE)
- Updated Foundation Framework to 2.2
- Fixed small dropdown issue

flexibility-2.0.5-alpha.transport (8 febuary 2012)
====================================
- Fixed sub-page-2 bug (thanks Showa!)

flexibility-2.0.4-alpha.transport (5-2-2012)
====================================
- Template variables are now added to the correct template.
- Ready for ALPHA testing!

flexibility-2.0.3-beta.transport (4 febuary 2012)
====================================
- Using just one category now.
- Fixed MIGX bug.

flexibility-2.0.2-beta.transport (17 december 2011)
====================================
- Added MIGX TV\'s for adding slides to the image slider.

flexibility-2.0.1-beta.transport (13 december 2011)
====================================
- First version online!',
    'setup-options' => 'flexibility-3.0.6-rc/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'c926ba72e9e3eee73c0e67df25a14932',
      'native_key' => 'flexibility',
      'filename' => 'modNamespace/d0a3724103f752e23932dfffd6d29125.vehicle',
      'namespace' => 'flexibility',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '6906007149e369caee00dbfcae0b1bd9',
      'native_key' => '6906007149e369caee00dbfcae0b1bd9',
      'filename' => 'xPDOTransportVehicle/dee4eb3bc8c2f0d66eec42b3ff916935.vehicle',
      'namespace' => 'flexibility',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '3b50dc0c5a2d123d7cc8a8a351c2552c',
      'native_key' => '3b50dc0c5a2d123d7cc8a8a351c2552c',
      'filename' => 'xPDOTransportVehicle/e5904e9d3c375cd3c410a9c5f1a43e9f.vehicle',
      'namespace' => 'flexibility',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'e8cf8164057deff7a45c86e16c455235',
      'native_key' => 'e8cf8164057deff7a45c86e16c455235',
      'filename' => 'xPDOTransportVehicle/d4034bfaf764b15ef2b5a8b3cc24e797.vehicle',
      'namespace' => 'flexibility',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '87a4e92c3c330f00671ff18cd2e088b7',
      'native_key' => '87a4e92c3c330f00671ff18cd2e088b7',
      'filename' => 'xPDOTransportVehicle/a7b352c81fd3d91f714daa5ac740789d.vehicle',
      'namespace' => 'flexibility',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '4527e64aa5cc9e093394294040028074',
      'native_key' => '4527e64aa5cc9e093394294040028074',
      'filename' => 'xPDOTransportVehicle/7d2befaa29275ead9ea8a994f0e8e2e8.vehicle',
      'namespace' => 'flexibility',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'de4808c91600f047f3a20b63c15ed710',
      'native_key' => 'de4808c91600f047f3a20b63c15ed710',
      'filename' => 'xPDOTransportVehicle/a0b53a1a406e85d15306293e467a7459.vehicle',
      'namespace' => 'flexibility',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '55cec0714068d6f89d7fd460e6702f79',
      'native_key' => '55cec0714068d6f89d7fd460e6702f79',
      'filename' => 'xPDOTransportVehicle/4c9cc6b7c893eeca02a0ceda3f9af666.vehicle',
      'namespace' => 'flexibility',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'fb32b7de59a0db2db4138e89085352d1',
      'native_key' => 'fb32b7de59a0db2db4138e89085352d1',
      'filename' => 'xPDOTransportVehicle/5f2f1bed11bbddf053355068843cbed1.vehicle',
      'namespace' => 'flexibility',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '77a6499624f0961127283735570d83f2',
      'native_key' => '77a6499624f0961127283735570d83f2',
      'filename' => 'xPDOTransportVehicle/f9396d4df193db5a8e27a1a22920da85.vehicle',
      'namespace' => 'flexibility',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'a890ee2f1d2090b9cbc7eb0fecc395cc',
      'native_key' => 1,
      'filename' => 'modCategory/73e87a4617c599d92b0a247bbd8e4c12.vehicle',
      'namespace' => 'flexibility',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '118fdfde37c297ec2ed0f94aacc94456',
      'native_key' => 1,
      'filename' => 'modResource/19016de3831c3cccd05d5fc5b9a41779.vehicle',
      'namespace' => 'flexibility',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '6d84d0ed8335fa1ed42e1d157946f9cf',
      'native_key' => 2,
      'filename' => 'modResource/c99aab4e770749870d792be74b2c4367.vehicle',
      'namespace' => 'flexibility',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '4db5451dbab41839309ee99dfea456a3',
      'native_key' => 3,
      'filename' => 'modResource/4baee6a77d1477cabb8ea242685bc223.vehicle',
      'namespace' => 'flexibility',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '64eccae884366a734e9223b4bf934fa2',
      'native_key' => 4,
      'filename' => 'modResource/e62aca4acbab31e42e44cff445d514ee.vehicle',
      'namespace' => 'flexibility',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => 'ee8a3dc963aa9b0564c151815b9702b2',
      'native_key' => 5,
      'filename' => 'modResource/1a97f6b17c0d876a37335ed78a066863.vehicle',
      'namespace' => 'flexibility',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '7e6c2371bd7c7ffad494e73152b62172',
      'native_key' => 6,
      'filename' => 'modResource/7dfa5b1d700866626e87314361212b9c.vehicle',
      'namespace' => 'flexibility',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '86f3bdda7f83752d4071f4c6ede02d2e',
      'native_key' => 7,
      'filename' => 'modResource/5923fe0d4e1d709769721e1dc2cc66af.vehicle',
      'namespace' => 'flexibility',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '8abd7a74539b1fdc8519bc3e65d8c4ea',
      'native_key' => 8,
      'filename' => 'modResource/c6abf3feb3a42a14cf0e5aed0d3e63c0.vehicle',
      'namespace' => 'flexibility',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '8a3b64985def45d9e2015135a0d4336c',
      'native_key' => 9,
      'filename' => 'modResource/61abd09a9392cfa90e8e79bd3ac33d15.vehicle',
      'namespace' => 'flexibility',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '39dae2a99720132420df28c5e21e0ee0',
      'native_key' => 10,
      'filename' => 'modResource/16797115b5cb4a2be832f9222a814672.vehicle',
      'namespace' => 'flexibility',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => 'eb5902ffb9eaad71dd392e084eacdec8',
      'native_key' => 11,
      'filename' => 'modResource/5643271e6f4a4f5ca7b7f51ce7702c37.vehicle',
      'namespace' => 'flexibility',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '0eb2899477a5c292458dea25e259f1af',
      'native_key' => 12,
      'filename' => 'modResource/aa929ec0c7c5cfbb9bfa9897b8e80e21.vehicle',
      'namespace' => 'flexibility',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '445e8eff5c53e4e2a7af116fa1d2678b',
      'native_key' => 13,
      'filename' => 'modResource/e666588be9c67fc71cf099878007ad89.vehicle',
      'namespace' => 'flexibility',
    ),
  ),
);