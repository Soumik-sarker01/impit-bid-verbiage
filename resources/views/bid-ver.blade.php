<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bid Verbiage Print</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    @if(isset($_GET['clientCode']))
    @if($_GET['clientCode'] === '1')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/unique_preservation.css') }}">
    @php
    $logoImage = 'images/unique_logo.PNG';
    @endphp

    @elseif($_GET['clientCode'] === '2')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/planners_solution.css') }}">
    @php
    $logoImage = 'images/planners_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '3')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/secure_asset_management.css') }}">
    @php
    $logoImage = 'images/secure_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '4')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/brollex.css') }}">
    @php
    $logoImage = 'images/brollex_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '5')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/effcy.css') }}">
    @php
    $logoImage = 'images/effcy_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '6')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cardinal_asset_management.css') }}">
    @php
    $logoImage = 'images/cardinal_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '8')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sn_field_services_inc.css') }}">
    @php
    $logoImage = 'images/sn_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '9')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/quality_home_maintenance.css') }}">
    @php
    $logoImage = 'images/quality_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '10')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rite_option_preservation.css') }}">
    @php
    $logoImage = 'images/rite_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '11')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/care_guard_preservation.css') }}">
    @php
    $logoImage = 'images/care_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '13')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/heaven_property_management.css') }}">
    @php
    $logoImage = 'images/heaven_logo.png';
    @endphp

    @elseif($_GET['clientCode'] === '15')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/assurance_field_service.css') }}">
    @php
    $logoImage = 'images/assurance_logo.png';
    @endphp

    @endif
    @endif
</head>

<body>

    <div class="header">
        @if(isset($logoImage))
        <img class="company-logo" src="{{ asset($logoImage) }}" alt="Company Logo">
        <span class="company-name">
            @if($_GET['clientCode'] === '1')
            Unique Preservation Solutions LLC

            @elseif($_GET['clientCode'] === '2')
            Planners Solution LLC

            @elseif($_GET['clientCode'] === '3')
            Secure Asset Management LLC

            @elseif($_GET['clientCode'] === '4')
            Brollex LLC.

            @elseif($_GET['clientCode'] === '5')
            EFFCY LLC

            @elseif($_GET['clientCode'] === '6')
            Cardinal Asset Management LLC

            @elseif($_GET['clientCode'] === '8')
            SN Field Services Inc

            @elseif($_GET['clientCode'] === '9')
            QUALITY HOME MAINTAINANCE LLC

            @elseif($_GET['clientCode'] === '10')
            Rite - Option Preservation LLC

            @elseif($_GET['clientCode'] === '11')
            Care-Guard Preservation LLC

            @elseif($_GET['clientCode'] === '13')
            HEAVEN PROPERTY MANAGEMENT LLC

            @elseif($_GET['clientCode'] === '15')
            Assurance Field Service LLC
            @endif
        </span><br>
        <span class="company-address">
            @if($_GET['clientCode'] === '1')
            5906A 38TH Ave Woodside, NY 11377

            @elseif($_GET['clientCode'] === '2')
            2059 SAINT RAYMOND AVE APT-4F BRONX, NY-10462

            @elseif($_GET['clientCode'] === '3')
            7829 Cardinal Cove North, Indianapolis, IN 46256

            @elseif($_GET['clientCode'] === '4')
            5703 Lawrence St, Flushing NY, 11355.

            @elseif($_GET['clientCode'] === '5')
            983 Horsham Road, North Wales, PA 19454

            @elseif($_GET['clientCode'] === '6')
            8024 Cardinal Cove W, Indianapolis, IN - 46256<br>

            @elseif($_GET['clientCode'] === '8')
            2354 Quimby av apt # 1 FL, Bronx, NY 10473<br>

            @elseif($_GET['clientCode'] === '9')
            34-21 77TH STREET - SUITE 306 JACKSON HEIGHTS, NY 11372

            @elseif($_GET['clientCode'] === '10')
            6420 Cablet Ct, Springfield, VA 22150<br>

            @elseif($_GET['clientCode'] === '11')
            5430 CORTEEN PL APT 19 VALLEY VLG, CA 91607<br>

            @elseif($_GET['clientCode'] === '13')
            431 N ARMISTEAD ST APT T5 ALEXANDRIA, VA 22312<br>

            @elseif($_GET['clientCode'] === '15')
            416 N ARMISTEAD ST APT TI ALEXANDRIA, VA 22312<br>
            @endif
        </span><br>
        <span class="contact-info">
            @if($_GET['clientCode'] === '1')
            Phone: (347) 712-3629<br>
            Email: uniquepressolutions@gmail.com

            @elseif($_GET['clientCode'] === '2')
            Phone: (917) 267-7494, (917) 977 – 0891<br>
            Email: plannerssolution20@gmail.com

            @elseif($_GET['clientCode'] === '3')
            Office Phone # 317 759 7919<br>
            Email: secureassetmgmt@gmail.com

            @elseif($_GET['clientCode'] === '4')
            Phone: 718 717 8092<br>
            Email: contact.brollex@gmail.com

            @elseif($_GET['clientCode'] === '5')
            Phone: +1 267 498 5584<br>
            Email: effcyltd@gmail.com

            @elseif($_GET['clientCode'] === '6')
            Phone: +1 317 527 0908<br>
            Email: contact.cardinalasset@gmail.com

            @elseif($_GET['clientCode'] === '8')
            Phone: +1 347 901 4996<br>
            Email: contact.snfield@gmail.com

            @elseif($_GET['clientCode'] === '9')
            Phone: +1 347 979 2992<br>
            Email: qualityhomemaintainance@gmail.com

            @elseif($_GET['clientCode'] === '10')
            Phone: 703-436-2243<br>
            Email: riteoptionpreservation@gmail.com

            @elseif($_GET['clientCode'] === '11')
            Office Phone: 213 342 8424<br>
            Email: careguardpreservation@gmail.com

            @elseif($_GET['clientCode'] === '13')
            Phone: +1 5717487299<br>
            Email: heavenpropertymgmt@gmail.com

            @elseif($_GET['clientCode'] === '15')
            Phone: 7038737835<br>
            Email: assurancefields@gmail.com

            @endif
        </span>
        @endif
        <!-- Placeholders for clientCode, woNumber, and propertyAddress -->
        <div id="clientCode"></div>
        <div class="info-box">
            <b>
                <div id="woNumber"></div>
            </b>
            <b>
                <div id="propertyAddress"></div>
            </b>
        </div>

        <div class="line-before"></div>
        <h3 class="scope-of-work text-center">Scope of Work</h3>
        <div class="line-after"></div>
    </div>

    <div class="content">
        <div id="bidData">
            <!-- Bid data will be dynamically added here -->
        </div>
    </div>
    <p class="text-center"><b>Total Cost: <span id="totalCostSum">$0.00</span></b></p>

    <div class="footer">
        <p class="thank-you-msg text-center">Thank you for your business!</p>
        @if(isset($logoImage))
        <img class="company-logo" src="{{ asset($logoImage) }}" alt="Company Logo">
        <span class="company-name">
            @if($_GET['clientCode'] === '1')
            Unique Preservation Solutions LLC

            @elseif($_GET['clientCode'] === '2')
            Planners Solution LLC

            @elseif($_GET['clientCode'] === '3')
            Secure Asset Management LLC

            @elseif($_GET['clientCode'] === '4')
            Brollex LLC.

            @elseif($_GET['clientCode'] === '5')
            EFFCY

            @elseif($_GET['clientCode'] === '6')
            Cardinal Asset Management LLC

            @elseif($_GET['clientCode'] === '8')
            SN Field Services Inc

            @elseif($_GET['clientCode'] === '9')
            QUALITY HOME MAINTAINANCE LLC

            @elseif($_GET['clientCode'] === '10')
            Rite - Option Preservation LLC

            @elseif($_GET['clientCode'] === '11')
            Care-Guard Preservation LLC

            @elseif($_GET['clientCode'] === '13')
            HEAVEN PROPERTY MANAGEMENT LLC

            @elseif($_GET['clientCode'] === '15')
            Assurance Field Service LLC
            @endif
        </span><br>
        <span class="company-address">
            @if($_GET['clientCode'] === '1')
            5906A 38TH Ave Woodside, NY 11377

            @elseif($_GET['clientCode'] === '2')
            2059 SAINT RAYMOND AVE APT-4F BRONX, NY-10462

            @elseif($_GET['clientCode'] === '3')
            7829 Cardinal Cove North, Indianapolis, IN 46256

            @elseif($_GET['clientCode'] === '4')
            5703 Lawrence St, Flushing NY, 11355.

            @elseif($_GET['clientCode'] === '5')
            983 Horsham Road, North Wales,<br>
            PA 19454<br>

            @elseif($_GET['clientCode'] === '6')
            8024 Cardinal Cove W, Indianapolis,<br>
            IN - 46256<br>

            @elseif($_GET['clientCode'] === '8')
            2354 Quimby av apt # 1 FL<br>
            Bronx NY 10473<br>

            @elseif($_GET['clientCode'] === '9')
            34-21 77TH STREET - SUITE 306<br>
            JACKSON HEIGHTS, NY 11372<br>

            @elseif($_GET['clientCode'] === '10')
            6420 Cablet Ct, Springfield, VA 22150<br>

            @elseif($_GET['clientCode'] === '11')
            5430 CORTEEN PL APT 19 VALLEY VLG,<br>
            CA 91607<br>

            @elseif($_GET['clientCode'] === '13')
            431 N ARMISTEAD ST APT T5<br>
            ALEXANDRIA, VA 22312<br>

            @elseif($_GET['clientCode'] === '15')
            416 N ARMISTEAD ST APT TI <br>
            ALEXANDRIA, VA 22312<br>
            @endif
        </span><br>
        <span class="contact-info">
            @if($_GET['clientCode'] === '1')
            Phone: (347) 712-3629<br>
            Email: uniquepressolutions@gmail.com

            @elseif($_GET['clientCode'] === '2')
            Phone: (917) 267-7494, (917) 977 – 0891<br>
            Email: plannerssolution20@gmail.com

            @elseif($_GET['clientCode'] === '3')
            Office Phone # 317 759 7919<br>
            Email: secureassetmgmt@gmail.com

            @elseif($_GET['clientCode'] === '4')
            Phone: 718 717 8092<br>
            Email: contact.brollex@gmail.com

            @elseif($_GET['clientCode'] === '5')
            Phone: +1 267 498 5584<br>
            Email: effcyltd@gmail.com

            @elseif($_GET['clientCode'] === '6')
            Phone: +1 317 527 0908<br>
            Email: contact.cardinalasset@gmail.com

            @elseif($_GET['clientCode'] === '8')
            Phone: +1 347 901 4996<br>
            Email: contact.snfield@gmail.com

            @elseif($_GET['clientCode'] === '9')
            Phone: +1 347 979 2992<br>
            Email: qualityhomemaintainance@gmail.com

            @elseif($_GET['clientCode'] === '10')
            Phone: 703-436-2243<br>
            Email: riteoptionpreservation@gmail.com

            @elseif($_GET['clientCode'] === '11')
            Office Phone: 213 342 8424<br>
            Email: careguardpreservation@gmail.com

            @elseif($_GET['clientCode'] === '13')
            Phone: +1 5717487299<br>
            Email: heavenpropertymgmt@gmail.com

            @elseif($_GET['clientCode'] === '15')
            Phone: 7038737835<br>
            Email: assurancefields@gmail.com

            @endif
        </span>
        @endif
    </div>

    <div class="no-print text-center mt-5">
        <button onclick="window.print()" class="btn btn-primary">Print</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const params = new URLSearchParams(window.location.search);
            const bidData = JSON.parse(decodeURIComponent(params.get('data')));
            const dataContainer = document.getElementById('bidData');

            let totalWordCount = 0;
            let totalCost = 0; // Variable to store the sum of all total costs

            let scopeOfWorkCounts = {};
            let uniqueScopeIndex = 1; // Track unique scope of work

            bidData.forEach((item, index) => {
                let reasonText = item.reason.trim() !== '' ?
                    `<strong>Reason -</strong> ${item.reason}.` : '';
                let disclaimerText = item.disclaimer.trim() !== '' ?
                    `<strong>** ${item.disclaimer} **</strong><br>` : '';
                let locationText = item.location.trim() !== '' ?
                    `<strong>Location -</strong> ${item.location}.` : '';
                let itemContent = '';


                let quantity = item.quantity && item.quantity.trim() !== '' ? `(${item.quantity})` : '';

                if (item.action === 'Install Padlock & Hasp') {
                    itemContent =
                        `Install ${quantity} padlock and hasp to ${item.scopeOfWork} to secure. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                } else if (item.action === 'Install Lockset') {
                    itemContent =
                        `Install ${quantity} lockset with code (44535) to secure. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                } else if (item.action === 'Install Lockbox') {
                    itemContent =
                        `Install ${quantity} lockbox with code (1357) and place working keys inside. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                } else if (item.action === 'Remove & Replace' && item.scopeOfWork === 'Door') {
                    itemContent =
                        `${item.action} ${quantity} ${quantity} ${item.scopeOfWork} to secure. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                } else if (item.unit !== 'EA') {
                    if (item.action === 'Remove & Replace') {
                        itemContent =
                            `${item.action} ${quantity} ${item.unit} ${item.scopeOfWork}. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.action === 'Remove' && item.scopeOfWork === 'Exterior Debris') {
                        itemContent =
                            `${item.action} ${quantity} ${item.unit}(s) ${item.scopeOfWork} consisting of broken items, woods, trash and other misc. debris - Includes haul away and disposal. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.action === 'Remove' && item.scopeOfWork === 'Interior Debris') {
                        itemContent =
                            `${item.action} ${quantity} ${item.unit}(s) ${item.scopeOfWork} consisting of boxes, trash, cloths, boards, furnitures and other misc. debris  - Includes haul away and disposal. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.action === 'Remove' && item.scopeOfWork === 'Hazardous Debris') {
                        itemContent =
                            `${item.action} ${quantity} ${item.unit}(s) ${item.scopeOfWork} consisting of spray, liquid hazardous and other misc. debris - Includes haul away and disposal. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.action === 'Remove Drywall' && item.scopeOfWork ===
                        'Ceiling - Mold') {
                        itemContent =
                            `Remove ${quantity} ${item.unit} drywall ceiling and dispose of. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.action === 'Remove Insulation' && item.scopeOfWork ===
                        'Ceiling - Mold') {
                        itemContent =
                            `Remove ${quantity} ${item.unit} insulation ceiling and dispose of. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.action === 'Apply Antimicrobial' && item.scopeOfWork ===
                        'Ceiling - Mold') {
                        itemContent =
                            `Spray and Wipe down approx. ${quantity} ${item.unit} ceiling to help prevent water intrusion into interior rooms as best as possible .  ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.action === 'Apply Kilz' && item.scopeOfWork === 'Ceiling - Mold') {
                        itemContent =
                            `After Antimicrobial treatment, Kilz approx. ${quantity} ${item.unit} ceiling with Bleach. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.action === 'Perform' && item.scopeOfWork === 'Sales clean') {
                        itemContent =
                            `${item.action} ${item.scopeOfWork} on ${quantity} ${item.unit} to include but not limited to Mopping, Vacuuming, Sweeping, cleaning windows, cleaning
                             all appliances inside and out, wiping down all Counters, Cabinets, Sinks, toilets, Showers, Tubs, Ceiling Fans, etc. <strong>** Potential unseen damages unseen due to excess amount of debris present. Bids will be provided as needed after debris
                             removal is completed. **</strong>
                             ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else {
                        item.action === 'Remove'
                        itemContent =
                            `${item.action} ${quantity} ${item.unit} ${item.scopeOfWork}. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    }

                } else if (item.unit === 'EA') {
                    if (item.action === 'Remove & Replace' && (item.scopeOfWork === 'Bilco Door' || item
                            .scopeOfWork === 'Crawlspace' || item.scopeOfWork === 'Barn' || item
                            .scopeOfWork === 'Basement Door' || item.scopeOfWork === 'Garage')) {
                        itemContent =
                            `${item.action} ${quantity} ${item.scopeOfWork} to secure right. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.action === 'Remove' && (item.scopeOfWork === 'TV' || item
                            .scopeOfWork === 'Mattress' || item.scopeOfWork === 'Paint Can')) {
                        itemContent =
                            `${item.action} ${quantity} ${item.scopeOfWork}(s). ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.quantity === '1' && item.scopeOfWork === 'Structural Inspection') {
                        itemContent =
                            `Perform structural integrity inspection evaluation of the property to determine the full extent of safety issues and provide exact bids to address. May require 2-3 weeks to complete due to 3rd party scheduling. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.quantity === '1' && item.scopeOfWork === 'Lead Inspection') {
                        itemContent =
                            `Property was built before 1970. Need to Perform lead paint lab kit test due to age of house to determine extent of danger and provide exact remediation bids required to address. Will collect 5 samples to test for lead paint. NOTE: May require 2-3 weeks to complete due to 3rd party scheduling. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.quantity === '1' && item.scopeOfWork === 'Asbestos Inspection') {
                        itemContent =
                            `Need to Perform asbestos paint lab kit test due to age of house to determine extent of danger and provide exact remediation bids required to address. Will collect 5 samples to test for asbestos paint. NOTE: May require 2-3 weeks to complete due to 3rd party scheduling. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.quantity === '1' && item.scopeOfWork === 'Electrical Inspection') {
                        itemContent =
                            `Have a licensed Electrician Visually inspect the damages to the electrical system and provide estimates for repairs up to 2 hours. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.quantity === '1' && item.scopeOfWork === 'HVAC Inspection') {
                        itemContent =
                            `Perform HVAC inspection by license HVAC company to determine extent of damages and provide exact bids to address. Note: may require 2-3 weeks to complete due to 3rd party scheduling. Bid provided for third party inspection. Before the inspection can be completed the third party may require utilities to be activated by the bank. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.quantity === '1' && item.scopeOfWork === 'Plumbing Inspection') {
                        itemContent =
                            `Have a licensed Plumber inspect the Plumbing for damages and provide detailed bid for Repairs - Will be Required to obtain estimate from plumber as well as photo of Plumbers truck and Business Card - Photos of Inspection must be Document. NOTE: May require 2-3 weeks to complete due to 3rd party scheduling. Bid provided for third party inspection. Before the inspection can be completed the third party may require utilities to be activated by the bank. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.quantity === '1' && item.scopeOfWork === 'Pressure Test') {
                        itemContent =
                            `Pressure test and inspect the plumbing for damages and provide estimates for repairs as discovered (does not include any drywall removal). ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.quantity === '1' && item.scopeOfWork === 'Roof Inspection') {
                        itemContent =
                            `Have a Licensed Roofer inspect the damages to the roof and provide a detailed and Accurate Estimate for repairs - A written estimate will be required from the inspector as well as photos of Roofers Truck/Signage - Photos of Inspection must be Documented. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else if (item.quantity === '1' && item.scopeOfWork === 'Plumbing Lines') {
                        itemContent =
                            `${item.action} ${item.scopeOfWork}. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    } else {
                        itemContent =
                            `${item.action} ${quantity} ${item.scopeOfWork}. ${locationText} ${reasonText} <strong>Price: $${item.totalCost}</strong> <br>${disclaimerText}`;
                    }
                }

                const wordCount = itemContent.split(/\s+/).length;
                totalWordCount += wordCount;

                // Initialize or update count for this scope of work
                if (!scopeOfWorkCounts[item.scopeOfWork]) {
                    scopeOfWorkCounts[item.scopeOfWork] = {
                        count: 1,
                        index: uniqueScopeIndex
                    };
                    uniqueScopeIndex++; // Only increment when a new scope is encountered
                } else {
                    scopeOfWorkCounts[item.scopeOfWork].count++;
                }

                // Apply suffix starting from the first item if there are multiple items
                let suffix = '';
                if (scopeOfWorkCounts[item.scopeOfWork].count > 1 || bidData.some(bidItem => bidItem
                        .scopeOfWork === item.scopeOfWork && bidItem !== item)) {
                    suffix = String.fromCharCode(64 + scopeOfWorkCounts[item.scopeOfWork].count);
                }

                let displayIndexWithSuffix = scopeOfWorkCounts[item.scopeOfWork].index + (suffix ?
                    suffix : '');

                // Append the item to the container
                const listItem = document.createElement('div');
                listItem.innerHTML =
                    `<strong>${displayIndexWithSuffix}. ${item.action} ${item.scopeOfWork}: </strong>${itemContent}<br>`;
                dataContainer.appendChild(listItem);


                if (totalWordCount >= 350) {
                    const pageBreak = document.createElement('div');
                    pageBreak.className = 'page-break';
                    dataContainer.appendChild(pageBreak);
                    totalWordCount = 0;
                }
                totalCost += parseFloat(item.totalCost);
            });
            const clientCodeEl = document.getElementById('clientCode');
            const woNumberEl = document.getElementById('woNumber');
            const propertyAddressEl = document.getElementById('propertyAddress');

            const clientCode = params.get('clientCode');
            const woNumber = params.get('wo-number');
            const propertyAddress = params.get('property-address');

            clientCodeEl.textContent = `Client Code: ${clientCode}`;
            woNumberEl.textContent = `Work Order Number: ${woNumber}`;
            propertyAddressEl.textContent = `Property Address: ${propertyAddress}`;
            document.getElementById('totalCostSum').textContent = `$${totalCost.toFixed(2)}`;

        });

    </script>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
