<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bid Verbiage</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato&display=swap">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2pdf.js@0.9.2/dist/html2pdf.bundle.min.js"></script>

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
    <div class="receipt">
        <div class="company-info">
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
            </span>
            <span class="company-address">
                @if($_GET['clientCode'] === '1')
                5906A 38TH AveWoodside, NY 11377

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
            </span>
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
            <div class="property-info">
                <strong>Workorder# </strong><span id="work-order-number">[Work Order Number]</span><br>
                <strong>Property Address: </strong> <span id="property-address">[Property Address]</span>
            </div>

            <div class="line-before"></div>
            <div class="scope-of-work"><strong>Scope of Work</strong></div>
            <div class="line-after"></div>

            <div id="content-area"></div><br>
            <div id="pagination"></div><br>

<!-- Print Button -->
<button id="print-button" class="btn btn-primary">Print this Page</button>



        </div>
        <script>
            const urlParams = new URLSearchParams(window.location.search);
            const receivedData = urlParams.get('data');
            const propertyAddress = urlParams.get('property-address');
            const workOrderNumber = urlParams.get('wo-number');
            const products = JSON.parse(decodeURIComponent(receivedData));
            const productList = document.getElementById("product-list");


            // Function to create actionDescription based on the product
            function createActionDescription(product) {
                let actionDescription = '';
                switch (product.actionPerform) {
                    case "Trim Shrubs":
                        actionDescription =
                            `Trim approx. (${product.quantity}) ${product.unit} of overgrown shrubs and bushes located at the ${product.location} of the property - dispose of clippings.`;
                        break;

                    case "Trim Medium Tree":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 9 - 18 inch diameter and up to 17 - 24 feet tall off medium tree located at the ${product.location} of the property.`;
                        break;

                    case "Trim Small Tree":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} up to 8-inch diameter and up to 16 feet small tree located at the ${product.location} of the property.`;
                        break;

                    case "Trim Large Tree":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 19 - 38-inch diameter and up to 25-50 feet tall off large tree located at the ${product.location} of the property.`;
                        break;

                    case "Trim Extra Large Tree":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;

                        case "Remove Saplings":
                        actionDescription =
                            `Remove (${product.quantity}) sapling from around the main house located at the ${product.location} of the property - Includes Disposal or Haul Away.`;
                        break;

                        case "Remove Exterior Debris":
                        actionDescription =
                            `Remove approx. (${product.quantity}) ${product.unit} of exterior debris from the ${product.location} of the property consisting of trash, woods, boards, ladders and other misc. debris.`;
                        break;

                        case "Remove Interior Debris":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;

                        case "Remove Tires":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;

                        case "Remove Mattress":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;

                        case "Install Handrail":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Repair deck steps":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Remove Fridge":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Remove Bush and leaves from Deck":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Electrical Inspection":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Structural Inspection":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Install lockset":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Clean Toilet":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Relocate Satellite dish":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Remove drywall":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Remove Insulation":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Kilz":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Remove TV":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;
                        case "Remove Cars":
                        actionDescription =
                            `Trim (${product.quantity}) ${product.unit} 68-inch diameter and up to 51 feet tall off extra-large tree located at the ${product.location} of the property.`;
                        break;


                    case "Maid Refresh":
                        actionDescription =
                            `Clean (${product.quantity}) rooms in the ${product.location} of the property.`;
                        break;


                    default:
                        actionDescription = `Performing ${product.actionPerform} at ${product.location}`;
                        break;
                }
                // Add reason text if it exists
                let reasonText = product.reason && product.reason.trim() !== '' ? ` Reason - ${product.reason}.` : '';
                actionDescription += reasonText;

                // Append price information
                if (product.totalCost !== undefined) {
                    actionDescription += ` <strong>Price: $${product.totalCost.toFixed(2)}</strong>`;
                }

                // Add disclaimer text if it exists
                let disclaimerText = product.disclaimer && product.disclaimer.trim() !== '' ?
                    `<br><strong>** ${product.disclaimer} **</strong>` : '';
                actionDescription += disclaimerText;

                // Ensure the main action description ends with a <br> tag
                actionDescription += '<br>';

                return actionDescription;

            }

            // Function to distribute text across pages
            function distributeText(products) {
                const wordsPerPage = 350; // Maximum words per page
                let currentPage = 1;
                let currentWordCount = 0;
                let allPagesContent = {};

                products.forEach((product, index) => {
                    let actionDescription = createActionDescription(product);
                    let words = actionDescription.split(/\s+/); // Split description into words

                    // Check if a new page is needed before starting a new product description
                    if (currentWordCount + words.length > wordsPerPage) {
                        currentPage++;
                        currentWordCount = 0;
                    }

                    if (!allPagesContent[currentPage]) {
                        allPagesContent[currentPage] = [];
                    }

                    // Add the title for the action description
                    allPagesContent[currentPage].push(
                        `<strong>${index + 1}. ${product.actionPerform}:</strong> `);

                    words.forEach(word => {
                        if (currentWordCount >= wordsPerPage) {
                            currentPage++;
                            currentWordCount = 0;
                            allPagesContent[currentPage] = [];
                            allPagesContent[currentPage].push('');
                        }

                        // Add words to the current page
                        allPagesContent[currentPage][allPagesContent[currentPage].length - 1] +=
                            `${word} `;
                        currentWordCount++;
                    });

                    // Add a break after each action description
                    allPagesContent[currentPage][allPagesContent[currentPage].length - 1] += '<br>';
                });

                return allPagesContent;
            }

    // Modify renderContent function
    function renderContent() {
        const allPagesContent = distributeText(products);
        const contentArea = document.getElementById('content-area');
        const pagination = document.getElementById('pagination');

        // Clear previous contents
        contentArea.innerHTML = '';
        pagination.innerHTML = '';

        // Render pages for viewing
        Object.keys(allPagesContent).forEach(pageNumber => {
            let pageDiv = document.createElement('div');
            pageDiv.id = `page-${pageNumber}`;
            pageDiv.classList.add('page-content');
            pageDiv.innerHTML = allPagesContent[pageNumber].join('');
            contentArea.appendChild(pageDiv);
            pageDiv.style.display = 'none'; // Hide the page initially
        });

        // Render pagination buttons
        for (let i = 1; i <= Object.keys(allPagesContent).length; i++) {
            let pageButton = document.createElement('button');
            pageButton.innerText = `Page ${i}`;
            pageButton.addEventListener('click', function () {
                document.querySelectorAll('.page-content').forEach(page => page.style.display = 'none');
                document.getElementById(`page-${i}`).style.display = 'block';
            });
            pagination.appendChild(pageButton);
        }

        // Show the first page initially
        if (Object.keys(allPagesContent).length > 0) {
            document.getElementById('page-1').style.display = 'block';
        }

        // Compile all pages into one container for PDF generation
        compileAllPagesForPdf(allPagesContent);
    }

// Event listener for the Print button
document.getElementById('print-button').addEventListener('click', function() {
    window.print();
});
            // Call renderContent on page load
            document.addEventListener('DOMContentLoaded', renderContent);
            if (propertyAddress) {
                    document.querySelector("#property-address").textContent = propertyAddress;
                }
        
                if (workOrderNumber) {
                    document.querySelector("#work-order-number").textContent = workOrderNumber;
                }


            
        </script>

</body>

</html>
